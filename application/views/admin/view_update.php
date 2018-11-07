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
    <title>Update</title>
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
  <center>
      <div class="container" >
          <div style="background: lightgreen; background-image: url(<?php echo base_url('assets/image/BPJS-Kesehatan.jpg') ?>); height: 500px; background-size: 1100px ; margin-top: 10px; border-radius: 15px">
          <div style="width: 60%; background: lightgreen; opacity: 0.85; padding-top: 30px; height: 100%">
              <h2 class="text-dark">Update Data</h2>
              <table style="margin-top: 20px">
      <form class="form" action="<?php echo site_url('admin_controller/update?id_user='); echo $_GET['id_user'];?>"  method="post">
        <tr>
          <td style="padding:10px;">Name</td>
          <td> <input type="text" class="form-control form-control-sm" name="name" value="<?php echo $name?>"> </td>
        </tr>
        <tr>
          <td style="padding:10px;">Address</td>
          <td> <input type="textarea" class="form-control form-control-sm" name="address" value="<?php echo $address?>"> </td>
        </tr>
        <tr>
          <td style="padding:10px;">Picture</td>
          <td> <input type="file" class="form-control-file" name="image"> </td>
        </tr>
        <tr>
          <td style="padding:10px;">Date of Birth</td>
          <td> <input type="date" class="form-control form-control-sm" name="date_of_birth" value="<?php echo $date_of_birth?>"> </td>
        </tr>
        <tr>
          <td style="padding:10px;">Health Facility</td>
          <td> <input type="text" class="form-control form-control-sm" name="health_facility" value="<?php echo $health_facility?>"> </td>
        </tr>
        <tr>
          <td style="padding:10px;">Class</td>
          <td> <select class="form-control form-control-sm" name="id_class">
            <option value="1"> Class 1 : 80000</option>
            <option value="2"> Class 2 : 51000</option>
            <option value="3"> Class 3 : 25500</option>
          </select></td>
        </tr>
        <tr>
          <td style="padding-top: 10px;" colspan="3" align="center"> <input type="submit" class="btn btn-primary" name="submit" value="Update"> </td>
        </tr>
    </table>
      </div>
      </div>
      </div>
  </center>


  </body>
</html>
