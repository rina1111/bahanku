

<?php
include 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jadwal Dokter</title>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css`  <link rel="stylesheet" type="text/css" href="styles/about.css">
  <link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/responsive.css">

  <link rel="stylesheet" type="text/css" href="styles/loginsignup.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/cardku.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!------ Include the above in your HEAD tag ---------->


<!------ Include the above in your HEAD tag ---------->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

  
      <link rel="stylesheet" href="css/cardku2.css">


<body style="background-image: url()">


  
  <!-- Header -->

  <header class="header trans_400">
    <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

      <!-- Logo -->
      <div class="logo">
        <br>

        <a href="index.php">

          <div style="color: #5F9EA0 ;">MediSkin<span style="color:#BDB76B ">Appointment</span></div><hr>
          <div style="color: #556B2F; font-size: 14px;">Make An Appointment <span style="color: #556B2F"> with your favorite clinic!</span></div><hr>
          
        </a>
      </div>

      <!-- Main Navigation -->
      <div class="topnav" id="myTopnav">
        <nav class="main_nav" style="color: black    ">
          <ul class="d-flex flex-row align-items-center justify-content-start">
            <li class="" ><a href="index.php">Home</a></li>
            
            
              <li ><div class="Login">
              <button onclick="myFunction2()" class="dropbtn" style="font-size: 15px;
              font-weight: 600;
              ">Register & Login</button>
              <div id="Dropdown" class="dropdown-content2" style="color: #57ccc3">
                <a href="berlangganan.php">Register for Clinic</a>
                <a href="login_klinik.php">Login as clinic</a>
              </div>
            </div></li>


            <style>
            .dropbtn {
              background-color: white;
              color:  black;

              font-size: 15px;
              border: none;
              cursor: pointer;
            }

            .dropbtn:hover, .dropbtn:focus {
              background-color: white;
              color:  #57ccc3;
            }


            .dropdown {
              position: relative;
              display: inline-block;
            }

            .dropdown-content {
              display: none;
              position: absolute;
              background-color: white;
              min-width: 160px;
              overflow: auto;
              
            }

            .dropdown-content a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }
              .dropdown-content2 {
              display: none;
              position: absolute;
              background-color: white;
              min-width: 160px;
              overflow: auto;
              
            }

            .dropdown-content2 a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }

            .dropdown a:hover {background-color:  white;}

            .show {display: block;}
          </style>
          

  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction2() {
  document.getElementById("Dropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<li><a href="about.php">About Us</a></li>
<li class="active"><a href="datadokter.php">Doctors</a></li>
<li><a href="klinik.php">Clinic</a></li>
<li><a href="confrim_payment.php">Confrim Payment</a></li>



</ul>
</nav>  

</div>
<div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

  <!-- Work Hourse -->


  <!-- Header Social -->
  <div class="social header_social">
    <ul class="d-flex flex-row align-items-center justify-content-start">
      <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
    </ul>
  </div>

</div>
<!-- Hamburger -->
<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
</div>
</div>
</header>

<br>
<br><br>
<br>
<br>
<br>
<br>
<div class="col-12">
                    <h2 style=" text-align: center;
    border-bottom:6px double lightblue;
    border-width:5px;   "></h2><hr>
                </div>

<?php $nomor=1; ?>
                  <?php $ambil=$koneksi->query("SELECT * FROM tb_dokter  ");?>
                  <?php while ($pecah=$ambil->fetch_assoc()){?> 
  <section>
  <!--for demo wrap-->
  
    
  
 
  

 
          <div class="col-12 col-md-3 col-md-3">
                <figure class="snip1336">
  <img src="images/id.png"  alt="sample87" />
  <figcaption>
    <img src="img_db/<?php echo $pecah['gambar'];?>"  alt="profile-sample4" class="profile" />
    <h4><?php echo $pecah['nama_dokter'];?></h4><hr>
     <p style="text-align: justify; font-size: 12px; color: white;"><span>Klinik: </span><?php echo $pecah['klinik_dokter'];?></p><hr>
      <p style="text-align: justify; font-size: 12px; color: white;"><span>Ruangan: </span><?php echo $pecah['ruangan'];?></p><hr>
   <p style="text-align: justify; font-size: 12px; color: white;"><?php echo $pecah['alamat_dokter'];?></p><hr>
    <p style="text-align: justify; font-size: 12px; color: white;"><?php echo $pecah['jadwal_dokter'];?></p>
  
  </figcaption>
</figure>

</div>

                
     
</section>

<?php $nomor++;?>
                <?php }?>
<!-- follow me template -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/tableku.js"><script>

</body>
</html>
