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

  <title> Shah Abhay PhotoGraphy </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 offset-lg-1">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.php">
                <img src="../../images/logo.jpg" alt="" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav">
                    <li  id="index" class="nav-item">
                        <a class="nav-link" id="ind" href="../../index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="register">
                        <a class="nav-link" id="reg" href="register.php">Register <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="login">
                        <a class="nav-link"  id="log" href="login.php">Login </a>
                    </li>
                    <li class="nav-item" id="about">
                        <a class="nav-link"  id="ab" href="about.php"> About </a>
                    </li>
                    <li class="nav-item" id="portfolio">
                        <a class="nav-link"  id="port" href="portfolio.php"> Portfolio </a>
                    </li>
                    <li class="nav-item" id="feedbacks">
                        <a class="nav-link"  id="feed" href="feedbacks.php"> Feedbacks </a>
                    </li>
                    <li class="nav-item" id="contact">
                        <a class="nav-link"  id="cont" href="contact.php">Contact Us</a>
                    </li>
                    </ul>
                </div>

                </div>
            </nav>
            </div>
        </div>
        </div>
</header>
<script>
    var path = window.location.pathname;
    var page = path.split("/").pop();
    // alert(page);

    if(page=="index.php") {
        document.getElementById("index").className = "nav-item active";
        document.getElementById("ind").href = "index.php";
        document.getElementById("logo").src="images/logo.jpg";
        document.getElementById("ind").href="index.php";
        document.getElementById("log").href="pages/visitor/login.php";
        document.getElementById("reg").href="pages/visitor/register.php";
        document.getElementById("ab").href="pages/visitor/about.php";
        document.getElementById("port").href="pages/visitor/portfolio.php";
        document.getElementById("feed").href="pages/visitor/feedbacks.php";
        document.getElementById("cont").href="pages/visitor/contact.php";
    }
    if(page=="register.php") {
        document.getElementById("register").className = "nav-item active";

    }
    if(page=="login.php") {
        document.getElementById("login").className = "nav-item active";
    }
    if(page=="about.php") {
        document.getElementById("about").className = "nav-item active";
    }
    if(page=="portfolio.php") {
        document.getElementById("portfolio").className = "nav-item active";
    }
    if(page=="feedbacks.php") {
        document.getElementById("feedbacks").className = "nav-item active";
    }
    if(page=="contact.php") {
        document.getElementById("contact").className = "nav-item active";
    }
</script>    <!-- end header section -->

    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1 ">
                  <div class="detail_box">
                    <h1><p style="color:blue;"> Shah Abhay PhotoGraphy </p>
                    </h1>
                    <p>
                      We are here for you since 1986,
                          to Offer The Most Affordable Packages with Leading Experience in the Field.
                    </p>
                    <div class="btn-box">
                      <a href="pages/visitor/about.php" class="btn-1">
                        About Us 
                      </a>
                      <a href="pages/visitor/portfolio.php" class="btn-2">
                        <small>Our Works </small>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 px-0">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail_box">
                    <h1>
                      <h1><p style="color:blue;"> Shah Abhay PhotoGraphy </p>
                    </h1>
                    <p>
                      We are here for you since 1986,
                          to Offer The Most Affordable Packages with Leading Experience in the Field.
                    </p>
                    <div class="btn-box">
                      <a href="pages/visitor/about.php" class="btn-1">
                        About Us
                      </a>
                      <a href="" class="btn-2">
                        <small>Get A Quotation</small>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 px-0">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail_box">
                    <h1><p style="color:blue;"> Shah Abhay PhotoGraphy </p>
                    </h1>
                    <p>
                      We are here for you since 1986,
                          to Offer The Most Affordable Packages with Leading Experience in the Field.
                    </p>
                    <div class="btn-box">
                      <a href="pages/visitor/about.php" class="btn-1">
                        About Us
                      </a>
                      <a href="" class="btn-2">
                        <small>Get A Quotation</small>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 px-0">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- achieve section -->

  <section class="achieve_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          ACHIEVEMENTS
        </h2>
        <p>
          Have a Look on what Shalimar Has Achieved in it's years of Servies and Dedication.
        </p>
      </div>
      <div class="achieve_container">
        <div class="box">
          <div class="img-box">
            <img src="images/a-1.png" alt="">
          </div>
          <div class="detail-box">
            <h2>
              4500+
            </h2>
            <h6>
              Events
            </h6>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/a-2.png" alt="">
          </div>
          <div class="detail-box">
            <h2>
              5000+
            </h2>
            <h6>
              Happy Customers
            </h6>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/a-3.png" alt="">
          </div>
          <div class="detail-box">
            <h2>
              50+
            </h2>
            <h6>
              Awards
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end achieve section -->

  <!-- client section -->

   <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial / Reviews
        </h2>
        <p>
          From our Happy Customers
        </p>
      </div>
      <div class="layout_padding2-top">
        <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
          <div class="row">
            <div class="col-md-3">
              <div class="btn_container">
                <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-md-9 col-lg-8">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="detail-box">
                    <h4>
                      Smit Shah
                    </h4>
                    <p>
                      We Recently did Pre-Wedding Shoot with Shah Abhay PhotoGraphy, and it turned out to be Amazing. The Poses and Pictures were Just Awsome.
                      And The Final Video Edits and Effects were Stunning.
                    </p>
                  </div>
                </div>
                <div class="carousel-item ">
                  <div class="detail-box">
                    <h4>
                      Aamena Shaikh
                    </h4>
                    <p>
                      I tried my Portfolio Shoot with Shah Abhay PhotoGraphy, and the results were just Satisfying. The Trial turned out to be Awesome.
                    </p>
                  </div>
                </div>
                <div class="carousel-item ">
                  <div class="detail-box">
                    <h4>
                      Nishtha Tandel
                    </h4>
                    <p>
                      My parents booked Shah Abhay PhotoGraphy for the Shoot of my Birthday. The Highlights and Portrait Photos were just Terrifying, I loved them all. 
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- end client section -->

  <!-- info section -->
  <?php include 'footers/footer.php'; ?>

<script>
    var path = window.location.pathname;
    var page = path.split("/").pop();
    // alert(page);

    if(page=="index.php") {
        document.getElementById("yt").src="images/youtube.png";
        document.getElementById("insta").src="images/instagram.png";
        document.getElementById("fb").src="images/fb.png";
        document.getElementById("jq").src="js/jquery-3.4.1.min.js";
        document.getElementById("boot").src="js/bootstrap.js";
    }
   
</script>  <!-- footer section -->


  <script> 
    var path = window.location.pathname;
    var page = path.split("/").pop();
    if(page!="index.php") 
      document.location.href="index.php";
  </script>

</html>