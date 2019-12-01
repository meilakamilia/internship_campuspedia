<!-- Halaman Data Siswa untuk menampilkan semua data siswa. Terdapat fitur edit dan hapus -->
@extends('inc.header')

@section('title', 'Data Siswa')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center" id="headerPage">
            <h1>Data Siswa</h1>
        </div>
        
        @include('message')
        <div class="accordion" id="accordionSiswa">
            @foreach($siswa as $s)
                <div class="card">
                    <div class="card-header" id="headingSiswa{{ $s -> no}}">
                        <h2 class="mb-0">
                            <button class="btn btn-link" id="buttonNama" type="button" data-toggle="collapse" data-target="#collapseSiswa{{ $s -> no}}" aria-expanded="false" aria-controls="collapseSiswa{{ $s -> no}}">
                                {{$s -> nama}}
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSiswa{{ $s -> no}}" class="collapse" aria-labelledby="headingSiswa{{ $s -> no}}" data-parent="#accordionSiswa">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>ID</td>
                                    <td>: {{$s->no}}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>: {{$s->nama}}</td>
                                </tr>
                                <tr>
                                    <td>No.Telepon</td>
                                    <td>: {{$s->telepon}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: {{$s->email}}</td>
                                </tr>
                            </table>
                            
                            <!-- <p>ID: {{ $s -> no}}</p>
                            <p>Nama: {{ $s -> nama}}</p>
                            <p>No. Telepon: {{ $s -> telepon}}</p>
                            <p>Email      : {{ $s -> email}}</p> -->
                            <hr>
                            <a class="btn btn-primary " href="edit_siswa{{ $s->no }}">Edit</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalHapus{{ $s->no}}">
                                Hapus
                            </button>
                            
                            <div class="modal fade" tabindex="-1" role="dialog" id="modalHapus{{ $s->no }}" aria-hidden="true" aria-labelled="labelModalHapus">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="labelModalHapus">Hapus Siswa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apa anda yakin akan menghapus data siswa ini?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="hapus/siswa_{{$s->no}}" class="btn btn-danger">Iya</a>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            @endforeach
            
        </div>
        <div class="row justify-content-md-center" id="pagination">
            {{ $siswa->links()}}
        </div>
        
    </div>
    
@endsection