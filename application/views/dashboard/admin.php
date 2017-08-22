<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url()."asset/"; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."asset/"; ?>css/dashboard.css">
    <link rel="stylesheet" href="<?php echo base_url()."asset/"; ?>css/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url()."asset/"; ?>css/jquery.dataTables.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url()."asset/"; ?>css/jquery.dataTables.min.css" rel="stylesheet" media="screen">

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
                                      <a href="<?php echo base_url()."index.php/product"; ?>"><span class="glyphicon glyphicon-list pull-right"></span> Product</a>
                                  </li>
                                  <li>
                                      <a href="<?php echo base_url()."index.php/admin"; ?>"  class="active"><span class="glyphicon glyphicon glyphicon-lock pull-right"></span>Admin </a>
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
                    <h1>Data Admin User<small>  / Tabel</small></h1>
                  </div>
                </div>
                <div class="col-md-3">
                  <ol class="breadcrumb">
                  <li><a href="#">Dashboard</a></li>
                  <li class="active">Admin</li>
                </div>
              </ol>
                </div>

                <div class="col-lg-12">
                  <div class="panel panel-success">
                    <div class="panel-heading">Tabel Data Admin</div>
                    <div class="panel-body">
                     <div class="table">
                      <table id="example" class="table table-bordered" cellspacing="0" width="100%">
                        <thead align="center" >
                          <tr align="center">
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama Lengkap</th>
                            <th>No. HP</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                  				include "koneksi.php";
                  				$view=mysqli_query($db,"select * from admin");
                  				$no=0;
                  				while($a=mysqli_fetch_array($view)){
                  				?>
                          <tr>
                            <td><?php echo $a['username']; ?></td>
                            <td><?php echo $a['password']; ?></td>
                            <td><?php echo $a['nama']; ?></td>
                            <td><?php echo $a['no_hp']; ?></td>
                            <td><?php echo $a['email']; ?></td>
                            <td align="center"><span class="label label-success"><?php echo $a['level']; ?></span></td>
                            <td align="center">
                              <!-- <i class="fa fa-search" style="font-size:24px"></i> -->
                              <a href="<?php echo base_url().'index.php/admin/detail/'.$a['id']; ?>" data-toggle="tooltip" title="Detail"><i class="fa fa-search" style="font-size:20px"></i></a>
                              <a href="<?php echo base_url().'index.php/admin/edit/'.$a['id']; ?>" data-toggle="tooltip" title="Edit"><i class="fa fa-edit" style="font-size:20px"></i></a>
                              <a href="#" data-url="<?php echo base_url().'index.php/admin/delete/'.$a['id']; ?>" class="confirm_delete" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o" style="font-size:20px"></i></a>
                             </td>
                          </tr>
                          <?php }  ?>
                        </tbody>
                      </table>
                        <a href="<?php echo base_url()."index.php/admin/insert"; ?>"><button type="button" class="btn btn-primary" >
                        <span class="glyphicon glyphicon-plus right" aria-hidden="true"></span>
                         Tambah Data
                      </button></a>
                    </div>
                  </div>
                </div>
            </div>

            <script src="<?php echo base_url()."asset/"; ?>js/sweetalert.min.js" charset="utf-8"></script>
          <script src="<?php echo base_url()."asset/"; ?>js/jquery.dataTables.js"></script>
          <script src="<?php echo base_url()."asset/"; ?>js/jquery.dataTables.min.js"></script>
          <script>
       	  $(document).ready(function() {
           $('#example').DataTable();
            } );

            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
       	  </script>
          <script type="text/javascript">
          $(document).ready(function(){
          	$('.confirm_delete').on('click', function(){

          		var delete_url = $(this).attr('data-url');

          		swal({
          			title: "Hapus User ?",
                text:"Yakin akan menghapus User ini?",
          			type: "warning",
          			showCancelButton: true,
          			confirmButtonColor: "#DD6B55",
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
