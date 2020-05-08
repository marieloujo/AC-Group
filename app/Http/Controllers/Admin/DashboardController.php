<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Expertises;
use App\Models\Formations;
use App\Models\Realisations;
use App\Models\Technologies;
use App\Models\Temoignages;


class DashboardController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }




    public function accueil(Request $request)
    {

        return view('admin.accueil', array(
            'namePage'=>'dashboard',
            'expertises' => Expertises::all()->count(),
            'formations' => Formations::all()->count(),
            'realisations' => Realisations::all()->count(),
            'technologies' => Technologies::all()->count(),
            'temoignages' => Temoignages::all()->count())
        );
    }



}
