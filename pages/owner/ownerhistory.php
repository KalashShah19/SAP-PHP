<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title> History</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include '../../headers/owner/header.php';?>
    <!-- end header section -->

    <section class="contact_section layout_padding">
      <div class="bg-img1">
        <img src="../../images/bg-img-1.png" alt="">
      </div>
      <div class="bg-img2">
        <img src="../../images/bg-img-2.png" alt="">
      </div>
      <div class="container">
        <div class="heading_container">
          <h2>
            History / Past
          </h2>
          <p>
            Flashbacks
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <form action="" method="post">
                <div class="contact_form-container"> <hr> 
                <center>
                  <button formaction="ownerorderrecord.php"> Orders </button> <br>
                  <button formaction="ownerleaverecord.php"> Leaves</button> <br>
                  <button formaction="ownerreviews.php"> Reviews </button> <br>
                  <button formaction="ownerbookingsrecord.php"> Bookings </button> <br>
                  <button formaction="ownercontact.php"> Contact Messages </button> <br>
                  <hr> 
                </center>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

</body>

</html>