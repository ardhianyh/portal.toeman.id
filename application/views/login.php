<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portal Karyawan Toeman Corp</title>

    <link rel="stylesheet" href="<?php echo base_url()."asset/";?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."asset/";?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()."asset/";?>css/sweetalert.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()."asset/";?>js/sweetalert.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url()."asset/";?>js/bootstrap.js" charset="utf-8"></script>
    <script src="<?php echo base_url()."asset/";?>js/bootstrap.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url()."asset/";?>js/script.js" charset="utf-8"></script>

  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-custom affix-top">
    <div class="container">
      <center><img src="<?php echo base_url()."asset/";?>img/logo1.png" alt=""></center>
    </div>
  </nav>

  <section id="form">
    <form id="form-login" class="formular" action="<?php echo base_url('index.php/login/login') ?>" method="post">
      <div class="content-header">
        <p class="logo">Login Page</p>
        
        <?php echo $this->session->flashdata('action_status')?>
      </div>
      <div class="content">
        <label for="">Username*</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="username" type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <br>
        <label for="">Password*</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <br>
        <br>
        <input type="submit" class="btn btn-login confirm" value="Login">
      </div>
    </form>
  </section>
  <br>
  <br />
  <div class="footer">
    <div class="footer-wrap">
        <center>Develope by &hearts;Ardhian Yuliandra Hanum</p></center>
    </div>
  </div>
  </body>



</html>
