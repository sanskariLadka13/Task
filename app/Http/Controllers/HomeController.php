<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $details = Detail::all();

        return view('home',[
            'details' => $details
        ]);
    }
}
