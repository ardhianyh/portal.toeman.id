<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url()."asset/"; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."asset/"; ?>css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="<?php echo base_url()."asset/"; ?>js/jquery.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url()."asset/"; ?>js/bootstrap.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url()."asset/"; ?>js/script.js" charset="utf-8"></script>

  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
      Menu
      </button>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        Administrator
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"></span> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url()."index.php/login/logout"; ?>"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                    </ul>
                </li>
        </ul>
      </div><!-- /.navbar-collapse -->
        </div>
      </nav>


            <div class="container-side">
          	<div class="row">
          		<div class="wrapper">
              	    <div class="side-bar">
                          <ul>
                              <li class="menu-head">
                               <a href="#" class="push_menu"><span class="glyphicon glyphicon-menu-hamburger pull-right"></span><strong>Toggle Menu</strong></a>
                              </li>
                              <hr>
                              <div class="menu">
                                  <li>
                                      <a href="<?php echo base_url()."index.php/dashboard"; ?>"><span class="glyphicon glyphicon-home pull-right"></span>Dashboard </a>
                                  </li>
                                  <li>
                                      <a href="<?php echo base_url()."index.php/karyawan"; ?>"><span class="glyphicon glyphicon-user pull-right"></span>Karyawan</a>
                                  </li>
                                  <li>
                                      <a href="<?php echo base_url()."index.php/product"; ?>"  class="active"><span class="glyphicon glyphicon-list pull-right"></span> Product</a>
                                  </li>
                                  <li>
                                      <a href="<?php echo base_url()."index.php/admin"; ?>"><span class="glyphicon glyphicon glyphicon-lock pull-right"></span>Admin </a>
                                  </li>
                              </div>
                          </ul>
              	    </div>
          		</div>
          	</div>
          </div>

          <div class="wrapper">
            <div class="content">
              <div class="col-md-12">
                <div class="col-md-9">
                  <div class="page-header">
                    <h1>Cataloge Product<small>  / Menu</small></h1>
                  </div>
                </div>
                <div class="col-md-3">
                  <ol class="breadcrumb">
                  <li><a href="#">Dashboard</a></li>
                  <li class="active">Product</li>
                </div>
              </ol>
                </div>

                <div class="col-lg-10">
                  <div class="panel panel-success">
                    <div class="panel-heading">Input Menu <a href="<?php echo base_url()."index.php/product"; ?>"><span class="glyphicon glyphicon-remove" style="float: right;"></span></a></div>
                    <div class="panel-body">
                      <?= validation_errors() ?>
                        <?= form_open_multipart('product/edit', ['class'=>'form-horizontal']) ?>
                      <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label col-xs-2">Nama*</label>
                            <div class="col-xs-4">
                                <input type="text" id="nama" class="form-control" name="nama" value="<?php echo $p['nama']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="control-label col-xs-2">Deskripsi*</label>
                            <div class="col-xs-5">
                              <textarea name="deskripsi" class="form-control" rows="8" cols="80" required><?php echo $p['deskripsi']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group  ">
                            <label class="control-label col-xs-2">Harga*</label>
                            <div class="col-xs-2">
                                <input type="number" id="harga" class="form-control" name="harga" value="<?php echo $p['harga']; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                      <?= form_close() ?>
                    </div>
                  </div>
                </div>
            </div>
          </div>

  </body>
</html>
