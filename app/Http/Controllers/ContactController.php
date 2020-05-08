<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\ContactForm;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use \App\Mail\MailBuilder;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{




    public function sendMail(Request $request) {

        $inputs = $request->input();

        //dump($inputs).die();

        $validator = Validator::make($inputs,  ContactForm::$rules);

        if ($validator->fails()) {
            return Redirect::route('contact')->withErrors($validator)->withInput();
        }else {
        
            $mailable = new MailBuilder(
                $request->input('name'),
                $request->input('email'),
                $request->input('telephone'),
                $request->input('object'),
                $request->input('message')
            );
            Mail::to(env("CONTACT_EMAIL"))->send($mailable);

            return redirect()->route('contact');     
        }
    }
    

}
