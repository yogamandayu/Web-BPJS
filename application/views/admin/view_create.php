<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register New Account</title>
  </head>
  <body>
    <a href="<?php echo site_url('admin_controller/view_home'); ?>">Home</a>
    <a href="<?php echo site_url('admin_controller/view_create'); ?>">Create</a>
    <a href="<?php echo site_url('admin_controller/index'); ?>">Index</a>
    <a href="#">Product</a>
    <a href="<?php echo site_url('login_controller/logout'); ?>">Logout</a>
    <table>
      <form class="form_class" action="<?php echo site_url('admin_controller/create')?>"  method="post">
        <tr>
          <td>Username</td>
          <td>:</td>
          <td> <input type="text" name="username"> </td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td> <input type="password" name="password"> </td>
        </tr>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td> <input type="text" name="name"> </td>
        </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td> <input type="textarea" name="address"> </td>
        </tr>
        <tr>
          <td>Date of Birth</td>
          <td>:</td>
          <td> <input type="date" name="date_of_birth"> </td>
        </tr>
        <tr>
          <td>Health Facility</td>
          <td>:</td>
          <td> <input type="text" name="health_facility"> </td>
        </tr>
        <tr>
          <td>Class</td>
          <td>:</td>
          <td> <select class="class" name="id_class">
            <option value="1"> Class 1 : 80000</option>
            <option value="2"> Class 2 : 51000</option>
            <option value="3"> Class 3 : 25500</option>
          </select></td>
        </tr>
        <tr>
          <td colspan="3" align="center"> <input type="submit" name="submit" value="Create"> </td>
        </tr>
      </form>
    </table>
  </body>
</html>
