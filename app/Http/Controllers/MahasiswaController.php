<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class MahasiswaController extends Controller
{
    function index (){
        $data = DB::table('tb_mahasiswa')->get();
        return view('index',['data'=>$data]);
    }

    function tambah(){
        return view('tambah');
    }

    function tambah_data(Request $req){
        $insert = DB::table('tb_mahasiswa')->insert(
            [
            'NIM' => $req->nim,
            'Nama' => $req->nama,
            'Tempat_lahir' => $req->tempat_lahir,
            'Tanggal_lahir' => $req->tanggal_lahir,
            'Prodi' => $req->prodi,
            'Alamat' => $req->alamat
            ]
        );
        if($insert){
            return redirect('mahasiswa');
        }
    }

    function ubah(){
        return "ubah";
    }
}