<!-- Halaman Tambah Siswa untuk menambah data siswa -->
@extends('inc/header')

@section('title','Tambah Siswa')

@section('content')

    <div class="container">
        <div class="row justify-content-md-center" id="headerPage">
                <h1>Tambah Siswa</h1>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto" id="formInput">
                <form action="siswa/tambah" name="formSiswa" method="post" onsubmit="return(validate());">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="inputNama">Nama Lengkap: </label>
                        <input type="text" name="nama" id="inputNama">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email: </label>
                        <input type="email" name="email" id="inputEmail">
                    </div>
                    <div class="form-group">
                        <label for="inputTelepon">Nomor Telepon: </label>
                        <input type="text" name="telepon" id="inputTelepon">
                    </div>
                    <button type="submit" class="btn btn-primary" value="simpan">Submit</button>
                </form>
            </div>
            </div>
            
        
    </div>

@endsection

