<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantiController extends Controller
{
         public function index()
        {
        	$data_panti = \App\Panti::all();
        	return view ('panti.index',['data_panti'=>$data_panti]);
        }
        public function create(Request $request)
        {
        	\App\Panti::create($request->all());
        	return redirect('/dashboard')->with('sukses','Data berhasil disimpan');
        }	

        public function edit($id)
        {
        	$panti = \App\Panti::find($id);
        	return view('panti/edit',['panti'=>$panti]);
        }

        public function update(Request $request,$id)
        {
        	$panti = \App\Panti::find($id);
        	$panti -> update($request->all());
        	return redirect('/panti')->with('sukses', 'Data berhasil di-update');
        }

        public function delete($id)
        {
        	$panti = \App\Panti::find($id);
        	$panti -> delete($panti);
        	return redirect('/panti')->with('sukses', 'Data berhasil dihapus');
        }		

        public function profile($id)
        {
        	$panti = \App\Panti::find($id);
        	return view('panti.profile',['panti'=>$panti]);
        }
}
