<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url()."asset/"; ?>css/catalog.css">
    <link rel="stylesheet" href="<?php echo base_url()."asset/"; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."asset/"; ?>css/dashboard.css">
      <link rel="stylesheet" href="<?php echo base_url()."asset/"; ?>css/sweetalert.css">
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
                                      <a href="<?php echo base_url()."index.php/product"; ?>" class="active"><span class="glyphicon glyphicon-list pull-right"></span> Product</a>
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
                    <h1>Data Product<small>  / Menu</small></h1>
                  </div>
                </div>
                <div class="col-md-3">
                  <ol class="breadcrumb">
                  <li><a href="#">Dashboard</a></li>
                  <li class="active">Product</li>
                </div>
              </ol>
                </div>


                <div id="catalogue">
                  <div class="container-fluid">
                    <div class="row">

                      <?php foreach ($product as $p) { ?>
                      <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                          <div class="caption-img" style="background: url(<?php echo base_url()."asset/"; ?>img/upload/<?php echo $p['gambar']; ?>);"></div>
                            <div class="caption-details">
                              <h3><?php echo $p['nama']; ?></h3>
                              <p><?php echo $p['deskripsi']; ?></p>
                              <span class="price">Rp. <?php echo $p['harga']; ?></span>
                            </div>
                          <hr>
                            <a href="<?php echo base_url().'index.php/product/edit/'.$p['id']; ?>" data-toggle="tooltip" title="Edit"><i class="fa fa-edit" style="font-size:20px"></i></a>
                            <b>I</b>
                            <!-- <a href="<?php echo base_url().'index.php/product/delete/'.$p['id']; ?>" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o" style="font-size:20px"></i></a> -->
                            <a href="#" data-url="<?php echo base_url().'index.php/product/delete/'.$p['id']; ?>" class="confirm_delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o" style="font-size:20px"></i></a>
                        </div>
                      </div>
                      <?php      } ?>
                  </div>
                  <a href="<?php echo base_url()."index.php/product/create"; ?>">
                  <button type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus right" aria-hidden="true"></span>
                     Tambah Menu
                  </button></a>
                </div>

            </div>
          </div>


    <script src="<?php echo base_url()."asset/"; ?>js/sweetalert.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.confirm_delete').on('click', function(){

        var delete_url = $(this).attr('data-url');

        swal({
          title: "Hapus Menu ?",
          text:"Yakin akan menghapus Menu ini?",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#00aa9d",
          confirmButtonText: "Hapus !",
          cancelButtonText: "Batalkan",
          closeOnConfirm: false
        }, function(){
          window.location.href = delete_url;
        });

        return false;
      });
    });
    </script>
  </body>
</html>
