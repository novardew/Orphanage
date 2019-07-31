
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Orph | Let's Connect with Orphan</title>

  <!-- Bootstrap core CSS -->
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="asset/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
            integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
            crossorigin=""/>
  <script src="https://code.iconify.design/1/1.0.2/iconify.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
            integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
            crossorigin=""></script>

  <!-- Custom styles for this template -->
  <link href="asset/css/landing-page.css" rel="stylesheet">


        
        <style>
            #mapid
            {
            width: 1470px;
            height: 385px;
            }
        </style>
    </head>
    
    <body>
    <!-- Navigation -->

      <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            
          <a class="navbar-brand" href="/"><img style="width:340;height:70px;" src="asset/img/LogoOrph.png"></a>
          <form class="navbar-form navbar-left">
            <div class="input-group">
              <input type="text" value="" class="form-control" placeholder="Cari Panti...">
              <span class="input-group-btn"><button type="button" class="btn btn-primary" >Go</button></span>
            </div>
          </form>
          <a class="button1" href="" style="color: #42CCB7"  data-toggle="modal" data-target="#exampleModal"><b>Tambah Panti</b></a>    
           <a class="button1" href="#" style="color: #42CCB7" data-toggle="modal" data-target="#exampleModalLong2"><b>Kunjung & Undang </b> </a>
           <a class="button1" href="#" style="color: #42CCB7"><b>Relawan </b></a>
           <a class="button1" href="karya" style="color: #42CCB7"><b>Karya </b></a>
           <a class="button1" href="#" style="color: #42CCB7"><b>Tentang Kami </b></a>
          <a class="button1" href="login" style="color: #42CCB7"><b>Masuk</b></a>
            
        </div>
      </nav>
@if(session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
    @endif
        <div id="mapid"></div>
        
        <script>
            
            var mymap = L.map('mapid').setView([-0.947083,100.417183], 13);
            
            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', 
            {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox.streets',
                accessToken: 'sk.eyJ1Ijoibm92MTEiLCJhIjoiY2p5ZTRvcG5jMDIwYzNpb2p5ZXNuMmF3aCJ9.K3hgLb66VT4vhVnF0eF6DA'
            }).addTo(mymap);
            
            // var markersLayer = new L.LayerGroup();	//layer contain searched elements
            // mymap.addLayer(markersLayer);

            // var controlSearch = new L.Control.Search
            // ({
            //     layer: markersLayer, initial: false, position:'top'
            // });
            // mymap.addControl(controlSearch);
            
//            var searchControl = L.esri.Geocoding.geosearch().addTo(mmymap);
//            
//            var results = L.LayerGroup.addTo(mymap);
            
            var LeafIcon = L.Icon.extend({
                options: {
                    iconSize:     [30,50],
                    iconAnchor:   [22, 94],
                    popupAnchor:  [-3, -76]
                }
            });
            
            var blueIcon = new LeafIcon({iconUrl: 'image/marker.png'}),
                pinkIcon = new LeafIcon({iconUrl: 'image/marker2.png'})
            
//            L.marker([-0.947083,100.417183], {icon: blueIcon}).addTo(mymap).bindPopup("I am a green leaf.");
//            //L.marker([-0.947083,100.417183], {icon: pinkIcon}).addTo(mymap).bindPopup("I am a red leaf.");
            <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "orphanage";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT * from panti";
                $result = $conn->query($sql);

//                $data = array();
//                echo " var latlong = [ " ;
//
//                for ($x = 0; $x < $result->num_rows; $x++) 
//                {
//                    $data[] = $result->fetch_assoc();
//                    echo " [ " , $data[$x]['long_'], " , " , $data[$x]['lat_'], " ] " ;
//
//                    if ($x <= ($result->num_rows - 2)) 
//                    {
//                    echo " , " ;
//                    }
//                }
//                echo " ]; " ;
            
                $data = '';
                
                while($row = $result->fetch_assoc())
                {
                    $data .= 'L.marker(['.$row['lat_'].', '.$row['long_'].'],{icon: blueIcon}).addTo(mymap)
                   .bindPopup("<b>Panti Asuhan</b></br><b>'.$row['nama'].'</b></br>'.$row['alamat'].'</b><br><a href=/panti/4/profile type=submit class=buttondetail>Lihat Detail</a><br/>");';
                }
            
                echo $data;

            ?>

            //$data .= 'L.marker(['.$row['lat_'].', '.$row['long_'].'],{icon: blueIcon}).addTo(mymap)
             //       .bindPopup("<b>Panti Asuhan</b></br><b>'.$row['nama'].'</b></br>'.$row['alamat'].'</b><br><a href=addpanti type=submit class=buttondetail>Lihat Detail</a><br/>");';

            //var popup = L.popup();
            
            
//            for ( var i = 0; i < latlong.length; i ++) 
//            {
//                marker = new L.marker([latlong[i][1],latlong[i][1]]).addTo(mymap);
//                //marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();
//            }
            
