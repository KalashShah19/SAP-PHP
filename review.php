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

  <title> Shah Abhay PhotoGraphy | Feedback </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
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
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="register.php"> Register <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="login.php"> Login <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.php"> About </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="portfolio.php"> Portfolio </a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="review.php"> Review </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php"> Contact Us</a>
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
  </div>

  <!-- Registration section -->

  <section class="contact_section layout_padding">
    <div class="bg-img1">
      <img src="images/bg-img-1.png" alt="">
    </div>
    <div class="bg-img2">
      <img src="images/bg-img-2.png" alt="">
    </div>
    <div class="container">
      <div class="heading_container">
        <h2>
          Feedback / Review
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form action="" method="post">
              <div class="contact_form-container">
                <div>
                  <div>
                    <label> Subject : </label>
                    <input type="text" name="sub">
                  </div>
                  <div>
                    <label> Your Experience : </label>
                    <input type="text" name="exp">
                  </div>
                  <div class=" d-flex justify-content-center ">
                    <button type="submit">
                      Submit
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



<?php 
    set_include_path("classes/");
    include 'footer.php';
?>
<!-- Backend -->
<?php
  $sub=$_POST['sub'];
  $exp=$_POST['exp'];

?>  
</body>

</html>