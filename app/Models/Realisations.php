<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Realisations extends Model
{
    
    protected $table="realisations";

    protected $fillable=['libelle', 'description', 'image', 'date', 'adresse'];

}
