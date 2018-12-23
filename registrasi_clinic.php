
<?php
include 'koneksi.php';
session_start();
 


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi Klinik</title>
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


</head>



<body style="background-image: url()">


	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

			<!-- Logo -->
			<div class="logo">
				<a href="#">
					<div style="color: #5F9EA0	">MediSkin<span style="color:#BDB76B ">Appointment</span></div><hr>
					<div style="color: #556B2F">Make An Appointment <span style="color: #556B2F"> with your favorite clinic!</span></div><hr>
					
				</a>
			</div>

			<!-- Main Navigation -->
			<div class="topnav" id="myTopnav">
				<nav class="main_nav" style="color: black    ">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li ><a href="index.php">Home</a></li>
						
						<li class="active"><a href="registrasi_clinic.php">Register for Clinic</a></li>
							<li ><div class="Login">
							<button onclick="myFunction2()" class="dropbtn" style="font-size: 15px;
							font-weight: 600;
							">Login</button>
							<div id="Dropdown" class="dropdown-content2" style="color: #57ccc3">
								<a href="login.php">Login as doctor</a>
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
<li><a href="datadokter.php">Doctors</a></li>
<li><a href="Clinic.html">Clinic</a></li>

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

<!-- Menu -->

<div class="menu_overlay trans_400"></div>
<div class="menu trans_400">
	<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>

	<div class="menu_extra">
		<div class="menu_link">Mo - Sat: 8:00am - 9:00pm</div>
		<div class="menu_link">+34 586 778 8892</div>
		<div class="menu_link"><a href="#">Make an appointment</a></div>
	</div>
	<div class="social menu_social">
		<ul class="d-flex flex-row align-items-center justify-content-start">
			<li><i class="fas fa-instagram" aria-hidden="true"></i></a></li>
			<li><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</div>
</div>


<!-- Home -->
<div class="Home">

	<div class="home d-flex flex-column align-items-start justify-content-end">
		<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
		<div class="home_overlay"><img src="images/1.jpg" alt=""></div>
		<div class="home_container">

			<div class="container">
				<div class="row">
					<!----card langganan---->
					<div class="col-lg-4" style="float: right;">
						<div class="card transition">
							<h2 class="transition">Reguler </h2>

							<div class="cta-container transition"><a href="payment.html" class="cta2">Rp. 69,999 </a></div>
							<div class="card_circle transition"></div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card transition">
							<h2 class="transition">Exclusive</h2>

							<div class="cta-container transition"><a href="payment.html" class="cta2">Rp.124,999 </a></div>
							<div class="card_circle transition"></div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card transition">
							<h2 class="transition">Premium </h2>

							<div class="cta-container transition"><a href="payment.html" class="cta2">Rp. 399,999</a></div>
							<div class="card_circle transition"></div>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</div>

</div>


