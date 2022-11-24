<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo "Controller coba method func index";
    }

    public function nggaktahu()
    {
        //return view('welcome_message');
        echo "ANONYMOUS BROOOO";
    }
    public function siapaya($nama='')
    {
        //return view('welcome_message');
        echo "halo $nama";
    }
    public function infonya($nama='',$hp=0)
    {
        //return view('welcome_message');
        echo "halo $nama $hp";
    }

    public function carisiapa()
    {
        //return view('welcome_message');
        echo "Ada yang bisa dibantu ?";
    }
}
