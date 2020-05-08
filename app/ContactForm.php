<?php

namespace App;


class ContactForm 
{

    public static $rules = [
        'name'=>'required|string|max:500|',
        'email'=>'required|string|email|max:500|',
        'telephone' => 'required|regex:/(01)[0-9]{9}/',
        'object'=>'string|max:500|',
        'message'=>'required',
    ];

}
