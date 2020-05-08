<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temoignages extends Model
{
   
    protected $table="temoignages";

    protected $fillable=['name', 'description', 'photo'];

}
