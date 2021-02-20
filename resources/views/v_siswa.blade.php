@extends('layout.v_template')

@section('title', 'Siswa')

@section('content')
<a href="" class="btn btn-sm btn-primary">Add</a>
<a href="/siswa/print" target="_blank" class="btn btn-success btn-sm">Print to Printer</a>
<a href="/siswa/printpdf" target="_blank" class="btn btn-danger btn-sm">Print to PDF</a>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Mata</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
        ?>
        @foreach ($siswa as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->nis}}</td>
            <td>{{$data->nama_siswa}}</td>
            <td>{{$data->kelas}}</td>
            <td>{{$data->mapel}}</td>
            <td>
                <a href="" class="btn btn-sm btn-warning">Edit</a>
                <a href="/siswa/detail/{{$data->id_siswa}}" class="btn btn-sm btn-success">Detail</a>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                    Delete
                  </button>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
