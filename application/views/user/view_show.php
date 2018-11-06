<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style media="screen">
    .carousel-inner > .item > img {
      width:640px;
      height:360px;
    }
    .navbar a:hover{
      background-color: #009c41;
    }
    </style>
    <title>Profile</title>
  </head>
  <body>
    <div>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
       <a class="navbar-brand" href="<?php echo site_url(''); ?>"><img src="<?php echo base_url('assets/image/logo-bpjs.png') ?>" style="height: 25px">  </a>
       <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #1dbc60;">
         <ul class="navbar-nav">
           <li class="nav-item">
             <a class="nav-link" href="<?php echo site_url('user_controller/view_home'); ?>">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="<?php echo site_url('user_controller/show'); ?>">Profile</a>
           </li>
           <li class="nav-item" style="float: right;">
             <a class="nav-link" href="<?php echo site_url('login_controller/logout'); ?>">Logout</a>
           </li>
         </ul>
       </div>
     </nav>
   </div>


    <div align="center" class="container w-50" style="border-radius: 20px; background-color: lightgreen; padding:30px;">
      <div class="row">
        <div class="image col-sm-5" style="padding: 20px;">
          <?php echo $foto; ?>
        </div>
        <div class="detail col-sm-7" style="border-radius: 20px; background-color: rgba(255,255,255,0.5);padding:20px;">
          <table class="table-borderless">
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">No. BPJS</span></td>
              <td><span class="text-dark"><?php echo $id_account ?></span></td>
            </tr>
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">Nama</span></td>
              <td><span class="text-dark"><?php echo $name ?></span></td>
            </tr>
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">TTL</span></td>
              <td><span class="text-dark"><?php echo date('d-m-y',strtotime($date_of_birth)); ?></span></td>
            </tr>
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">Alamat</span></td>
              <td><span class="text-dark"><?php echo $address; ?></span></td>
            </tr>
            <tr>
            <td align="right"><span class="text-dark" style="padding-right: 20px;">Fasilitas Kesehatan</span></td>

              <td><span class="text-dark"><?php echo $health_facility; ?></span></td>
            </tr>
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">Kelas</span></td>
              <td><span class="text-dark"><?php echo $class; ?></span></td>
            </tr>
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">Harga</span></td>
              <td><span class="text-dark"><?php echo $price; ?></span></td>
            </tr>
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">Pembayaran Terakhir</span></td>
              <td><span class="text-dark"><?php echo $debt_start; ?></span></td>
            </tr>
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">Batas Pembayaran</span></td>
              <td><span class="text-dark"><?php echo $debt_end; ?></span></td>
            </tr>
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">Total Bulan</span></td>
              <td><span class="text-dark"><?php echo $debt_month; ?></span></td>
            </tr>
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">Tunggakan</span></td>
              <td><span class="text-dark"><?php echo ($price * $debt_month); ?></span></td>
            </tr>
            <tr>
              <td align="right"><span class="text-dark" style="padding-right: 20px;">Status</span></td>
              <td><span class="text-dark"><?php echo $status; ?></span></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
