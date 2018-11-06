<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style media="screen">
    .carousel-inner > .item > img {
      width:640px;
      height:360px;
    }
    .navbar a:hover{
      background-color: #009c41;
    }
    </style>
    <title>Home</title>
  </head>
  <body>
    <div>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
       <a class="navbar-brand" href="<?php echo site_url(''); ?>"><img src="<?php echo base_url('assets/image/logo-bpjs.png') ?>" style="height: 25px">  </a>
       <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #1dbc60;">
         <ul class="navbar-nav">
           <li class="nav-item active">
             <a class="nav-link" href="<?php echo site_url('admin_controller/view_home'); ?>">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo site_url('admin_controller/view_create'); ?>">Create</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo site_url('admin_controller/index'); ?>">Index</a>
           </li>
           <li class="nav-item" style="float: right;">
             <a class="nav-link" href="<?php echo site_url('login_controller/logout'); ?>">Logout</a>
           </li>
         </ul>
       </div>
     </nav>
   </div>

    <div class="container-fluid">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="<?php echo base_url('assets/image/c4.jpg')?>" alt="Los Angeles" style="width:100%;">
          </div>

          <div class="item">
            <img src="<?php echo base_url('assets/image/c5.jpg')?>" alt="Chicago" style="width:100%;">
          </div>

          <div class="item">
            <img src="<?php echo base_url('assets/image/c4.png')?>" alt="New york" style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <br> <br>
    <div class="container">
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Today News</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="http://medan.tribunnews.com/2018/11/04/bayi-dalam-kandungan-harus-didaftarkan-jadi-peserta-bpjs-kesehatan-jika-tidak-ini-akibatnya">Bayi dalam Kandungan Harus Didaftarkan Jadi Peserta BPJS Kesehatan, Jika Tidak Ini Akibatnya.</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">Staf Komunikasi KC BPJS Kesehatan Medan Redho Nofand mengatakan, saat ini bayi dalam kandungan ataupun yang baru lahir bisa langsung menjadi peserta BPJS Kesehatan.</p>
              <a href="http://medan.tribunnews.com/2018/11/04/bayi-dalam-kandungan-harus-didaftarkan-jadi-peserta-bpjs-kesehatan-jika-tidak-ini-akibatnya">Selengkapnya »</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="<?php echo base_url('assets/image/berita4.jpg')?>" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Today News</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="https://bpjs-kesehatan.go.id/bpjs/post/read/2018/958/JKN-KIS-Terima-Kasih-Telah-Hadir-Untuk-Indonesia">JKN-KIS, Terima Kasih Telah Hadir Untuk Indonesia</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">Tata (56) adalah seorang PNS di Kementerian Agama Karawang. Ia sudah menjadi peserta JKN-KIS karena sebelumnya ia adalah peserta Askes. Selama menjadi peserta JKN-KIS atau Askes ia selalu berupaya mencari informasi terkait dengan hak kewajiban maupun benefit yang diperolehnya.</p>
              <a href="https://bpjs-kesehatan.go.id/bpjs/post/read/2018/958/JKN-KIS-Terima-Kasih-Telah-Hadir-Untuk-Indonesia">Selengkapnya »</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="<?php echo base_url('assets/image/berita5.jpg')?>" data-holder-rendered="true" style="width: 200px; height: 250px;">
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Today News</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="https://bpjs-kesehatan.go.id/bpjs/post/read/2018/956/Cerita-Kader-JKN-Membantu-Masyarakat-Lewat-Hal-Sederhana">Cerita Kader JKN, Membantu Masyarakat Lewat Hal Sederhana</a>
              </h3>
              <div class="mb-1 text-muted">Yesterday</div>
              <p class="card-text mb-auto">Ulul Sufiana merupakan ibu rumah tangga yang tangguh dan penuh dedikasi. Di usianya yang menginjak 49 tahun ini, ia tetap semangat dan penuh energi dalam menjalani kehidupannya sebagai ibu rumah tangga sekaligus sebagai Kader JKN. Bermula dari satu tahun yang lalu, ia melamar sebagai Kader JKN di wilayah BPJS Kesehatan Cabang Madiun dan mulai menjalani tugasnya untuk mengabdi sebagai mitra BPJS Kesehatan di tengah-tengah masyarakat.</p>
              <a href="https://bpjs-kesehatan.go.id/bpjs/post/read/2018/956/Cerita-Kader-JKN-Membantu-Masyarakat-Lewat-Hal-Sederhana">Selengkapnya »</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="<?php echo base_url('assets/image/berita6.jpg')?>" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Today News</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="https://bpjs-kesehatan.go.id/bpjs/post/read/2018/957/Ga-Pakai-Repot-Kalau-Peserta-JKN-KIS-Download-Aplikasi-Mobile-JKN">Ga Pakai Repot Kalau Peserta JKN-KIS Download Aplikasi Mobile JKN</a>
              </h3>
              <div class="mb-1 text-muted">Yesterday</div>
              <p class="card-text mb-auto">Kini berbagai kemudahan ditawarkan oleh BPJS Kesehatan sebagai Badan Penyenggara Program Jaminan Kesehatan Nasional-Kartu Indonesia Sehat (JKN-KIS), salah satunya melalui inovasi pengembangan aplikasi Mobile JKN yang ditujukan untuk mempermudah pelayanan administratif peserta JKN-KIS di era digital.</p>
              <a href="https://bpjs-kesehatan.go.id/bpjs/post/read/2018/957/Ga-Pakai-Repot-Kalau-Peserta-JKN-KIS-Download-Aplikasi-Mobile-JKN">Selengkapnya »</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="<?php echo base_url('assets/image/berita7.jpg')?>" data-holder-rendered="true" style="width: 200px; height: 250px;">
          </div>
        </div>
      </div>
    </div>
    <div class="navbar bg-dark">
      <p align="center" style="padding: 50px; color:white;">Copyright © 2018 BPJS Kesehatan. All rights reserved.</p>
    </div>
  </body>
</html>