<style type="">
@import url('http://fonts.googleapis.com/css?family=Raleway:400,200')
body {   font-family: Helvetica, san-serif;
	background: -webkit-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* Chrome 10+, Saf5.1+ */
	background:    -moz-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* FF3.6+ */
	background:     -ms-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* IE10 */
	background:      -o-linear-gradient(90deg, #00aaee 10%, #DD2476 90%); /* Opera 11.10+ */
background:         linear-gradient(90deg, #00aaee 10%, #DEB887 90%); /* W3C */ }
.transition { transition: .3s cubic-bezier(.3, 0, 0, 1.3) }
.card {
	background-color: white;
	bottom: 0;
	box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
	-webkit-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
	height: 300px;
	left: 0;
	margin: auto;
	overflow: hidden;
	position: absolute;
	right: 0;
	top: 0;
	width: 300px;
}
.card:hover {
	height: 450px;
	width: 300px;
}
.card:hover .cta-container {
	display: inline;
	margin-top: 380px;
}
.card:hover .card_circle {
	background-size: cover;
	border-radius: 0;
	margin-top: -130px;
}
.card:hover h2 {
	background: 	#DEB887;
	color: white;
	margin-top: 100px;
	padding: 5px;
}
.card:hover h2 small { color: #fff }
.card:hover p { margin-top: 300px }
.card_circle {
	background: url(images/ini.jpg) no-repeat center bottom;
	background-color: 	white;
	background-size: cover;
	border-radius: 50%;
	height: 400px;
	margin-left: -75px;
	margin-top: -270px;
	position: absolute;
	width: 450px;
}
h2 {
	color: #DEB887;
	font-family: 'Raleway', sans-serif;
	font-size: 24px;
	font-weight: 200;
	margin-top: 150px;
	position: absolute;
	text-align: center;
	width: 100%;
	z-index: 9999;
}
p {
	color: rgba(0,0,0,.6);
	font-family: 'Raleway', sans-serif;
	font-size: 100%;
	font-weight: normal;
	margin-top: 200px;
	position: absolute;
	text-align: center;
	z-index: 9999;
}
.cta-container {
	display: none;
	margin-top: 320px;
	position: absolute;
	text-align: center;
	width: 100%;
	z-index: 9999;
	background-color:#DEB887;
}
.cta2 a {
	color: black;
}
.cta2 {
	-moz-border-radius: 2px;
	-moz-transition: 0.2s ease-out;
	-ms-transition: 0.2s ease-out;
	-o-transition: 0.2s ease-out;
	-webkit-border-radius: 2px;
	-webkit-transition: 0.2s ease-out;
	background-clip: padding-box;
	border: 2px solid #DEB887;
	border-radius: 2px;
	color: 	white;
	display: inline-block;
	font-family: 'Raleway', sans-serif;
	font-size: 17px;
	font-weight: 400;
	height: 36px;
	letter-spacing: 0.5px;
	line-height: 36px;
	margin-bottom: 15px;
	padding: 0 2rem;
	text-decoration: none;
	text-transform: uppercase;
	transition: 0.2s ease-out;
}
.cta:hover {
	background-color: #DEB887;
	box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	color:white;
	-moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	-webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

<!--isiregistrasi----->


<div class="newsletter">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/2.jpg" data-speed="0.8"></div>

	<div class="container">
	
<div class="col">
						<div class="home_content" style="float: center;">
							<div class="home_title" style="font-size: 60px; text-align: center; font-family: times rowman;" >Registrasi Klinik</div>
							<div class="home_text"  style="font-size: 16px; text-align: center; font-family: times rowman">Registrasikan klinikmu dan berlangganan sekarang!</div>
						</div>
			<section class="signup" >
				<div class="container " id="con1">
					
					<div class="signup-content">
						<div class="signup-form">
							<form action="simpan2.php" method="POST" class="register-form" id="register-form">
								<div class="controls">
									<span><i class="fas fa-building"></i></span>
									<label class="control-label"></label>
									<input class="form-control" type="text" name="nama_klinik"placeholder=" Klinik" style="font-size: 12px;" ><hr>
								</div>
								<div class="controls">
									<span><i class="fas fa-id-card-alt" style="float: center; "> </i></span>
									<label class="control-label"></label>
									<input class="form-control" type="text" name="nama_pemilik"placeholder="Nama Pemilik" style="font-size: 12px;" ><hr>
								</div>
								<div class="controls">
									<span><i class="fas fa-at" style="float: center; "> </i></span>
									<label class="control-label"></label>
									<input class="form-control" type="text" name="email_klinik"placeholder="Email Klinik" style="font-size: 12px;" ><hr>
								</div>
								
								<div class="controls">
									<span><i class="fas fa-qrcode" style="float: center; "> </i></span>
									<label class="control-label"></label>
									<input class="form-control" type="password" name="pass"placeholder="Password" style="font-size: 12px;" ><hr>
								</div>
								<div class="controls">
									<span><i class="fab fa-amazon-pay" style="float: center; "> </i></span>
									<label class="control-label"></label>
									<select class="form-control" name="berlangganan" class="required" style="font-size: 12px;">
										<option disabled="disabled" selected="selected" style="font-size: 12px;">Berlangganan</option>

										<option value="Rp.69.999">Rp.69,999/bulan</option>
										<option value="Rp.124,999">Rp.124,999/2 bulan</option>
										<option value="Rp.399,999">Rp.399,999/6 bulan</option>


									</select> <hr> 
								</div>               

								<div class="controls">
									<span><i class="fas fa-phone" style="float: center; "> </i></span>
									<label class="control-label"></label>

									<input class="form-control" type="text" name="tlp"placeholder="Telepon Klinik" style="font-size: 12px;"  ><hr>
								</div>

								<div class="controls">
									<span><i class="fas fa-address-card" style="float: center; "> </i></span>
									<label class="control-label"></label>

									<input class="form-control" type="text" name="alamat"placeholder="Alamat Klinik

									" style="font-size: 12px;"  ><hr>
								</div>
								<div class="controls">
									<span><i class="fas fa-address-card" style="float: center; "> </i></span>
									<label class="control-label"></label>

								<textarea class="form-control" rows="5" name="jadwal_klinik" placeholder="Jadwal Klinik" style="font-size: 12px;"></textarea><hr>
								</div>



								<div class="form-group">
									<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" onclick="myFunction()" />

									<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>

									<script>
										function myFunction() {
											var checkBox = document.getElementById("agree-term");
											var text = document.getElementById("text");
											if (checkBox.checked == true){
												text.style.display = "block";
											} else {
												text.style.display = "none";
											}
										}
									</script>

								</div>
								<div class="form-group form-button">
									<input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
								</div>
							</form>
						</div>
						<div class="signup-image">
							<figure><img src="images/card2.png" alt="sing up image"></figure>
							<a href="login.php" class="signup-image-link">I am already member</a>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>




<!-- Sign up form -->

</div>
</div>

</div>






<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>
</div>
</div>


<!-- Footer -->

<footer class="footer" id="1">
	<div class="footer_content"  style="background-image: url(images/qq3.jpg); background-size: 100%"  >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 style="text-align: center; color: white; font-family: times rowman; color: darkgrey;">Who Join with Us</h1>
					
				</div>
				<!-- Footer Erha -->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title" style="text-align: center; color: darkgrey;">Erha Klinik</div><hr>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/11.jpg" alt="Avatar" style="width:300px;height:300px;">
								</div>
								<div class="flip-card-back"style="background-image: url(images/Erha1.jpg); color: black" >
									<ul class="opening_hours_list" ><div class="footer_title" style="color: black;">Opening Hours<hr></div>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Senin: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Selasa: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Rabu: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Kamis: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Jumat: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Sabtu: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Footer Airin-->
				
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title" style="text-align: center;color: darkgrey;">Airin Klinik<hr></div>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/16.jpg" alt="Avatar" style="width:300px;height:300px;">
								</div>
								<div class="flip-card-back"style="background-image: url(images/airin1.jpg); color: black">
									<ul class="opening_hours_list" >
										<div class="footer_title" style="color: black">Opening Hours</div><hr>

										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Senin: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Selasa: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Rabu: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Kamis: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Jumat: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Sabtu: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>

									</ul>



								</div>
							</div>
						</div>
					</div>
				</div>
				<!-------natasha----->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title" style="text-align: center; color: darkgrey;">Natasha Klinik</div><hr>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/10.jpg" alt="Avatar" style="width:300px;height:300px;">
								</div>
								<div class="flip-card-back"style="background-image: url(images/8.jpg); color: black" >
									<ul class="opening_hours_list" ><div class="footer_title" style="color: black;">Opening Hours <hr></div>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Senin: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Selasa: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Rabu: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Kamis: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Jumat: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Sabtu: </div>
											<div class="ml-auto">9:00am - 8:00pm</div>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!---------carissa--->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">

						<div class="footer_title" style="text-align: center; color: darkgrey;">Carissa Klinik<hr></div>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/carisa1.jpg" alt="Avatar" style="width:300px;height:300px;">
								</div>
								<div class="flip-card-back"style="background-image: url(images/carisa.jpg); color: black" >
									<ul class="opening_hours_list" ><div class="footer_title" style="color: black;">Opening Hours<hr></div>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Senin: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Selasa: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Rabu: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Kamis: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Jumat: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>
										<li class="d-flex flex-row align-items-start justify-content-start">
											<div><i class="fas fa-calendar-check"></i> Sabtu: </div>
											<div class="ml-auto">10:00am - 6:00pm</div>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<style type="">
			.flip-card {
				background-color: transparent;
				width: 300px;
				height: 300px;
				perspective: 1000px;
			}

			.flip-card-inner {
				position: relative;
				width: 100%;
				height: 100%;
				text-align: center;
				transition: transform 0.6s;
				transform-style: preserve-3d;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			}

			.flip-card:hover .flip-card-inner {
				transform: rotateY(180deg);
			}

			.flip-card-front, .flip-card-back {
				position: absolute;
				width: 100%;
				height: 100%;
				backface-visibility: hidden;
			}

			.flip-card-front {
				background-color: #bbb;
				color: black;
				z-index: 2;
			}

			.flip-card-back {

				background-size: 100%;
				color: white;
				transform: rotateY(180deg);
				z-index: 1;
			}
		</style>

		<!-- Footer Opening Hours -->
	</div>
</div>




</div>
</footer>
<div class="footer_bar" style="background-color: black; text-align: center">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="" style="float: center; text-align: center;">
				<div class="copyright" style="text-align: center; float: center;">
				Copyright by Rina

				</div>

			</div>
		</div>
	</div>
</div>			
</div>
</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/custom.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>

</body>
</html>