<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <a href="<?php echo site_url(''); ?>">Home</a>
    <a href="<?php echo site_url('login_controller/view_login'); ?> ">Login</a>
    <a href="#">Product</a>
    <form class="form_class" action="<?php echo site_url('login_controller/login')?>"  method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" name="Login" value="submit">
    </form>
  </body>
</html>
