<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Input;


use App\Models\Technologies;


class TechnologiesController extends Controller
{
    

    public function __construct()
    {
        //
    }




    public function Technologies(Request $request)
    {

        //dump(Str::random()).die();

        return view('admin.technologies', array(
            'namePage'=>'technologies',
            'technologies'=> Technologies::all())
        );
    }




    public function ajouter(Request $request) {
        

        if($request->isMethod('POST')){ 


            if($request->input('id') == null) { // this is creation


                $fileName = Str::random().'.'.$request->file('fichier_image')->getClientOriginalExtension();

                Technologies::create(
                    array(
                        'image' => $fileName,
                        'libelle' => $request->input('libelle'),
                        'description' => $request->input('description')
                    )
                );

                $imageFile = $request->file('fichier_image');
                $imageFile->move(public_path().'/images/technologies',$fileName);


                Session::flash('success','Technologie ajouté avec succès.');
                return redirect()->route('admin_technologies');



            } else { // this is modification


                if($request->file('fichier_image') == null) { // image is not changed


                    $technologie = Technologies::where('id', '=', $request->input('id'))->first();

                    $technologie->libelle = $request->input('libelle');
                    $technologie->description = $request->input('description');

                    $technologie->save();


                } else { // image is changed


                    $fileName = Str::random().'.'.$request->file('fichier_image')->getClientOriginalExtension();

                    Storage::delete('/images/technologies'.$request->file('fichier_image'));
                    File::delete(public_path().'/images/technologies/'.$request->file('fichier_image')->getClientOriginalName());

                    $imageFile = $request->file('fichier_image');
                    $imageFile->move(public_path().'/images/technologies',$fileName);


                    $technologie = Technologies::where('id', '=', $request->input('id'))->first();
                    $technologie->libelle = $request->input('libelle');
                    $technologie->description = $request->input('description');
                    $technologie->image = $fileName;

                    $technologie->save();


                }

                Session::flash('success','Technologie modifié avec succès.');
                return redirect()->route('admin_technologies');



            }



        }

    }




    public function delete(Request $request, $idTechnologie) {

        if($request->isMethod('POST')) {

            $technologie = technologies::find($idTechnologie);
            $technologie->delete();

            Storage::delete('/images/technologies'.$technologie->image);
            File::delete(public_path().'/images/technologies/'.$technologie->image);
            Session::flash('success', 'technologie supprimé avec succès !');
            return redirect()->back();


        }

    }



}
