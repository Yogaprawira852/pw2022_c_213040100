<?php
require 'func.php';
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style.css">
		<title>YoTech - Menjual Barang Elektronik</title>
	</head>
	<body>
		<div class="container">
			<div class="header text-center text-light">
				<h3 style="padding: 20px;">YoTech</h3>
				<div class="banner">
					<img src="1.png" alt="">
				</div>
			</div><hr>
			<nav class="navigasi">
				<ul>
					<li><a href="index.php">Home</a></li>
					<!-- <li><a href="#">YoTech</a></li> -->
					<!-- <li><a href="#">About</a></li> -->
					<li><a href="admin/admin.php">Admin Page</a></li>
					<form action="" method="post" name="keyword" >
						<div class="input-group mb-3">
							<input type="text" class="form-control" name="keyword" placeholder="masukkan keyword pencarian...." autocomplete="off">
							<button class="btn btn-primary" type="submit" name="cari">Cari!</button>
						</div>
       				 </form>
				</ul>
			</nav>
			<div class="section">
				<hr>
				<marquee behavior="" direction=""><b>Selamat Datang Di YoTech - Menjual Barang Elektronik</b></marquee>
				<hr>
				<br>
			</div>
			<!-- <div class="left">
					<div class="box">
							<div class="isi">
									<h2>assalamualaikum</h2>
							</div>
					</div>
			</div> -->
			<div class="center">
				<?php
						$sql = "SELECT * FROM t_artikel order by id asc";
						$res = mysqli_query($con, $sql);
						while ($data = mysqli_fetch_array($res)) {
							if(strlen($data["isi"] >= 40)) {
								echo $data["isi"];
							} else {
								$z = '....';
								$y = substr($data["isi"],0,320) .'<br><a href=detail.php?id='.$data["id"].'><button class="btn-info">Baca Selengkapnya</button></a>';
					};
				?>
				<div class="box">
					<div class="isi" align="justify">
						<h2 style="margin-bottom: 5px"><?php echo $data["judul"]; ?></h2>
						<hr>
						<p class="by">by Yoga Prawira Kusuma</p>
						<hr>
						<br>
						<div class="left">
						<img width="100%" height="150px" src="img/<?php echo $data['gambar'];?>"/>
						</div>
						<p style="margin-top: 5px"><?php echo $y; ?></p><br><hr>	

						
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class="right">
				<div class="box">
					<div class="isi" align="center">
						<h3>Profil Developer</h3><br>
						<img width="100%" src="img/DSC00981.JPG" alt="wahyu" style="border-radius: 50%"><br>
						<div style="margin: 10px; display: inline;">
							<p>Yoga Prawira Kusuma</p>
							<p>213040100</p>
							<p>Informatika</p>
							<a href="https://wa.link/xdytbs"><button class="btn-info">WhatsApp</button></a>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="isi">
						<h3>Artikel Terbaru</h3>
						<?php
							$sql = "select id, judul, gambar from t_artikel order by id desc";
							$res = mysqli_query($con, $sql);
							$no = 0;
							if(isset($_POST["cari"])) {
								$keyword = $_GET["keyword"];
								$query = "SELECT  id, judul, gambar FROM t_artikel 
								WHERE judul LIKE '%$keyword%'";
								$res = mysqli_query($con, $sql);
								var_dump($res);
							}
							var_dump($res);die;
							while ($data = mysqli_fetch_array($res)) {
						?>
						<div style="margin-bottom: 5px;">
							<fieldset style="text-align: center; border-color: #F3F1F1">
								<legend>
									<h6 href="" style="padding: 5px; font-size: 15px;"><?php echo $data["judul"]; ?></h6>
								</legend>
								<img style="padding: 10px;" width="100%" height="150px" src="img/<?php echo $data['gambar'];?>"/>
								<a href="detail.php?id=<?php echo($data['id'])?>"><button class="btn-info">Baca Selengkapnya</button></a>
							</fieldset>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>