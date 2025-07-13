<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "Hello World";
    }

    public function pretest(){
        echo 'Praktikum Web Programing';
    }
}

