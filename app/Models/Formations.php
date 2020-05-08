<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{
    
    protected $table="formations";

    protected $fillable=['titre', 'description', 'image', 'date'];

}
