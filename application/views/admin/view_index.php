<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
  </head>
  <body>
    <a href="<?php echo site_url('admin_controller/view_home'); ?>">Home</a>
    <a href="<?php echo site_url('admin_controller/view_create'); ?>">Create</a>
    <a href="<?php echo site_url('admin_controller/index'); ?>">Index</a>
    <a href="#">Product</a>
    <a href="<?php echo site_url('login_controller/logout'); ?>">Logout</a>

    <table border="1">
      <tr align="center">
        <td>ID</td><td>Nama</td><td>Detail</td>
      </tr>
      <?php foreach ($rs as $data): ?>
        <tr>
          <td><?php echo $data->id_user ?></td>
          <td><?php echo $data->name; ?></td>
          <td><a href="<?php echo site_url('admin_controller/show?id_user='); echo $data->id_user;?>"> ... </a> </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
