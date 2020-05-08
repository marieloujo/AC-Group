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


use App\Models\Expertises;


class ExpertisesController extends Controller
{
    

    public function __construct()
    {
        //
    }




    public function expertises(Request $request)
    {

        //dump(Str::random()).die();

        return view('admin.expertises', array(
            'namePage'=>'expertises',
            'expertises'=> Expertises::all())
        );
    }




    public function addExpertise(Request $request) {
        

        /*$validator = Validator::make($request->all(), Expertises::$rules);
        $validator->validate();
        die();*/

        if($request->isMethod('POST')){ 



            if($request->input('id') == null) { // this is creation



                $fileName = Str::random().'.'.$request->file('fichier_image')->getClientOriginalExtension();

                Expertises::create(
                    array(
                        'image' => $fileName,
                        'titre' => $request->input('titre'),
                        'description' => $request->input('description')
                    )
                );

                $imageFile = $request->file('fichier_image');
                $imageFile->move(public_path().'/images/expertises',$fileName);


                Session::flash('success','Expertise ajouté avec succès.');
                return redirect()->route('admin_expertises');



            } else { // this is modification


                if($request->file('fichier_image') == null) { // image is not changed


                    $expertise = Expertises::where('id', '=', $request->input('id'))->first();

                    $expertise->titre = $request->input('titre');
                    $expertise->description = $request->input('description');

                    $expertise->save();


                } else { // image is changed


                    $fileName = Str::random().'.'.$request->file('fichier_image')->getClientOriginalExtension();

                    Storage::delete('/images/expertises'.$request->file('fichier_image'));
                    File::delete(public_path().'/images/expertises/'.$request->file('fichier_image')->getClientOriginalName());

                    $imageFile = $request->file('fichier_image');
                    $imageFile->move(public_path().'/images/expertises',$fileName);


                    $expertise = Expertises::where('id', '=', $request->input('id'))->first();
                    $expertise->titre = $request->input('titre');
                    $expertise->description = $request->input('description');
                    $expertise->image = $fileName;

                    $expertise->save();


                }

                Session::flash('success','Expertise modifié avec succès.');
                return redirect()->route('admin_expertises');



            }



        }

    }




    public function delete(Request $request, $idExpertise) {

        if($request->isMethod('POST')) {

            $expertise = Expertises::find($idExpertise);
            $expertise->delete();

            Storage::delete('/images/expertises'.$expertise->image);
            File::delete(public_path().'/images/expertises/'.$expertise->image);
            Session::flash('success', 'Expertise supprimé avec succès !');
            return redirect()->back();


        }

    }



}
