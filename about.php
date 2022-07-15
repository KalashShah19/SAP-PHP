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
                      <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="about.php"> About </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="portfolio.php"> Portfolio </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="review.php"> Review </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact Us</a>
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

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          About Studio
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/about-img.jpg" alt="">
          <div class="about_img-bg">
            <img src="images/about-img-bg.png" alt="">
          </div>
        </div>
        <div class="detail-box">
          <p>
            We specialize in wedding photography, corporate, family and senior portraits, often traveling to your destination to capture the perfect moment in the perfect place. We will be there with you every step of the way to guarantee your special moments are captured for lifetime.

To us photography is about people being real and then letting us paint a picture of that moment to remember it forever. This is the story that matters most: real people, real stories, real moments.

We are incredibly blessed to have a team of photographers who work with us to make unforgettable memories. Please take a few minutes to get to know us.

We would love to talk with you by phone or in person and discuss about your wedding, event, portrait session or video project. Please reach out to us through the Contact Page. Thank You.
          </p> <br> 
          <div>
            <h2 style="color: blue;"> Location on Map :- </h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.87657106531825!2d72.92896391998254!3d20.951505653133736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0f7b94f4bec97%3A0x3f81d0fd5e51647e!2sG-704%2C%20Dudhiya%20Talav%2C%20Asha%20Nagar%2C%20Navsari%2C%20Gujarat%20396445!5e0!3m2!1sen!2sin!4v1656001328928!5m2!1sen!2sin" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- end about section -->

  <?php 
    set_include_path("classes/");
    include 'footer.php';
  ?>
  </body>
  </html>