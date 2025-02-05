<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    function tampil(){
        $santri = Santri::get();
        // dd($santri);
        return view('santri.tampil', compact('santri'));
    }

    function tambah(){
        return view('santri.tambah');
    }

    function submit(Request $request){
        $santri = new Santri();
        $santri->nama = $request->nama;
        $santri->email = $request->email;
        $santri->usia = $request->usia;
        $santri->no_telp = $request->no_telp;
        $santri->negara = $request->negara;
        $santri->alamat = $request->alamat;
        $santri->nilai = $request->nilai;
        $santri->komentar = $request->komentar;
        $santri->save();

        return redirect()->route('santri.tampil');
    }

    function edit($id) {
        $santri = Santri::find($id);
        return view('santri.edit',compact('santri'));
    }

    function update(Request $request, $id){
        $santri = Santri::find($id);
        $santri->nama = $request->nama;
        $santri->email = $request->email;
        $santri->usia = $request->usia;
        $santri->no_telp = $request->no_telp;
        $santri->negara = $request->negara;
        $santri->alamat = $request->alamat;
        $santri->nilai = $request->nilai;
        $santri->komentar = $request->komentar;
        $santri->update();

        return redirect()->route('santri.tampil');
    }

    function delete($id){
        $santri = Santri::find($id);
        $santri->delete();
        return redirect()->route('santri.tampil');
    }
}