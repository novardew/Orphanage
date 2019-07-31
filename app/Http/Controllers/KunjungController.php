<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KunjungController extends Controller
{
    public function index()
        {
        	$data_kunjung = \App\Kunjung::all();
        	return view ('kunjung.index',['data_kunjung'=>$data_kunjung]);
        }
    public function create(Request $request)
        {
            dd($request);
        	\App\Kunjung::create($request->all());
        	return redirect('/kunjung')->with('sukses','Data berhasil disimpan');
        }	

    public function edit($id)
        {
        	$kunjung = \App\Kunjung::find($id);
        	return view('kunjung/edit',['kunjung'=>$kunjung]);
        }

    public function update(Request $request,$id)
        {
        	$kunjung = \App\Kunjung::find($id);
        	$kunjung -> update($request->all());
        	return redirect('/kunjung')->with('sukses', 'Data berhasil di-update');
        }

    	public function delete($id)
        {
        	$kunjung = \App\Kunjung::find($id);
        	$kunjung -> delete($kunjung);
        	return redirect('/kunjung')->with('sukses', 'Data berhasil dihapus');
        }
}
