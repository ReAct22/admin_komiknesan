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

    public function detail($id_guru){
        if (!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru),
        ];
        return view('v_detailguru', $data);
    }

    public function add(){
        return view('v_addguru');
    }

    public function insert(){
        Request()->validate([
            'nip' => 'required|unique:tbl_guru,nip|min:4|max:5',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'foto_guru' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nip.required' => 'NIP wajib diisi !!',
            'nip.unique' => 'NIP ini Sudah Ada',
            'nip.min' => 'Min 4 Karakter',
            'nip.max' => 'Max 5 Karakter',
            'nama_guru.required' => 'Nama Guru wajib diisi !!',
            'mapel.required' => 'Mapel wajib diisi !!',

        ]);

        // jika validasi tidak ada makan akan lakukan simpan data
        //upload gambar/foto
        $file = Request()->foto_guru;
        $fileName = Request()->nip.'.'. $file->extension();
        $file->move(public_path('foto_guru'), $fileName);

        $data = [
            'nip' => Request()->nip,
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
            'foto_guru' => $fileName
        ];

        $this->GuruModel->addData($data);
        return redirect()->route('guru')->with('pesan','Data Berhsail ditambahkan');
    }

    public function edit($id_guru){
        if (!$this->GuruModel->detailData($id_guru)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detailData($id_guru),
        ];
        return view('v_editguru', $data);
    }

    public function update($id_guru){
        Request()->validate([
            'nip' => 'required|min:4|max:5',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'foto_guru' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nip.required' => 'NIP wajib diisi !!',
            'nip.min' => 'Min 4 Karakter',
            'nip.max' => 'Max 5 Karakter',
            'nama_guru.required' => 'Nama Guru wajib diisi !!',
            'mapel.required' => 'Mapel wajib diisi !!',


        ]);

        // jika validasi tidak ada makan akan lakukan simpan data
        // jika ingin ganti foto
        if (Request()->foto_guru <> "") {
            $file = Request()->foto_guru;
            $fileName = Request()->nip.'.'. $file->extension();
            $file->move(public_path('foto_guru'), $fileName);
            $data = [
                'nip' => Request()->nip,
                'nama_guru' => Request()->nama_guru,
                'mapel' => Request()->mapel,
                'foto_guru' => $fileName
            ];
        }else{
            // Jika tidak ingin ganti foto
            $data = [
                'nip' => Request()->nip,
                'nama_guru' => Request()->nama_guru,
                'mapel' => Request()->mapel,
            ];
        }

        $this->GuruModel->editData($id_guru, $data);
        return redirect()->route('guru')->with('pesan','Data Berhsail di Update');
    }

    public function delete($id_guru){
        // hapus atau foto
        $guru =  $this->GuruModel->detailData($id_guru);
        if ($guru->foto_guru<> "") {
            unlink(public_path('foto_guru'). '/'. $guru->foto_guru);
        }
        $this->GuruModel->deleteData($id_guru);
        return redirect()->route('guru')->with('pesan','Data Berhsail di Hapus');
    }
}
