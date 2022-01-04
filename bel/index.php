
<?php  
	$konek = mysqli_connect("localhost","root","","bel");
	if(isset($_POST['btnSimpan']))
	{
		$jam = $_POST['jam'];
		$status = 0;

		mysqli_query($konek, "ALTER TABLE jam AUTO_INCREMENT=1");
		mysqli_query($konek, "insert into jam(jam, status)values('$jam','$status')");
	}
?>
<!doctype html>
<html lang="en">

<head>
  <title>IoT : Bel Sekolah</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" type="text/css" href="assets/css/css/css.css">
  <link rel="stylesheet" type="text/css" href="assets/css/material-dashboard.css?v=2.1.2">
  <script type="text/javascript" src="jquery/jquery.min.js"></script>
  <script type="text/javascript" src="js/js.js"></script>
  <style type="text/css">
  	.tengah{
  		justify-content :center;
  		flex-direction: :column;
  		display:flex;
  		align-items: center;
  		text-align: center;

  	}

	nav{
  position: relative;
  width: 100%;
  height: 60px;
  background-color: #b1e67c;
  box-shadow: -1px -7px 20px 0px #888;
}

nav ul{
  position: relative;
  top: 20px;
  margin: 0;
  float: right;
  right: 10%
}
nav ul li{
float: left;
display: block;
margin: 0px 15px 0px 15px;
}
nav ul li a{
  text-decoration: none;
  color:#fff;
  font-family:'Helvetica, sans-serif';
}
.footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px; 
}

  </style>
  <script type="text/javascript">
  	$(document).ready(function(){
  		setInterval(function(){
  			$('#datajam').load('cekjam.php');
  		},1000);
  	});
  </script>

</head>
<body>

	<div>
	<nav>
		<ul>
			<li><a href="http://localhost/bel/index.php">H O M E</a></li>
			<li><a href="http://localhost/bel/about.php">A B O U T</a></li>
		</ul>
	</nav>
	</div>
		<div class="content"> 
			<div class="container-fluid tengah">
				<div style="width:500px">
					<div style="text-align : center"><h3>Bel Sekolah</h3></div>	
					<div class="card card-chart" style="height:auto">
						<div class="card-header card-header-success">
							<i class="fas fa-bell" style="font-size:36px"></i><br>
							Pengaturan Bel Sekolah
						</div>
							<div class="card-body"> 
								Jam sekarang : 
								<h2 style="font-weight:bold;">
								<div id="datajam"></div>
								</h2>
								<br>
								<div class="form-group">
									<form method="POST">
										<div>
											<input type="text" name="jam" id="jam" class="form-control" placeholder="Jam : Menit : Detik" 	required style="text-align: center; ">
											<button type="submit" name="btnSimpan" id="btnSimpan" class="btn btn-primary btn-sm"> Tambah Data</button>
										</div>
									</form>
								</div>
								<table class="table table-bordered" style="text-align:center">
									<tr style="background-color: #b1e67c; color:white;">
										<th>List Jam</th>
										<th style="width:10px">Aksi</th>
									</tr>
									<?php 
									$sql= mysqli_query($konek,"select * from jam order by id asc");
										while($data=mysqli_fetch_array($sql))
										{


									 ?>
									<tr>
										<td><?php echo $data['jam']; ?></td>
										<td><a href="hapus.php?id=<?php echo $data['id']; ?>">
											<i class="fa fa-trash" color: blue;></i>
										</a>
									</td>
									</tr>
									<?php } ?>
								</table>
							</div>
					</div>
					<div>
						<img src="assets/img/fasilkom.png" width="400" height="150">
					</div>
				</div>

			</div>
		</div>
<div class="footer"><script>document.write(new Date().getFullYear())</script> | Kolaborasi Fasilkom-TI X Mitra</div>
</body>
</html>