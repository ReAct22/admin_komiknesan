<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;
use Dompdf\Dompdf;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
        $this->middleware('auth');
    }
    public function index(){
        $data = [
            'siswa' => $this->SiswaModel->allData(),
        ];
        return view('v_siswa', $data);
    }

    public function detail($id_siswa){
        if(!$this->SiswaModel->detailData($id_siswa)){
            abort(404);
        }

        $data = [
            'siswa' => $this->SiswaModel->detailData($id_siswa),
        ];

        return view('v_detalsiswa', $data);
    }

    public function print(){
        $data = [
            'siswa' => $this->SiswaModel->allData(),
        ];
        return view('v_print', $data);
    }
    public function printpdf(){
        $data = [
            'siswa' => $this->SiswaModel->allData(),
        ];
        $html =  view('v_printpdf', $data);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $options = $dompdf->getOptions();
        $options->setIsHtml5ParserEnabled(true);
        $dompdf->setOptions($options);
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