//            var popup = L.popup()
//                .setLatLng([-0.947083,100.417183])
//                .setContent("I am a standalone popup.")
//                .openOn(mymap);
//            
//            var geojsonFeature = {
//                "type": "Feature",
//                "properties": {
//                    "name": "Coors Field",
//                    "amenity": "Baseball Stadium",
//                    "popupContent": "This is where the Rockies play!"
//                },
//                "geometry": {
//                    "type": "Point",
//                    "coordinates": [-0.947083,100.417183]
//                }
//            };
//            
//            L.geoJSON(geojsonFeature).addTo(mymap);
            
            
            
        </script>
<!-- Image Showcases -->
    
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('asset/img/AddPA.png');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Tambah Panti</h2>
            <p class="lead mb-0">Mari tambahkan lokasi panti yang belum terdaftar disini! Buat semua orang mengetahuinya agar donasi menghampiri panti</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('asset/img/Invite.png');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Kunjung & Undang</h2>
            <p class="lead mb-0">Kami membantu proses administrasi mengundang/mengunjungi anak-anak panti asuhan agar dapat diselesaikan secara mudah dan bisa tak perlu datang ke panti asuhan</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('asset/img/Volunteer.png');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Relawan</h2>
            <p class="lead mb-0">Demi meningkatkan kualitas SDM anak panti jadilah relawan mengajar keterampilan. Masukkan berkas pengajuan relawanmu disini!</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('asset/img/Art.png');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Karya Anak Panti Asuhan</h2>
            <p class="lead mb-0">Menampilkan berbagai karya yang dihasilkan anak panti asuhan</p>
          </div>
        </div>
      

    </section>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="asset/img/anyam.png" alt="Denim Jeans" style="width:100%">
      <h1>Anyaman</h1>
      <p class="price">Annisa</p>
      <p>Keranjang Anyaman dari rotan untuk sajian Buah atau dekorasi rumah
    </p>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="asset/img/sulam.jpg" alt="Denim Jeans" style="width:100%">
      <h1>Bantal Sulam</h1>
      <p class="price">Yayang</p>
      <p>Bantal Sofa Sulam Bunga. Sulam bunga yang diaplikasikan pada sarung bantal dengan beragam bentuk, kain, dan tema yang inspiratif. Meski sulam pita akan tetap chic dan elegan jika diaplikasikan pada benda apa saja.
    </p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="asset/img/rajut.jpg" alt="Denim Jeans" style="width:100%">
      <h1>Handsock Rajut</h1>
      <p class="price">Putri Laili</p>
      <p> Handsock Rajut Jempol Manset Tangan Premium. Sepasang Kanan Dan Kiri
    </p>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="asset/img/gantung.jpg" alt="Denim Jeans" style="width:100%">
      <h1>Gantungan Kunci</h1>
      <p class="price">Dimas</p>
      <p> Gantungan Kunci dalam berbagai bentuk, tokoh animasi, tanaman dan lainnya
    </p>
    </div>
  </div>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <a href="#" style="color: #42CCB7 " > <font size="6"><b>#LetsConnectwithOrphan</b></font></a>     
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">

            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#" style="color: #42CCB7">Tentang Kami</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#" style="color: #42CCB7">Kontak</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#" style="color: #42CCB7">Lokasi</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#" style="color: #42CCB7">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0" style="color: #42CCB7">&copy; Orph-2019. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#" style="color: #42CCB7">
                  <i class="fab fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#" style="color: #42CCB7">
                  <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" style="color: #42CCB7">
                  <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
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

<!-- Modal -->
<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLong2">Permohonan Kunjungan / Undangan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('kunjung.create')}}" method="POST">
                            {{csrf_field()}}
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Panti</label>
                            <input name="panti_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Panti">
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Agenda</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kunjungan/Undangan">
                          </div>
                          <div class="form-group date" id="datetimepicker1">
                            <label for="exampleInputEmail1">Tanggal</label>
                            <input name="tgl" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Kunjungan/Undangan">
                                
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Waktu</label>
                            <input name="waktu" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Waktu Kunjungan/Undangan">
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
                            <label for="exampleInputEmail1">Berkas (Scan Surat)</label>
                            <input name="berkas" type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
        
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLong2">Permohonan Relawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('kunjung.create')}}" method="POST">
                            {{csrf_field()}}
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Panti</label>
                            <input name="panti_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Panti ID">
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pelatihan</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pelatihan">
                          </div>
                          <div class="form-group date" id="datetimepicker1">
                            <label for="exampleInputEmail1">Tanggal</label>
                            <input name="tgl" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Kunjungan/Undangan">
                                
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Waktu</label>
                            <input name="waktu" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Waktu Kunjungan/Undangan">
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
        
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
            </div>
          </div>
    </body>
</html>

