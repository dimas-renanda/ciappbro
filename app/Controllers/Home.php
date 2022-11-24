<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | kostsoda.site',
            'isactive' => 'home'
        ];
        return view('home',$data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | kostsoda.site',
            'isactive' => 'about'
        ];
        return view('about',$data);
    }


}
