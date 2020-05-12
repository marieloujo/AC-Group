<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\ContactForm;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use \App\Mail\SimpleMailBuilder;
use \App\Mail\MailBuilder;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{




    public function sendSimpleMail(Request $request) {

        $inputs = $request->input();


        $validator = Validator::make($inputs,  ContactForm::$simpleRules);

        if ($validator->fails()) {
            return Redirect::route('contact-error')->withErrors($validator)->withInput();
        }else {

            $fileName = null;

            if($request->file('file') != null) {

                $file = $request->file('file');
                $file->move(public_path().'/documents',$file->getClientOriginalName());

                $fileName =  public_path().'/documents/'.$file->getClientOriginalName();
            }
        
            $mailable = new SimpleMailBuilder(
                $request->input('name-simple'),
                $request->input('mail-simple'),
                $request->input('message-simple'),
                $fileName
            );
            Mail::to(env("CONTACT_EMAIL"))->send($mailable);

            return redirect()->route('contact');     

        }
    }



    public function sendMail(Request $request) {

        $inputs = $request->input();


        $validator = Validator::make($inputs,  ContactForm::$rules);

        if ($validator->fails()) {
            return Redirect::route('contact-error')->withErrors($validator)->withInput();
        }else {

            $fileName = null;


            if($request->file('file') != null) {

                $file = $request->file('file');
                $file->move(public_path().'/documents',$file->getClientOriginalName());

                $fileName =  public_path().'/documents/'.$file->getClientOriginalName();
            }
        
            $mailable = new MailBuilder(
                $request->input('name'),
                $request->input('mail'),
                $request->input('message'),
                $request->input('societe'),
                $fileName,
                $request->input('besoins')
            );
            Mail::to(env("CONTACT_EMAIL"))->send($mailable);

            return redirect()->route('contact');     

        }
    }
    

}
