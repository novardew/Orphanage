@extends('layouts.master')

@section('content')

		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1>Panti Asuhan</h1>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
				  Tambah Panti
				</button>

				
			</div>
			
			<table class="table table-hover">
				<tr>
					<th>Nama</th>
					<th>Pengurus</th>
					<th>Butuh Fasilitas</th>
					<th>Jumlah Anak</th>
					<th>Jumlah Pengurus</th>
					<th>Nama Pimpinan</th>
					<th>Kontak</th>
					<th>Email</th>
					<th>Sosial Media</th>
					<th>Status</th>
					
					<th> </th>
				</tr>
				@foreach($data_panti as $panti)
				<tr>
					<td><a href="/panti/{{$panti->id}}/profile">{{$panti->nama}}</a></td>
					<td>{{$panti->nik_pengurus}}</td>
					<td>{{$panti->butuh_fasilitas}}</td>
					<td>{{$panti->jumlah_anak}}</td>
					<td>{{$panti->jumlah_pengurus}}</td>
					<td>{{$panti->nama_pimpinan}}</td>
					<td>{{$panti->kontak}}</td>
					<td>{{$panti->email}}</td>
					<td>{{$panti->sosmed}}</td>
					<td>{{$panti->status_id}}</td>
					<td>
						<a href="/panti/{{$panti->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit" style="font-size:24px"></i></a>
						<a href="/panti/{{$panti->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Dihapus?') "><i class="fa fa-trash-o" style="font-size:24px"></i></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>

<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Panti</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<form action="/panti/create" method="POST">
				      		{{csrf_field()}}
				      	  
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Panti</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Panti">
						  </div>
						  <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat Panti">
                          </div>
						  <div class="form-group">
                            <label for="exampleInputEmail1">Latitude Lokasi</label>
                            <input name="lat_" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Latitude">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Longitude Lokasi</label>
                            <input name="long_" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Longitude">

						  <div class="form-group">
						    <label for="exampleInputEmail1">Fasilitas</label>
						    <input name="butuh_fasilitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fasilitas yang Dibutuhkan">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Anak</label>
						    <input name="jumlah_anak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Anak">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Jenis Panti</label>
						    <input name="jenispanti_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Jenis Panti ">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Pengurus</label>
						    <input name="jumlah_pengurus" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Pengurus">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Pimpinan</label>
						    <input name="nama_pimpinan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pimpinan">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Kontak</label>
						    <input name="kontak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kontak Panti">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Panti">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Sosial Media</label>
						    <input name="sosmed" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sosial Media Panti">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Status Panti</label>
						    <input name="status_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Status Panti">
						  </div>


						  <div class="form-group">
						    <label for="exampleFormControlFile1">Photo Panti</label>
						    <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
						  </div>
						    

						
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				        </form>
				      </div>
				    </div>
				  </div>
				  
				

@endsection