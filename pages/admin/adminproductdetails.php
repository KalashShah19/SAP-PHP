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

  <title> Shah Abhay PhotoGraphy | Order Details </title>


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
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-11 offset-lg-1">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.php">
                <img src="images/logo.jpg" alt="">
              </a>
            </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="adminbooking.php"> Booking Requests <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="adminorders.php"> Product Orders <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="adminleave.php"> Apply Leave <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="adminleaverequests.php"> Leave Requests <span class="sr-only">(current)</span></a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php"> Log Out </a>
                  </li>
                </ul>
              </div>


              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
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
            Order Details
          </h2>
          <p>
            Refer the Order Details for Customized Products 
          </p>
        </div>
        <center>
          
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact_form-container"> <hr> 
                  <form action="adminbooking.php" method="post"> 
                    <h3> Name : Varshal Patel </h3>
                    <p> Order : Frame <p> 
                    <p> Size : Medium <p> 
                    <p> Color : Blue <p>  
                    <img src="../../products/frame.jfif" width="150px">
                    <button type="submit"> Delivered </button>
                    <hr> <br>        
                    </form>
                    </div>
              </div>
            </div>
          </div>
        </center>
        </div>
      </section>
  
  

  <!-- info section -->
  <?php
    include 'footer.php';
  ?>
  <!-- footer section -->

  
</body>

</html>