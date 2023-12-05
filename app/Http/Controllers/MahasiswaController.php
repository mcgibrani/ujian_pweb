<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){

        $data = mahasiswa::all();
        return view('datamahasiswa', compact('data'));
    }

    public function tambahmahasiswa(){
        return view('tambahdata');
    }

    public function insertdata(request $request){
        //dd($request->all());
        mahasiswa::create($request->all());
        return redirect()->route('mahasiswa');
        
    }

    public function tampilkandata($id){
        $data = mahasiswa::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(request $request, $id){
        $data = mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success','Data berhasil diupdate');
    }

    public function delete($id){
        $data = mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success','Data berhasil dihapus');
    }
}
