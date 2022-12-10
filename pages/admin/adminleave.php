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

  <title> Shah Abhay PhotoGraphy | Apply Leave </title>


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
    <?php include '../../headers/admin/header.php';?>
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
            Apply Leave
          </h2>
          <p>
            Make a Request for Leave
          </p>
        </div>
        <div class="">
          <div class="book">
            <div class="row">
              <div class="col-md-8 mx-auto">
                <form action="" method="post">
                  <div class="contact_form-container">
                  <div> 
                  <label for="start"> Start Date </label>
                  <input type="date" name="start" id="start">  
                  
                  <br> <br>
                  <label for="end"> End Date </label>
                  <input type="date" name="end" id="end">
                  <br> <br>
                  <label for="personalized event"> Reason </label>
                </div>

                  <input type="text" name="personalized event" id="personalized event"  class="book"> <br> <br>
                  <p style="font-size: small;"> *Remember That there are only Few Paid Leaves, Rejected leave won't Count. </p>
                  <div class=" d-flex justify-content-center ">
                    <button type="submit">
                      Apply
                    </button>
                </div>
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