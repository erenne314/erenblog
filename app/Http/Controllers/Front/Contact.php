<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use vendor\laravel\framework\src\Illuminate\Http\Request;


class Contact extends Controller
{
    public function index(){

        return view('front.contact');

    }
}
