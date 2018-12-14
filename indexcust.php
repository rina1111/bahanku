<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
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
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/book-project-css.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
      WebFont.load({
        google: {
          families: ["PT Sans:400,400italic,700,700italic"]
        }
      });
    </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="styles/loginsignup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
					<div style="color: #556B2F">Make An Appointment <span style="color: #556B2F"> with your favorite clinic!</span></div><hr>
					
				</a>
			</div>

			<!-- Main Navigation -->
			<div class="topnav" id="myTopnav">
				<nav class="main_nav" style="color: black    ">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li class="active" ><a href="index.php">Home</a></li>




<li><a href="about.php">About Us</a></li>
<li><a href="datadokter.html">Jadwal Dokter</a></li>
<li><a href="Klinik.html">Klinik</a></li>

<li><a href="Appointment.php">Appointment</a></li>

<li ><div class="Login">
							<button onclick="myFunction2()" class="dropbtn" style="font-size: 15px;
							font-weight: 600;
							">MyProfile</button>
							<div id="Dropdown" class="dropdown-content2" style="color: #57ccc3">
								<a href="myprofile.php">Back MyProfile</a>
								

								<a href="login.php">Logout</a>
								


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

<!-- Menu -->



	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/qq5.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content" style="float: right;">
										<div class="home_subtitle" style="color:  #5F9EA0"># MediSkin Appointment</div>
										<div class="home_title"style="color: #556B2F">We help You to be Beauty</div>
										<div class="home_text">
											<p class="information">"Cantik dengan mudah tanpa ribet antri di klinik kecantikan kesayanganmu!."</p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											<div class="button button_1 trans_200"><a href="#">read more</a></div>
											<div class="button button_2 trans_200"><a href="#">make an appointment</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/qq8.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content" style="float: right">
										<div class="home_subtitle"></div>
										<div class="home_title"></div>
										<div class="home_text">
											<p></p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/qq7.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_subtitle"></div>
										<div class="home_title"></div>
										<div class="home_text">
											<p></p>
										</div>
										<div class="home_buttons d-flex flex-row align-items-center justify-content-start">
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-start">
					<li class="home_slider_custom_dot trans_200 active"></li>
					<li class="home_slider_custom_dot trans_200"></li>
					<li class="home_slider_custom_dot trans_200"></li>
				</ul>
			</div>

		</div>
	</div>

	<!-- Intro -->

	<div class="intro" style="background-color: transparent;">
		<div class="container" >
			<div class="row">

				<!-- Intro Content -->
				<div class="col-lg-6 intro_col">
					<div class="intro_content">
						<div class="section_title_container">
					<div class="scene">
    <div class="book-wrap">
      <div class="left-side">
        <div class="book-cover-left"></div>
        <div class="layer1">
          <div class="page-left"></div>
        </div>
        <div class="layer2">
          <div class="page-left"></div>
        </div>
        <div class="layer3">
          <div class="page-left"></div>
        </div>
        <div class="layer4">
          <div class="page-left"></div>
        </div>
        <div class="layer-text">
          <div class="page-left-2">
            <div class="corner"></div>
            <div class="corner2"></div>
            <div class="corner-fold"></div>
            <div class="page-text w-richtext">
              <h3><strong>MediSkin Appointment</strong></h3>
             
              <p>‍</p>
              <p>MediSkin Appointement adalah website yang mempermudah Appointment untuk para </p>
              <p>customer yang ingin melakukan appointment tanpa antri di Klinik Kecantikan</p>
              <p>yang bergabung dengan kami.</p>
              <p>Dan Klinik kecantikan yang ingin bergabung dengan kami, dapa melakukan "Registrasi Klinik "</p>
              <p>Hanya dengan berlangganan Rp. 69,999/bulan, Klinik kamu bisa jadi member dan,</p>
              <p>dapatkan keuntungan menarik customer lebih mudah.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="center"></div>
      <div class="right-side">
        <div class="book-cover-right"></div>
        <div class="layer1">
          <div class="page-right"></div>
        </div>
        <div class="layer2 right">
          <div class="page-right"></div>
        </div>
        <div class="layer3 right">
          <div class="page-right"></div>
        </div>
        <div class="layer4 right">
          <div class="page-right"></div>
        </div>
        <div class="layer-text right">
          <div class="page-right-2">
            <div class="page-text w-richtext">
              <h3><strong>Welcome to MediSkin Appointment</strong></h3>
             
              <p>‍</p>
              <p>Mau perawatan? Tapi malas antri karna penuh saat akan daftar antrian? Saatnya Kamu beralih menggunakan Website Kami! permudah untuk melakukan Appointment dengan Klinik Kecantikan ternama! Cantik itu mudahkan? </p>
              <p></p>
              <p>‍</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" intergrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
				<link rel="stylesheet" type="text/css" href="css/book.css">		
							
						</div>
					</div>
				</div>

				<!-- Intro Form -->
				<div class="col-lg-6 intro_col">
					<div class="intro_form_container">
						<div class="intro_form_title" >Make an Appointment</div>
						<form action="#" class="intro_form" id="intro_form">
							<div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
								<input type="text" class="intro_input" placeholder="Nama Lengkap" required="required">
								<input type="email" class="intro_input" placeholder="E-mail" required="required">
								<input type="tel" class="intro_input" placeholder="Telepon" required="required">
								<select class="intro_select intro_input" required>
									<option disabled="" selected="" value="">Klinik Kecantikan</option>
									<option>Erha Klinik</option>
									<option>Natasha Klinik</option>
									<option>Airin Klinik</option>
									<option>Carissa Klinik</option>
									
								</select>
								<select class="intro_select intro_input" required="required">
										<option disabled="" selected="" value="">Doctor</option>
										<option>dr. Erna SpKk</option>
										<option>Doctor 2</option>
										<option>Doctor 3</option>
										<option>Doctor 4</option>
										<option>Doctor 5</option>
									</select>

								<select class="intro_select intro_input" required="required">
										<option disabled="" selected="" value="">Jadwal Dokter</option>
										<option>Senin, 09.15-09.30</option>
										<option>Doctor 2</option>
										<option>Doctor 3</option>
										<option>Doctor 4</option>
										<option>Doctor 5</option>
									</select>
								<input type="text" id="datepicker" class="intro_input datepicker" placeholder="Tanggal Appointment" required="required">
							</div>
							<button class="button button_1 intro_button trans_200">make an appointment</button><hr>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="why" style="background-image: url(images/1.jpg);">
		<!-- <div class="background_image" style="background-image:url(images/why.jpg)"></div> -->
		<div class="container">

			
				<!-- Why Choose Us Content -->
				<link rel="stylesheet" type="text/css" href="css/style2.css">
				 <div class="timeline">
  <div class="year">
    <div class="inner"><hr>
      <span class=>Mengapa Menggunakan Website Kami?</span><hr>
    </div>
  </div>
  
  <ul class="days">
    <li class="day">
      <div class="events">
        
        <div class="date">Akses Penggunaan Yang Mudah</div>
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <p>Males Antri langsung di Klinik Kecantikan? Saatnya Kamu gunakan website Kami! Hanya dengan Registrasi kamu sudah bisa melakukan Appointment!</p>
        
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <div class="day__img">
          <img src="images/akses.jpg" alt=""  style="width: 600px; height: 300px;"/>
          <p class="caption">
          Akses Penggunaan Mudah
          </p>
        </div>
        
      </div>
    </li>
    
    <li class="day">
      <div class="events">
       
        <div class="date">Appointment Klinik Kecantikan Terbaik</div>
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <p>Temukan dan lakukan Appointment dengan Klinik Kecantikan Terbaik yang bergabung dengan Kami!</p>
       
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <div class="day__img">
          <img src="images/bb.jpg" alt="" style="width: 600px; height: 300px;" />
          <p class="caption">
            Appointment Klinik Kecantikan Terbaik
          </p>
        </div>
      </div>
    </li>
