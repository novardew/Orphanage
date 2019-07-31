@extends('layouts.master')

@section('content')

		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1>Daftar Admin Panti</h1>
			</div>
			
			
			<table class="table table-hover">
				<tr>
					<th>NIK</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jabatan</th>
					<th>No HP</th>
					<th>Photo</th>
				</tr>
				@foreach($data_AdminPanti as $Adpanti)
				<tr>
					<td>{{$Adpanti->nik}}</a></td>
					<td>{{$Adpanti->nama}}</td>
					<td>{{$Adpanti->tempat_lahir}}</td>
					<td>{{$Adpanti->tgl_lahir}}</td>
					<td>{{$Adpanti->jabatan}}</td>
					<td>{{$Adpanti->jkel}}</td>
					<td>{{$Adpanti->alamat}}</td>
					<td>{{$Adpanti->no_hp}}</td>
					<td>{{$Adpanti->photo}}</td>
					<td>
						<a href="/adminpanti/{{$Adpanti->nik}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit" style="font-size:24px"></i></a>
						<a href="/adminpanti/{{$Adpanti->nik}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Dihapus?') "><i class="fa fa-trash-o" style="font-size:24px"></i></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>


				

@endsection