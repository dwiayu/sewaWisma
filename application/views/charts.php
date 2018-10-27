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
			<li><a href="<?php echo base_url()?>index.php/Admin/widget/widgets"><em class="fa fa-users">&nbsp;</em> User</a></li>
			<li class="active"><a href="<?php echo base_url()?>index.php/Admin/chart/charts"><em class="fa fa-building">&nbsp;</em> Wisma</a></li>
			<li><a href="<?php echo base_url()?>index.php/Admin/element/elements"><em class="fa fa-book">&nbsp;</em> Transaksi</a></li>
			
			<li><a href="<?php echo base_url()?>index.php/Admin/login/login"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Wisma</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Wisma</h1>
			</div>
		</div><!--/.row-->
		
		<h1 class="text-center">Data Wisma</h1>
		<?php echo "<a href='".base_url()."index.php/Wisma/create/' class='btn btn-primary'>Tambah</a>"; ?>
		
		<table class="table table-hover">
				<thead>
					<tr>
						<th>Nama Wisma</th>
						<th>Fasilitas</th>
						<th>Kuota</th>
						<th>Foto</th>
						<th>Harga</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($wisma_list as $row) {
						echo "<tr><td>";
						echo $row['nama_wisma'];
						echo "</td><td>";
						echo $row['fasilitas'];
						echo "</td><td>";
						echo $row['kuota'];
						echo "</td><td>";
						echo "<img src='".base_url('assets/uploads/').$row['foto_wisma']."'width='100px;'>";
						echo '</td><td>';
						echo $row['harga'];
						echo '</td><td>';
						
						echo "<a href='".base_url()."index.php/Wisma/update/".$row['id_wisma']."' class='btn btn-success'>Update</a>";
						echo " ";
						echo "<a href='".base_url()."index.php/Wisma/delete/".$row['id_wisma']."' class='btn btn-danger'>Hapus</a>";
						echo "</td></tr>";
					}
					?>
				</tbody>
			</table>
		</div><!--/.row-->
	</div>	<!--/.main-->
	  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};
	</script>	
</body>
</html>
