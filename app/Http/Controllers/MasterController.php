<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function Home(){

        return view('master');


    }
    public function Services(){

        return view('Services');



    }
    public function Contact(){

        return view('Contact');

    }
    public function Join(){

        return view('Join');

    }
}
