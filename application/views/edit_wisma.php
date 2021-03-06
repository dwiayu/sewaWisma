<?php
?>

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data User</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
 			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 			<![endif]-->
 		</head>
 		<body>
 		<?php echo anchor('Admin/chart/charts', '<< Kembali');?>
 			<div class="container-fluid">
 				<div class="col-md-4"></div>
 				<div class="col-md-4">
 					<h1>Edit Data Wisma</h1>
 					<?php 
 						echo form_open_multipart('Wisma/update/'.$this->uri->segment(3));
 						echo validation_errors();
 						

 					?>

 					<div class="form-group">
 						<label>Nama</label>
 						<input type="text" class="form-control" id="nama_wisma" name="nama_wisma" value="<?php echo $wisma[0]->nama_wisma ?>">
 					</div>
 					<div class="form-group">
 						<label>Fasilitas</label>
 						<input type="text" class="form-control" id="fasilitas" name="fasilitas" value="<?php echo $wisma[0]->fasilitas ?>">
 					</div>
 					<div class="form-group">
 						<label>Kuota</label>
 						<input type="text" class="form-control" id="kuota" name="kuota" value="<?php echo $wisma[0]->kuota ?>">
 					</div>
 					<div class="form-group">
 						<label>Harga</label>
 						<input type="text" class="form-control" id="harga" name="harga" value="<?php echo $wisma[0]->harga ?>">
 					</div>
 					<div class="form-group">
 						<label>Foto</label>
 						<input type="file" name="userfile" size="20">
 					</div>
 					
					

 					<button type="submit" class="btn btn-primary">Update</button>
 					<?php echo form_close(); ?>
 				</div>
 				<div class="col-md-4"></div>
 			</div>

 			<!-- jQuery -->
 			<script src="//code.jquery.com/jquery.js"></script>
 			<!-- Bootstrap JavaScript -->
 			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 			<script src="Hello World"></script>
 		</body>
 		</html>