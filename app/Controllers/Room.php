<?php

namespace App\Controllers;
use \App\Models\HunianModel;

class Room extends BaseController
{
protected $HunianModel;
    public function __construct()
    {

                
        //apabila belum use diatas file maka secara manual bisa mpanggil model dengan cara ini
        // $HunianModel = new \App\Models\HunianModel();

//atau bisa juga langsung dipanggil di base controller maka nanti 
//bisa diopanggil oleh semua controller models yang ada terserah sesuai kebutuhan 
//$this -> HunianModel = new \App\Models\HunianModel();

        $this -> HunianModel = new HunianModel();
        
    }
    public function index()
    {
        $data = [
            'title' => 'Room | kostsoda.site',
            'isactive' => 'room'
        ];
        return view('home',$data);
    }

    public function room()
    {
        $hunian =  $this->HunianModel->findAll();

        $data = [
            'title' => 'Room | kostsoda.site',
            'isactive' => 'room',
            'room' => $hunian
        ];

        //Konek ke db Tanpa model
        // $db = \Config\Database::connect();
        // $hunian = $db -> query('SELECT * FROM hunian');
        // foreach($hunian->getResultArray()as $row)
        // {
        //     d($row);
        // }



        return view('room',$data);
    }

 
}
