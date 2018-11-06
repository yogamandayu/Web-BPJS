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
    <title>Index</title>
  </head>
  <body>
    <div>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
       <a class="navbar-brand" href="<?php echo site_url(''); ?>"><img src="<?php echo base_url('assets/image/logo-bpjs.png') ?>" style="height: 25px">  </a>
       <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #1dbc60;">
         <ul class="navbar-nav">
           <li class="nav-item">
             <a class="nav-link" href="<?php echo site_url('admin_controller/view_home'); ?>">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo site_url('admin_controller/view_create'); ?>">Create</a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="<?php echo site_url('admin_controller/index'); ?>">Index</a>
           </li>
           <li class="nav-item" style="float: right;">
             <a class="nav-link" href="<?php echo site_url('login_controller/logout'); ?>">Logout</a>
           </li>
         </ul>
       </div>
     </nav>
   </div>

      <div class="container">
    <table class="table  table-striped">
      <tr align="center">
          <td>ID</td><td>Nama</td><td></td>
      </tr>
      <?php foreach ($rs as $data): ?>
        <tr>
          <td align="center"><?php echo $data->id_user ?></td>
          <td><?php echo $data->name; ?></td>
          <td align="center"><a href="<?php echo site_url('admin_controller/show?id_user='); echo $data->id_user;?>"><button class="btn btn-hover">Detail</button></a> </td>
        </tr>
      <?php endforeach; ?>
    </table>
      </div>
  </body>
</html>
