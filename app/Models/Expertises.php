<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expertises extends Model
{
    
    protected $table="expertises";

    protected $fillable=['titre', 'description', 'image'];


    public static $rules = [
        'titre'=> 'required',
        'description' => 'required',
        'fichier_image' => 'required|max:10000|mimes:jpeg,png,svg'
    ];





}
