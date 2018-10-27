<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wisma Malang</title>
	<link href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/admin/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				
				<a class="navbar-brand" href="#"><span>Wisma</span>Malang</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="<?php echo base_url()?>index.php/Admin/home/index"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="active"><a href="<?php echo base_url()?>index.php/Admin/widget/widgets"><em class="fa fa-users">&nbsp;</em>User</a></li>
			<li><a href="<?php echo base_url()?>index.php/Admin/chart/charts"><em class="fa fa-building">&nbsp;</em>Wisma</a></li>
			<li><a href="<?php echo base_url()?>index.php/Admin/element/elements"><em class="fa fa-book">&nbsp;</em>Transaksi</a></li>
			
			<li><a href="<?php echo base_url()?>index.php/Admin/login/login"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">User</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar User</h1>
			</div>
		</div><!--/.row-->
		<h1 class="text-center">Data User</h1>
		<?php echo "<a href='".base_url()."index.php/Admin/create/' class='btn btn-primary'>Tambah</a>"; ?>
		<br><br>
		<table class="table table-hover">
				<thead>
					<tr>
						<th>Username</th>
						<th>Password</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Foto</th>
						<th>Level</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($user_list as $row) {
						echo "<tr><td>";
						echo $row['username'];
						echo "</td><td>";
						echo $row['password'];
						echo "</td><td>";
						echo $row['nama'];
						echo "</td><td>";
						echo $row['email'];
						echo '</td><td>';
						echo "<img src='".base_url('assets/uploads/').$row['foto']."'width='100px;'>";
						echo '</td><td>';
						echo $row['level'];
						echo '</td><td>';
						echo " ";
						echo "<a href='".base_url()."index.php/Admin/update/".$row['id_user']."' class='btn btn-success'>Update</a>";
						echo " ";
						echo "<a href='".base_url()."index.php/Admin/delete/".$row['id_user']."' class='btn btn-danger'>Hapus</a>";
						echo "</td></tr>";
					}



					?>
				</tbody>

			
		<!--/.row-->
	</div>	<!--/.main-->
	  

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
