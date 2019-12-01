<!-- Halaman Edit siswa untuk mengedit data siswa -->
@extends('inc/header')

@section('title', 'Edit Siswa')

@section('content')

    <div class="container">
        <div class="row justify-content-md-center" id="headerPage">
            <h1>Edit Siswa</h1>
        </div>

        <div class="row justify-content-md-center" >
            @foreach($siswa as $s)
            <form action="update_siswa{{ $s->no }}" id="formEdit" method="post" onsubmit="return(validate());">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="inputNama">Nama Lengkap</label>
                    <input type="text" name="nama" id="inputNama" value="{{ $s->nama }}">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" name="email" id="inputEmail" value="{{ $s->email }}">
                </div>
                <div class="form-group">
                    <label for="inputTelepon">Nomor Telepon</label>
                    <input type="text" name="telepon" id="inputTelepon" value="{{ $s->telepon}}">
                </div>
                <button type="submit" class="btn btn-primary" value="simpan">Update</button>
            </form>
            @endforeach    
        </div>
        
    </div>

@endsection