<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo site_url(''); ?>">BPJS Kesehatan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item" style="float:right">
              <a class="nav-link" href="<?php echo site_url('login_controller/view_login'); ?>">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <table align="center">
      <form class="form" action="<?php echo site_url('login_controller/login')?>"  method="post">
        <tr>
          <td><input type="text" class="form-control" name="username" placeholder="Username"></td>
        </tr>
        <tr>
          <td><input type="password" class="form-control" name="password" placeholder="Password"></td>
        </tr>
        <tr align="center">
          <td colspan="3"><input type="submit" class="btn btn-primary" name="submit" value="Login"></td>
        </tr>
      </form>
    </table>
  </body>
</html>
