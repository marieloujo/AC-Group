<?php

namespace App;


class ContactForm 
{

    public static $rules = [
        'name'=>'required|string|max:500|',
        'mail'=>'required|string|email|max:500|',
        'message'=>'required',
    ];


    public static $simpleRules = [
        'name-simple'=>'required|string|max:500|',
        'mail-simple'=>'required|string|email|max:500|',
        'message-simple'=>'required',
    ];

}
