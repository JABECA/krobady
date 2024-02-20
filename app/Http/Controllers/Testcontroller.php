<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    //
    public function index($number) {

        return view('test', [ 'numero' => $number]  );


    }
}
