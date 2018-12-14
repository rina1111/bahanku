

<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama_user          = $_POST['nama'];
$username           = $_POST['username'];
$email              = $_POST['email'];
$password           = $_POST['pass'];
$umur               = $_POST['umur'];
$gender             = $_POST['gender'];
$telepon            = $_POST['telepon'];
$alamat             = $_POST['alamat'];
// query SQL untuk insert data
$query="INSERT INTO data_user SET nama_user='$nama_user',username='$username',email='$email',password='$password',umur='$umur',gender='$gender', telepon='$telepon',alamat='$alamat'";
mysqli_query($koneksi, $query);
	 echo"<script>alert('Anda telah berhasil daftar');</script>";
     echo "<meta http-equiv='refresh'content='1;url=login.php'>";

?>
