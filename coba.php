// PHP
// buat query
<?php
$q = "SELECT * FROM data_user WHERE email='$email' AND password='$password'";
// eksekusi query
$e = mysqli_query($connection, $q);
// hitung hasil dan cek ada atau tidaknya data
$is_exist = mysqli_num_rows($e);
if($is_exist>0){
// keluarkan hasil
$r = mysqli_fetch_assoc($e);
$_SESSION['nama_user'] = $r['nama']; // set session untuk nama
$_SESSION['username'] = $r['username']; // set session untuk nim
$_SESSION['email'] = $r['email']; // set session untuk fakultas
}else{
die('username atau password tidak ditemukan');
}

// HTML
// untuk munculin namanya misalnya dalam tag h1
<h1><?=$_SESSION['nama_user'];?></h1>
// kalau terjadi error mengenai session bisa saja terjadi karena agan gunakan session/variable global ini sebelum user login di halaman tertentu, sehingga variable tersebut dianggap tidak didefenisikan. untuk menghindari error semacam ini bisa tambahkan '@' atau 'isset'.
<h1><?=@$_SESSION['nama_user'];?></h1>
atau
<h1><?=isset($_SESSION['nama_user']);?></h1>