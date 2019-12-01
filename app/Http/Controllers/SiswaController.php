<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(){
        $dataSiswa = DB::table('tabel_siswa')->paginate(10);
        return view('data_siswa', ['siswa' => $dataSiswa]);
    }

    public function tambah(Request $request){
        DB::table('tabel_siswa')->insert([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'email' => $request->email
        ]);
        return redirect('data')->with('success', 'Penambahan data berhasil dilakukan');
    }

    public function edit($no){
        $siswa = DB::table('tabel_siswa')->where('no', $no)->get();
        return view('edit_siswa', ['siswa' => $siswa]);
    }

    public function update(Request $request){
        DB::table('tabel_siswa')->where('no', $request->no)->update([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'email' => $request->email
        ]);
        return redirect('data')->with('success', 'Pengubahan data berhasil dilakukan');
    }

    public function hapus($no){
        DB::table('tabel_siswa')->where('no', $no)->delete();
        return redirect('data')->with('success', 'Penghapusan data berhasil dilakukan');
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $siswa = DB::table('tabel_siswa')->where('nama', 'like', "%".$cari."%")->paginate();

        return view('data_siswa', ['siswa'=>$siswa]);
    }
}
