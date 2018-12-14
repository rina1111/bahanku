<?php 
$db_host = "localhost"; // untuk server lokal kita
$db_user = "root"; // untuk usernme database .. disini masih default " root"
$db_pass =""; // untuk ppasswor database. disesuikan jika db mempunyai password
$db_name ="db_mediskin"; // nama database kita yaitu : dbsebon

$koneksi = mysqli_connect($db_host,$db_user,$db_pass);
$select_db=mysqli_select_db($koneksi,'db_mediskin');

if (mysqli_connect_error()) {
	// Tampilkan pesan 
	echo ' Gagal melakukan koneksi ke Database :'.mysqli_connect_error();
	
}

 ?>