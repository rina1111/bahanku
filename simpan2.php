

<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$klinik          = $_POST['nama_klinik'];
$nama_pemilik           = $_POST['nama_pemilik'];
$email              = $_POST['email_klinik'];
$password           = $_POST['pass'];
$berlangganan              = $_POST['berlangganan'];
$telepon            = $_POST['tlp'];
$alamat             = $_POST['alamat'];
$jadwal_klinik             = $_POST['jadwal_klinik'];


// query SQL untuk insert data
$query="INSERT INTO data_clinic SET klinik='$klinik',nama_pemilik='$nama_pemilik',email='$email',password='$password',berlangganan='$berlangganan', telepon='$telepon',alamat='$alamat',jadwal_klinik='$jadwal_klinik'";
mysqli_query($koneksi, $query);
	 echo"<script>alert('Klinik Anda telah berhasil daftar');</script>";
     echo "<meta http-equiv='refresh'content='1;url=login_klinik.php'>";

?>
