<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
  </head>
  <body>
    <?php
    $a = date('Y-m-10');
    $time = strtotime($a);
    $b = date('Y-m-d', strtotime('+3 month', $time));
    $awal = new DateTime($a);
    $akhir = new DateTime($b);
    $diff = $akhir->diff($awal);
    echo (($diff->format('%y') * 12) + $diff->format('%m'));
     ?>
    <a href="<?php echo site_url('admin_controller/view_home'); ?>">Home</a>
    <a href="<?php echo site_url('admin_controller/view_create'); ?>">Create</a>
    <a href="<?php echo site_url('admin_controller/index'); ?>">Index</a>
    <a href="#">Product</a>
    <a href="<?php echo site_url('login_controller/logout'); ?>">Logout</a>
  </body>
</html>
