<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_dokter   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from tb_dokter where id_dokter='$id_dokter'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
echo"<script>alert('Data telah terhapus');</script>";
echo "<script>location='table_dokter.php?halaman=produk'; </script>";
?>