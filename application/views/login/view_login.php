<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/login.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body style="background-image: url(<?php echo base_url('assets/image/bpjs-kesehatan.jpg');?>); background-size: 100% ;">
    <div>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
       <a class="navbar-brand" href="<?php echo site_url(''); ?>"><img src="<?php echo base_url('assets/image/logo-bpjs.png') ?>" style="height: 25px">  </a>
       <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #1dbc60;">
         <ul class="navbar-nav">
           <li class="nav-item" style="padding-right:10px;">
               <a class="nav-link" href="<?php echo site_url(''); ?>">Home<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item active" style="padding-left:10px;">
             <a class="nav-link" href="<?php echo site_url('login_controller/view_login'); ?>">Login</a>
           </li>
         </ul>
       </div>
     </nav>
   </div>
   <br><br><br>
  <center>
    <div class="login" style="opacity: 0.9; margin-top: 40px">
      <i class="fas fa-sign-in-alt text-primary" style="font-size:78px;padding-bottom:20px;"></i>
    <table align="center">
      <form class="form" action="<?php echo site_url('login_controller/login')?>"  method="post">
        <tr colspan="3">
          <td style="padding-bottom:10px;"><input type="text" class="form-control" name="username" placeholder="Username"></td>
        </tr>
        <tr colspan="3">
          <td style="padding-top:10px;"><input type="password" class="form-control" name="password" placeholder="Password"></td>
        </tr>
        <tr align="center">
          <td style="padding-top:10px;"><input type="submit" class="btn btn-primary btn-block w-50" name="submit" value="Login"></td>
        </tr>
      </form>
    </table>
  </div>
  </center>
  <br><br><br><br><br><br><br>
  <footer>
    <p align="center" style="padding: 30px; color:black;">Copyright © 2018 BPJS Kesehatan. All rights reserved.</p>
  </footer>
  </body>
</html>
