<?php
	//Parameter ('hostname', 'username', 'password', 'namadb') 
	$koneksi = mysqli_connect('localhost', 'root', '', 'ilyarsi');

	//Pilih database
	mysqli_select_db($koneksi, 'ilyarsi');

	//Error checking
	if (!$koneksi) {
		echo "Gagal koneksi";
	}
?>