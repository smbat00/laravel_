<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMeController extends Controller
{
    public function openContactMePage(){

        $b = 6;
        $c =7;
        $k = $b+$c;
        return view('contact_me',['k'=>$k]);
    }
}
