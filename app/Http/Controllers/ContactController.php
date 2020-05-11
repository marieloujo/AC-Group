<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\ContactForm;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use \App\Mail\SimpleMailBuilder;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{




    public function sendSimpleMail(Request $request) {

        $inputs = $request->input();

        // dump($request->file('file')).die();

        /*$validator = Validator::make($inputs,  ContactForm::$rules);

        if ($validator->fails()) {
            return Redirect::route('contact')->withErrors($validator)->withInput();
        }else {*/

            if($request->file('file') != null) {

                $file = $request->file('file');
                $file->move(public_path().'/documents',$file->getClientOriginalName());

                $fileName =  public_path().'/documents/'.$file->getClientOriginalName();
            }
        
            $mailable = new SimpleMailBuilder(
                $request->input('name'),
                $request->input('email'),
                $request->input('message'),
                null
            );
            Mail::to(env("CONTACT_EMAIL"))->send($mailable);

            return redirect()->route('contact');     

        //}
    }
    

}
