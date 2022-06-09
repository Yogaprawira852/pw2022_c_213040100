<?php 
	$con = mysqli_connect("localhost", "root", "", "artikel");

	if(!$con) {
		die("Koneksi Gagal : ". mysqli_connect_error());
	};
?>