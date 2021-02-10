<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'nama_sekolah' => 'SMA Negri 1',
            'alamat'       => 'JL'
        ];
        return view('v_home',$data);
    }

    public function about($id){
        return 'ini Halaman About'. $id;
    }
}
