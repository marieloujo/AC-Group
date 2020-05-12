<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    

    public function accueil(Request $request)
    {
        return view('index', array(
            'namePage'=>'accueil',
            'isContact'=>false)
        );
    }



    public function vision(Request $request)
    {
        return view('notre-vision', array(
            'namePage'=>'vision',
            'isContact'=>false)
        );
    }



    public function faq(Request $request)
    {
        return view('faq', array(
            'namePage'=>'faq',
            'isContact'=>true)
        );
    }



    public function expertises(Request $request)
    {
        return view('expertises', array(
            'namePage'=>'expertises',
            'isContact'=>false)
        );
    }



    public function actualites(Request $request)
    {
        return view('actualites', array(
            'namePage'=>'actualites',
            'isContact'=>false)
        );
    }


    public function contact(Request $request)
    {
        return view('contact', array(
            'namePage'=>'contact',
            'isContact'=>true)
        );
    }


    


}
