<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;



class MainController extends Controller
{
    

    public function accueil(Request $request)
    {

        //dump(App::getLocale()).die();

        return view('index', array(
            'namePage'=>'accueil',
            'locale' => App::getLocale(),
            'isContact'=>false)
        );
    }



    public function vision(Request $request)
    {
        return view('notre-vision', array(
            'namePage'=>'vision',
            'locale' => App::getLocale(),
            'isContact'=>false)
        );
    }



    public function faq(Request $request)
    {
        return view('faq', array(
            'namePage'=>'faq',
            'locale' => App::getLocale(),
            'isContact'=>true)
        );
    }



    public function expertises(Request $request)
    {
        return view('expertises', array(
            'namePage'=>'expertises',
            'locale' => App::getLocale(),
            'isContact'=>false)
        );
    }



    public function actualites(Request $request)
    {
        return view('actualites', array(
            'namePage'=>'actualites',
            'locale' => App::getLocale(),
            'isContact'=>false)
        );
    }


    public function contact(Request $request)
    {
        return view('contact', array(
            'namePage'=>'contact',
            'locale' => App::getLocale(),
            'isContact'=>true)
        );
    }


    public function lang($locale) {

        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();

    }


    


}
