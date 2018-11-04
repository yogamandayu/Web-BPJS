<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <title>Register New Account</title>
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
    <table>
      <form class="form" action="<?php echo site_url('admin_controller/create')?>"  method="post">
        <tr>
          <td>Username</td>
          <td>:</td>
          <td> <input type="text" class="form-control" name="username"> </td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td> <input type="password" class="form-control" name="password"> </td>
        </tr>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td> <input type="text" class="form-control" name="name"> </td>
        </tr>
        <tr>
          <td>Foto</td>
          <td>:</td>
          <td> <input type="file" class="form-control" name="image"> </td>
        </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td> <input type="textarea" class="form-control" name="address"> </td>
        </tr>
        <tr>
          <td>Date of Birth</td>
          <td>:</td>
          <td> <input type="date" class="form-control" name="date_of_birth"> </td>
        </tr>
        <tr>
          <td>Health Facility</td>
          <td>:</td>
          <td> <input type="text" class="form-control" name="health_facility"> </td>
        </tr>
        <tr>
          <td>Class</td>
          <td>:</td>
          <td> <select class="form-control" name="id_class">
            <option value="1"> Class 1 : 80000</option>
            <option value="2"> Class 2 : 51000</option>
            <option value="3"> Class 3 : 25500</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="3" align="center"> <input type="submit" class="btn btn-outline-primary" name="submit" value="Create"> </td>
        </tr>
      </form>
    </table>
  </body>
</html>