<li class="day">
      <div class="events">
        
        <div class="date">Join With Us</div>
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <p>   Klinikmu ingin bergabung dengan kami? klik "Registrasi klinik" sekarang juga!</p>
        
      </div>
    </li>
    
    <li class="day">
      <div class="events">
        <div class="day__img">
          <img src="images/joo.jpg" alt=""  style="width: 600px; height: 300px;" />
          <p class="caption">
          Join With Us
          </p>
        </div>
        
      </div>
    </li>
    



  </ul>


  
  <div class="year year--end">
    <div class="inner">
      <span></span>
    </div>
  </div>
</div>
  </div>
</div>


	

	<!-- join us-->

	

	<div class="footer_content"  style="background-image: url(images/qq3.jpg); background-size: 100%"  >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 style="text-align: center; color: white; font-family: times rowman;color: darkgrey;">Who Join with Us</h1>
					
				</div>
				<!-- Footer Erha -->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title" style="text-align: center;color: darkgrey;">Erha Klinik</div><hr>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/11.jpg" alt="Avatar" style="width:300px;height:300px;">
									<i class="fas fa-map-marker" style="font-size: 12px; color: black; margin-right:4px; border-style: double; border-color:grey	; background-color: white; text-align: center;">Jl. Supratman No.84, Cihaur Geulis, Cibeunying Kaler, Kota Bandung, Jawa Barat 40122</i>	
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
									<i class="fas fa-map-marker" style="font-size: 12px; color: black; margin-right:4px; border-style: double; border-color: lightpink; background-color: white; text-align: center;"> Jl. Sederhana No.53, Pasteur, Sukajadi, Kota Bandung, Jawa Barat 40161</i>	
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
						<div class="footer_title" style="text-align: center;color: darkgrey;">Natasha Klinik</div><hr>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/10.jpg" alt="Avatar" style="width:300px;height:300px;">
									<i class="fas fa-map-marker" style="font-size: 12px; color: black; margin-right:4px; border-style: double; border-color: lightgrey; background-color: white; text-align: center;"> Jl. Raya Banjaran No.505, Sukasari, Pameungpeuk, Bandung, Jawa Barat 40376</i>	
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

						<div class="footer_title" style="text-align: center;color: darkgrey;">Carissa Klinik<hr>
					</div>
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="images/carisaku.jpg" alt="Avatar" style="width:300px;height:300px;">
									<i class="fas fa-map-marker" style="font-size: 12px; color: black; margin-right:4px; border-style: double; border-color: lightblue; background-color: white; text-align: center;"> Jl. Soekarno-Hatta No.575, Gumuruh, Batununggal, Kota Bandung, Jawa Barat 40275</i>	
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


	

	<!-- Footer -->

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
<script src="js/style3.js"></script>
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