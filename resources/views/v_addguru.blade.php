@extends('layout.v_template')

@section('title', 'Add Guru')

@section('content')
    <form action="/guru/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="">NIP</label>
                        <input type="text" name="nip" class="form-control" value="{{old('nip')}}">
                        <div class="text-danger">
                            @error('nip')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Nama guru</label>
                        <input type="text" name="nama_guru" class="form-control " value="{{old('nama_guru')}}">
                        <div class="text-danger">
                            @error('nama_guru')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Mata Pelajaran</label>
                        <input type="text" name="mapel" class="form-control" value="{{old('mapel')}}">
                        <div class="text-danger">
                            @error('mapel')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Foto Guru</label>
                        <input type="file" name="foto_guru" class="form-control">
                        <div class="text-danger">
                            @error('foto_guru')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>

                </div>
            </div>
        </div>

    </form>
@endsection
