<?php

namespace App\Http\Controllers;
use App\Models\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->GuruModel = new GuruModel();
    }

    public function index(){
        $data = [
            'guru' => $this->GuruModel->allData(),
        ];
        return view('v_guru', $data);
    }
}
