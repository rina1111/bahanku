<?php


$query="DELETE FROM tb_dokter WHERE id_dokter='$_GET[id]'";

echo "<script>alert('data terhapus'); </script>";
echo "<script>location='table_dokter.php?halaman=produk'; </script>";
?>