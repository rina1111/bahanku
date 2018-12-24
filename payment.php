<?php
session_start();
 
include 'koneksi.php';




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payment</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Dr PRO template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css`	<link rel="stylesheet" type="text/css" href="styles/about.css">
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

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>

	<link rel="stylesheet" type="text/css" href="styles/loginsignup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/cardku.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">


</head>



<body style="background-image: url(images/1.jpg) ; width:100%">


	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="#">
					<div style="color: #5F9EA0	">MediSkin<span style="color:#BDB76B ">Appointment</span></div><hr>
					<div style="color: #556B2F; font-size: 14px;">Make An Appointment <span style="color: #556B2F"> with your favorite clinic!</span></div><hr>
					
				</a>
			</div>

			<!-- Main Navigation -->
					<div class="topnav" id="myTopnav">
				<nav class="main_nav" style="color: black    ">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li ><a href="index.html"><i class="fas fa-reply-all" style="font-size: 24px; color: #556B2F"></i></a></li>
						<li class="active "><a href="Payment.html">Payment Detail</a></li>
						
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

</div>
</header>
<!---------------->
	<div class="services" style="background-color: transparent;">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title_container">
					
					</div>
				</div>
			</div>
		<br>
		<br>
		<br>
		<br>
		<br>
			<br>
		<br>
		<br>
		<br>
		<br>
<!---------------->
 <br>
      <br>
      <br>
      <br>
       <br>
      <br>
      <br>
      <br>
       <br>
      <br>
      
      
  
<div id="wrapper" >
  <div id="container" style="border-style: double; background-color: white;">

    <div id="info">
      <br>
      <br>
    

      <img id="product" src="images/id.png" style="width: 100%;"><hr>


  <?php 
									$ambil =$koneksi-> query ( "SELECT * FROM langganan WHERE id_member='$_GET[id]'");
									$pecah = $ambil->fetch_assoc();
									?>
      <div id="price">
      	<p style="font-size:18px; "><strong><?php echo ($pecah['jns_member']);?></strong></p>
     <p>Rp.<?php echo ($pecah['hrg_member']);?></p>
     <br>
   
<img src="images/Mandiri.png">
     

      </div>
    </div>


    <div id="payment">
    	<form class="form" method="post">

      	<input id="nama" type="text" name="name" requierd="true" maxlength="50" placeholder="Nama "style="border-radius: 7px; border-style: double;font-size: 11px"><hr>

      	<input id="email" type="text" name="email" requierd="true" maxlength="50" placeholder="Email "style="border-radius: 7px; border-style: double;font-size: 11px"><hr>
      	<input id="email" type="text" name="total" requierd="true" maxlength="50" readonly="" placeholder=Rp.<?php echo ($pecah['hrg_member']);?> value=<?php echo ($pecah['hrg_member']);?> style="border-radius: 7px; border-style: double;font-size: 11px; background-color: lightgrey;"><hr>

     
     
        <p style="font-size:12px; font-family: times rowman; " >Silahkan melakukan Pembayaran Sebesar <span style="border-bottom: solid;"> Rp.<?php echo ($pecah['hrg_member']);?></span> ke Rekening Mandiri 3333-01000-27894 a.n     PT.Mediskinku</p>
       
       <button name="save" type="submit" style="color: white;"> Pay now</button>
  </form>
    </div>
    <?php 
if (isset($_POST['save']))
{
	
		$koneksi->query("INSERT INTO payment(nama,email_pay,total)VALUES ('$_POST[name]','$_POST[email]','$_POST[total]')");
		

echo "<script>alert('Terimakasih Segera Lakukan Pembayaran Agar dapat melakukan Registrasi'); </script>";
echo "<meta http-equiv='refresh' content='1;url=confrim_payment.php?halaman=produk'>";
}
?>

  </div>
</div>
<link rel="stylesheet" type="text/css" href="css/checkout.css">
</section>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer style="background-color:black ;">
 <div class="container">
   <div class="row">
   
    
  <div class="col-md-4 col-sm-6 col-xs-12">

            <div class="col-md-4 col-sm-6 col-xs-12">
              <span class="logo" id="ku" style="color: #5F9EA0; font-size: 32px; font-style: italic;"><strong>MediSkin</strong></span>
              	<span style="color:#BDB76B;font-size: 32px; font-style: italic;">Appointment</span><hr>
            </div>
            </div>


    <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="address">
                    <span>Contact Us</span>       
                    <li>
                       <i class="fas fa-phone" aria-hidden="true"></i> : <a href="#">     +62 225 757 630</a>
                    </li> 
                    <li>
                       <i class="fas fa-envelope" aria-hidden="true"></i> : <a href="#">   MediSkinku77@gmail.com</a>
                    </li> 
               </ul>
           </div>


            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="address">
                    <span>Find Us</span>       
                    <li>
                       <i class="fab fa-facebook" aria-hidden="true"></i>  : <a href="#">  MediSkin_Appointment</a>
                    </li> 
                      <li>
                       <i class="fab fa-twitter" aria-hidden="true"></i>   : <a href="#">  MediSkinku</a>
                    </li> 
                    <li>
                       <i class="fab fa-instagram" aria-hidden="true"></i> : <a href="#">  MediSkin_Appointment</a>
                    </li> 
               </ul>
           </div>
      <div class="col-12">
      	<p style="text-align: center;">Copy Right by Rina Anjari</p><hr>
      </div>
  </div>
</div>
</footer>
</body>
</html>