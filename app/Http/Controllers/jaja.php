<?php

namespace App\Http\Controllers;
use App\siswa;

use Illuminate\Http\Request;

class jaja extends Controller
{
    public function tabel()
    {
    	$g = siswa::all();
    	return view ('layouts.tabel',compact('g'));
    }
    public function store(Request $request)
    {
    	$file			=$request->file('gambar');
    	$filename		=$file->getClientOriginalName();
    	$request->file ('gambar')->move("image/",$filename);

    	$tambah->gambar = $filename;
    	$tambah->save();

    	return redirect()->to('/');
    }
}
