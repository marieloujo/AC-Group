<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


use App\Models\Formations;


class FormationsController extends Controller
{
    

    public function __construct()
    {
        //
    }




    public function formations(Request $request)
    {

        //dump(Str::random()).die();

        return view('admin.formations', array(
            'namePage'=>'formations',
            'formations'=> Formations::all())
        );
    }




    public function ajouter(Request $request) {

        if($request->isMethod('POST')){ 


            if($request->input('id') == null) { // this is creation

                if($request->file('fichier_image') == null) {

                    Formations::create(
                        array(
                            'date' => $request->input('date'),
                            'titre' => $request->input('titre'),
                            'description' => $request->input('description')
                        )
                    );

                } else {

                    $fileName = Str::random().'.'.$request->file('fichier_image')->getClientOriginalExtension();

                    Formations::create(
                        array(
                            'image' => $fileName,
                            'titre' => $request->input('titre'),
                            'description' => $request->input('description'),
                            'date' => $request->input('date')
                        )
                    );

                    $imageFile = $request->file('fichier_image');
                    $imageFile->move(public_path().'/images/formations',$fileName);

                }

                Session::flash('success','Formation ajouté avec succès.');
                return redirect()->route('admin_formations');


            } else { // this is modification


                if($request->file('fichier_image') == null) { // image is not changed


                    $formation = Formations::where('id', '=', $request->input('id'))->first();

                    $formation->titre = $request->input('titre');
                    $formation->description = $request->input('description');
                    $formation->date = $request->input('date');

                    $formation->save();


                } else { // image is changed


                    $fileName = Str::random().'.'.$request->file('fichier_image')->getClientOriginalExtension();

                    Storage::delete('/images/formations'.$request->file('fichier_image'));
                    File::delete(public_path().'/images/formations/'.$request->file('fichier_image')->getClientOriginalName());

                    $imageFile = $request->file('fichier_image');
                    $imageFile->move(public_path().'/images/formations',$fileName);


                    $formation = Formations::where('id', '=', $request->input('id'))->first();
                    $formation->titre = $request->input('titre');
                    $formation->description = $request->input('description');
                    $formation->date = $request->input('date');
                    $formation->image = $fileName;

                    $formation->save();


                }

                Session::flash('success','Formation modifié avec succès.');
                return redirect()->route('admin_formations');

            }



        }

    }




    public function delete(Request $request, $idFormation) {

        if($request->isMethod('POST')) {

            $formation = Formations::find($idFormation);
            $formation->delete();

            Storage::delete('/images/formations'.$formation->image);
            File::delete(public_path().'/images/formations/'.$formation->image);
            Session::flash('success', 'Formation supprimé avec succès !');
            return redirect()->back();


        }

    }



}
