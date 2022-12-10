<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <script>
        var path = window.location.pathname;
        var page = path.split("/").pop();
        
    </script>
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

  <title> Shah Abhay PhotoGraphy | Leave Requests </title>


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
            Leave Requests
          </h2>
          <p>
            Checkout Your leaves Leaves 
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact_form-container"> <hr> 
                  <p> Start Date : 12/08/2022 <p> 
                  <p> Start Date : 15/08/2022 <p>  
                  <p> Reason : Relatives Marriage </p>   
                  <p> Status : Rejected </p> 
                  <hr> <br>

                  <p> Start Date : 02/08/2022 <p> 
                  <p> Start Date : 03/08/2022 <p>  
                  <p> Reason : Driving Test </p>   
                  <p> Status : Approved </p> 
                  <hr> <br>

                  <p> Start Date : 21/07/2022 <p> 
                  <p> Start Date : 22/07/2022 <p>  
                  <p> Reason : Doctor's Appointment </p>   
                  <p> Status : Approved </p> 
                  <hr> <br>
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