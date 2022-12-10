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

  <title> Shah Abhay PhotoGraphy | Video Highlights</title>


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
    <?php include '../../headers/client/header.php';?>
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
            Highlights Short Film
          </h2>
          <p>
            Get a Glimpse of Your Wedding
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <form action="clientcart.php" method="post">
                <div class="contact_form-container">
                  <iframe width="750" height="400" src="https://www.youtube.com/embed/1wKaSofErXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="d-flex justify-content-center">
                    <button type="submit"> Add to Cart</button>
                  </div>
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