<!DOCTYPE html>
<html>
  <script>
    var path = window.location.pathname;
    var page = path.split("/").pop();
</script>
<?php
  $page="<script> document.write(page) </script>";
?>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title> Shah Abhay PhotoGraphy </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-11 offset-lg-1">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="userhome.php">
                <img src="../images/logo.jpg" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item">
                      <a class="nav-link" href="userhome.php"> Dash Board <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="bestpics.php"> Best Pics <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="covers.php"> Album Covers <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="preview.php"> Album Preview </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="folders.php"> Media Folders  </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="custome.php"> Customized Products </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../index.php"> Log Out </a>
                    </li>
                  </ul>
                </div>

                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    
    <!-- end header section -->
    <section class="portfolio_section layout_padding">
      <div class="container">
        <div class="info_container">
          <div class="covslidershow covmiddle">
            <div class="covslides">
              <input type="radio" name="r" id="r1">
              <input type="radio" name="r" id="r2">
              <input type="radio" name="r" id="r3">
              <input type="radio" name="r" id="r4">
              <input type="radio" name="r" id="r5">
              <div class="covslide s1">
                <img src="../images/cover1.jpg" alt="First">
              </div>
              <div class="covslide">
                <img src="../images/cover2.jpg" alt="Second">
              </div>
              <div class="covslide">
                <img src="../images/cover3.jpg" alt="Third">
              </div>
              <div class="covslide">
                <img src="../images/cover4.jpg" alt="Fourth">
              </div>
              <div class="covslide">
                <img src="../images/cover5.jpg" alt="Fifth">
              </div>
            </div>
          </div>
          <div class="covnavigation">
            <label for="r1" class="covbar"> 1 </label>
            <label for="r2" class="covbar"> 2 </label>
            <label for="r3" class="covbar"> 3 </label>
            <label for="r4" class="covbar"> 4 </label>
            <label for="r5" class="covbar"> 5 </label>
          </div>
        </div>
      </div>
    </section>
          
    <?php
       set_include_path("../classes/");
       include 'userfooter.php';
    ?>
</body>

</html>
