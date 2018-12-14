

<?php
include 'koneksi.php';
session_start();
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyClinic</title>
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



<body style="background-image: url(images/1.jpg) ; width:100%">


  
  <!-- Header -->

  <header class="header trans_400">
    <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

      <!-- Logo -->
      <div class="logo">
        <a href="#">
          <div style="color: #5F9EA0  ">MediSkin<span style="color:#BDB76B ">Appointment</span></div><hr>
          <div style="color: #556B2F; font-size: 14px;">Make An Appointment <span style="color: #556B2F"> with your favorite clinic!</span></div><hr>
          
        </a>
      </div>

      <!-- Main Navigation -->
      <div class="topnav" id="myTopnav">
        <nav class="main_nav" style="color: black    ">
          <ul class="d-flex flex-row align-items-center justify-content-start">
            <li ><a href="index_clinic.php"><i class="fas fa-reply-all" style="font-size: 24px; color: #556B2F"></i></a></li>
<li class="active"><a href="myclinic.html">My Clinic</a></li>
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
</div>
</header>
<!-------------------------------------->
<hr>
<br>
<br>
<br>


<!--------php------>

<div class="container bootstrap snippet">
    <div class="row">
      
      <div class="col-sm-2"><a href="/users" class="pull-right"><img title="" " src=""></a></div>
    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->
      <div class="text-center">
<form method="post">
 
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar" alt="avatar" style="border-radius: 5px; border-style: double;">
        <h6>Upload a photo clinic.</h6>
        <input type="file" name="foto" class="text-center center-block file-upload">
        <button class="btn btn-primary" name="save">simpan</button>
      </div></hr><br>
  </form> 




  <?php
 if (isset($_POST['save']))

{
  
    $foto=$_FILES['foto']['name'];
    $lokasi=$_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../images/".$foto);
    
echo "<meta http-equiv='refresh' content='1;url=myclinic.php?halaman=myclinic'>";


}
?>


        
          <div class="panel panel-default">
            <div class="panel-heading">Clinic of Member<i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="index.html">MediSkin</a></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity</i></li>
            
            <li class="list-group-item text-left"><a href="dataapointment.html" style="font-size: 12px;">Data Appointment</a></li>
            <li class="list-group-item text-left"><a href="datadokter.html" style="font-size: 12px;">Data Dokter</a></li>
           
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
              <i class="fab fa-facebook fa-2x"></i> </i> <i class="fab fa-twitter fa-2x"></i> <i class="fab fa-instagram fa-2x"></i> </i>
            </div>
          </div>
          
        </div><!--/col-3-->
      <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active" style="font-size:12px; font-family: times rowman; "><a href="myclinic.html">Data klinik</a></li>
                 <li class="" style="font-size:12px; font-family: times rowman; "> <a href="inputjadwal.html">Input Jadwal Dokter</a></li>
                 <li class=""style="font-size:12px; font-family: times rowman; "><a href="logout2.php">Logout</a></li>
               
              </ul>
              <!--------php------>
<?php
 if (isset($_SESSION['email'])){ 
  ?>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" method="post" id="registrationForm">
                    
                    <div class="form-group">
                          
                          <div class="col-xs-6">
                            

                         <span class="form-control" style="background-color: lightblue  ;"><?php echo $_SESSION["klinik"];?></span>
                              
                               
                              
                              
                             
                          </div>
                      </div>



                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            


                            <span class="form-control" style="background-color: lightblue;"><?php echo $_SESSION["email"];?></span>
                              
                               
                              
                              
                             
                          </div>
                      </div>
          



                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            


                            <span class="form-control" style="background-color: lightblue;"><?php echo $_SESSION["telepon"];?></span>
                              
                               
                              
                              
                             
                          </div>
                      </div>
          
                    
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <span class="form-control" style="background-color: lightblue;"><?php echo $_SESSION["alamat"];?></span>
                            
                          </div>
                      </div>
                     <div class="form-group">
                          <div class="col-xs-6">
                             <textarea rows="5" class="form-control" style="background-color: lightblue;"><?php echo $_SESSION["jadwal_klinik"];?></textarea>
                            
                          </div>
                      </div>
                     
              
              <hr>
            
             
              </div><!--/tab-pane-->
             <?php }?>
               
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    <script type="text/javascript">
      $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
    </script>


</body>
</html>