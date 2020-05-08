<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


use App\Models\Realisations;


class RealisationsController extends Controller
{
    

    public function __construct()
    {
        //
    }




    public function realisations(Request $request)
    {

        //dump(Str::random()).die();

        return view('admin.realisations', array(
            'namePage'=>'realisations',
            'realisations'=> Realisations::all())
        );
    }




    public function ajouter(Request $request) {

        if($request->isMethod('POST')){ 


            if($request->input('id') == null) { // this is creation

                $fileName = Str::random().'.'.$request->file('fichier_image')->getClientOriginalExtension();

                Realisations::create(
                    array(
                        'image' => $fileName,
                        'libelle' => $request->input('libelle'),
                        'description' => $request->input('description'),
                        'date' => $request->input('date'),
                        'adresse' => $request->input('adresse')
                    )
                );

                $imageFile = $request->file('fichier_image');
                $imageFile->move(public_path().'/images/realisations',$fileName);

                
                Session::flash('success','Realisation ajouté avec succès.');
                return redirect()->route('admin_realisations');


            } else { // this is modification


                if($request->file('fichier_image') == null) { // image is not changed


                    $realisation = Realisations::where('id', '=', $request->input('id'))->first();

                    $realisation->libelle = $request->input('libelle');
                    $realisation->description = $request->input('description');
                    $realisation->date = $request->input('date');
                    $realisation->adresse = $request->input('adresse');

                    $realisation->save();


                } else { // image is changed


                    $fileName = Str::random().'.'.$request->file('fichier_image')->getClientOriginalExtension();

                    Storage::delete('/images/realisations'.$request->file('fichier_image'));
                    File::delete(public_path().'/images/realisations/'.$request->file('fichier_image')->getClientOriginalName());

                    $imageFile = $request->file('fichier_image');
                    $imageFile->move(public_path().'/images/realisations',$fileName);


                    $realisation = Realisations::where('id', '=', $request->input('id'))->first();

                    $realisation->libelle = $request->input('libelle');
                    $realisation->description = $request->input('description');
                    $realisation->date = $request->input('date');
                    $realisation->adresse = $request->input('adresse');
                    $realisation->image = $fileName;

                    $realisation->save();

                }

                Session::flash('success','Realisation modifié avec succès.');
                return redirect()->route('admin_realisations');

            }



        }

    }




    public function delete(Request $request, $idRealisation) {

        if($request->isMethod('POST')) {

            $realisation = Realisations::find($idRealisation);
            $realisation->delete();

            Storage::delete('/images/realisations'.$realisation->image);
            File::delete(public_path().'/images/realisations/'.$realisation->image);
            Session::flash('success', 'realisation supprimé avec succès !');
            return redirect()->back();


        }

    }



}
