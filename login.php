<?php
include 'koneksi.php';
session_start();
 


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Customer</title>
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
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="styles/loginsignup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


</head>



<body style="background-image: url(images/1.jpg) ; width:100%">


	
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
						<li ><a href="index.html">Home</a></li>


						<li ><div class="Registrasi">
							<button onclick="myFunction()" class="dropbtn" style="font-size: 15px;
							font-weight: 600;
							">Registrasi</button>
							<div id="myDropdown" class="dropdown-content" style="color: #57ccc3">
								<a href="registrasi Customer.html">Registrasi Customer</a>
								<a href="registrasi_clinic.html">Registrasi Clinic</a>


							</div>
						</div></li>
						<li class="active"><a href="login.html">Login Customer</a></li>








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
function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
	if (!event.target.matches('.dropbtn')) {

		var dropdowns = document.getElementsByClassName("dropdown-content2");
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



<li><a href="about.html">About Us</a></li>
<li><a href="contact.html">Appointment</a></li>
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



<!--isiregistrasi----->


<div class="newsletter">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="" data-speed="0.8"></div>
	<div class="container">
		<div class="row">

			<section class="sign-in">
				<div class="container">
					<div class="signin-content">
						<div class="signin-image">
							<figure><img src="images/id.png" alt="sing up image"></figure>
							<a href="registrasi customer.html" class="signup-image-link">Create an account</a>
						</div>

						<div class="signin-form" >
							<h2 class="form-title">Login Customer</h2>
							<form method="post" class="register-form" id="login-form">
								<div class="form-group">
									<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
									<input type="text" name="email" id="Email" placeholder="Email"/>
								</div>
								<div class="form-group">
									<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
									<input type="password" name="password" id="your_pass" placeholder="Password"/>
								</div>
								<div class="form-group">
									<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
									<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
								</div>
								<div class="form-group form-button">
									<input type="submit" name="login" id="signin" class="form-submit" value="Log in"/>
								</div>
							</form>

						</div>
					</div>
				</div>
			</section>
			
			<?php

								 if (isset($_POST['login']))
                                    {
                                     $ambil=$koneksi->query ("SELECT * FROM data_user WHERE email='$_POST[email]' AND password='$_POST[password]'");
                                      $cocok=$ambil->num_rows;
                                      if($cocok==1)
                                      {
                                      	
                                        $akun=$ambil->fetch_assoc();
                                        $_SESSION['email']=$akun['email'];
                                         $_SESSION['nama_user']=$akun['nama_user'];
                                          $_SESSION['username']=$akun['username'];
                                          $_SESSION['gender']=$akun['gender'];
                                           $_SESSION['umur']=$akun['umur'];
                                            $_SESSION['telepon']=$akun['telepon'];
                                          $_SESSION['alamat']=$akun['alamat'];
                                         
                                         
                                         
                                       echo"<script>alert('Anda berhasil Login');</script>";
                                       echo "<meta http-equiv='refresh'content='1;url=myprofile.php'>";

                                      }
                                      else{
                                         echo"<script>alert('Anda gagal login, periksa kembali akun anda');</script>";
                                       echo "<meta http-equiv='refresh'content='1;url=login.php'>";
                                      }

                                    }
                                    ?>

 

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
<div class="row newsletter_row">
	<div class="col-lg-8 offset-lg-2">

	</div>
</div>
</div>
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
				<div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start" style="float: center; text-align: center;">
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