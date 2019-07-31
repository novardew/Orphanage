<!-- Modal -->
<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
				      <div class="modal-body">
				      	<form action="/kunjung/create" method="POST">
				      		{{csrf_field()}}
				      	  <div class="form-group">
						    <label for="exampleInputEmail1">ID</label>
						    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID kunjung">
						  </div>
				      	  <div class="form-group">
						    <label for="exampleInputEmail1">ID Panti</label>
						    <input name="panti_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Panti ID">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">NIK User</label>
						    <input name="nik_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK User">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kunjungan/Undangan">
						  </div>
						  <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal</label>
                            <input name="tgl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Kunjungan/Undangan">
                          </div>
						  <div class="form-group">
                            <label for="exampleInputEmail1">Waktu</label>
                            <input name="waktu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Waktu Kunjungan/Undangan">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Durasi</label>
                            <input name="durasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Durasi Agenda">

						  <div class="form-group">
						    <label for="exampleInputEmail1">Tempat</label>
						    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Agenda">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Detail</label>
						    <input name="detail" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Detail Agenda">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Berkas</label>
						    <input name="berkas" type="file" class="form-control-file" id="exampleFormControlFile1">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Pengurus</label>
						    <input name="jumlah_pengurus" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Pengurus">
						  </div>

						  
						    

						
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				        </form>
				      </div>
				    </div>
				  </div>