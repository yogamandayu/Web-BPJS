<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <title>Detail User</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo site_url('admin_controller/view_home'); ?>">BPJS Kesehatan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('admin_controller/view_home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin_controller/view_create'); ?>">Create</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin_controller/index'); ?>">Index</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item" style="float: right;">
              <a class="nav-link" href="<?php echo site_url('login_controller/logout'); ?>">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container">
      <table>
       <br> <img src="<?php echo base_url('image/Profile_Picture.jpg') ?>" alt="<?php echo base_url('image/Profile_Picture.png') ?>" width="10%">
        <tr>
          <td>No. BPJS</td>
          <td>:</td>
          <td><?php echo $id_account ?></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?php echo $name ?></td>
        </tr>
        <tr>
          <td>TTL</td>
          <td>:</td>
          <td><?php echo date('d-m-y',strtotime($date_of_birth)); ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?php echo $address; ?></td>
        </tr>
        <tr>
          <td>Fasilitas Kesehatan</td>
          <td>:</td>
          <td><?php echo $health_facility; ?></td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td>:</td>
          <td><?php echo $class; ?></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td>:</td>
          <td><?php echo $price; ?></td>
        </tr>
        <tr>
          <td>Pembayaran Terakhir</td>
          <td>:</td>
          <td><?php echo $debt_start; ?></td>
        </tr>
        <tr>
          <td>Batas Pembayaran</td>
          <td>:</td>
          <td><?php echo $debt_end; ?></td>
        </tr>
        <tr>
          <td>Total Bulan</td>
          <td>:</td>
          <td><?php echo $debt_month; ?></td>
        </tr>
        <tr>
          <td>Tunggakan</td>
          <td>:</td>
          <td><?php echo ($price * $debt_month); ?></td>
        </tr>
      </table>
      <a href="<?php echo site_url('admin_controller/view_update?id_user='); echo $id_account;?>">Update</a>
      <a href="<?php echo site_url('admin_controller/delete?id_user='); echo $id_account;?>">Delete</a>
    </div>
  </body>
</html>
