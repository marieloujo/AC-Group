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


use App\Models\Temoignages;


class TemoignagesController extends Controller
{
    

    public function __construct()
    {
        //
    }




    public function Temoignages(Request $request)
    {

        return view('admin.temoignages', array(
            'namePage'=>'temoignages',
            'temoignages'=> Temoignages::all())
        );
    }




    public function ajouter(Request $request) {
        

        if($request->isMethod('POST')){ 


            if($request->input('id') == null) { // this is creation


                if($request->file('fichier_photo') == null) {

                    Temoignages::create(
                        array(
                            'name' => $request->input('name'),
                            'description' => $request->input('description')
                        )
                    );    

                } else{

                    $fileName = Str::random().'.'.$request->file('fichier_photo')->getClientOriginalExtension();

                    Temoignages::create(
                        array(
                            'photo' => $fileName,
                            'name' => $request->input('name'),
                            'description' => $request->input('description')
                        )
                    );

                    $photoFile = $request->file('fichier_photo');
                    $photoFile->move(public_path().'/photos/temoignages',$fileName);

                }

                Session::flash('success','Temoignage ajouté avec succès.');
                return redirect()->route('admin_temoignages');


            } else { // this is modification


                if($request->file('fichier_photo') == null) { // photo is not changed


                    $temoignage = Temoignages::where('id', '=', $request->input('id'))->first();

                    $temoignage->name = $request->input('name');
                    $temoignage->description = $request->input('description');

                    $temoignage->save();


                } else { // photo is changed


                    $fileName = Str::random().'.'.$request->file('fichier_photo')->getClientOriginalExtension();

                    Storage::delete('/photos/temoignages'.$request->file('fichier_photo'));
                    File::delete(public_path().'/photos/temoignages/'.$request->file('fichier_photo')->getClientOriginalName());

                    $photoFile = $request->file('fichier_photo');
                    $photoFile->move(public_path().'/photos/temoignages',$fileName);


                    $temoignage = Temoignages::where('id', '=', $request->input('id'))->first();
                    $temoignage->name = $request->input('name');
                    $temoignage->description = $request->input('description');
                    $temoignage->photo = $fileName;

                    $temoignage->save();


                }

                Session::flash('success','Temoignage modifié avec succès.');
                return redirect()->route('admin_temoignages');



            }



        }

    }




    public function delete(Request $request, $idTemoignage) {

        if($request->isMethod('POST')) {

            $temoignage = Temoignages::find($idTemoignage);
            $temoignage->delete();

            Storage::delete('/photos/temoignages'.$temoignage->photo);
            File::delete(public_path().'/photos/temoignages/'.$temoignage->photo);
            Session::flash('success', 'Temoignage supprimé avec succès !');
            return redirect()->back();


        }

    }



}
