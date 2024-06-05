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
            return redirect('mahasiswa/index');
        }
    }

    function ubah(Request $req){
        $nim = $req->segment(3);
        $data_edit = DB::table('tb_mahasiswa')
        ->where('NIM',$nim)
        ->first();
        // dd($data_edit);
        return view('edit',['data_mhs'=>$data_edit]);
    }

    function edit_data(Request $req){
        $data_ubah = [
            'Nama'=> $req->nama,
            'Tempat_lahir'=>$req->tempat_lahir,
            'Tanggal_Lahir'=>$req->tanggal_lahir,
            'Prodi'=>$req->prodi,
            'Alamat'=>$req->alamat
        ];

        $edit = DB::table('tb_mahasiswa')
        ->where('NIM',$req->nim)
        ->update($data_ubah);

        if($edit){
            return redirect('mahasiswa/index');
        }

    }
}