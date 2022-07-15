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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
                    <li class="nav-item ">
                      <a class="nav-link" href="covers.php"> Album Covers <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
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
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->

    

    <?php
       set_include_path("../classes/");
       include 'userfooter.php';
    ?>
</body>

</html>