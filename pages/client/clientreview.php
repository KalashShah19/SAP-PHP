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

  <title> Shah Abhay PhotoGraphy | Feedback </title>


   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />

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
    <?php include '../../headers/client/header.php'; ?>
    <!-- end header section -->
  </div>

  <!-- Registration section -->

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
          Give Review
        </h2>
        <p>
          Let us know, what You think about Us and Our Works
        </p>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form method="POST">
              <div class="contact_form-container">
                <div>
                <?php if(isset($_SESSION['message'])) { ?>
                <div id="msg" style="background-color: cyan; color: black">
                <br> <h5 style="text-align:center;">
                  <?php echo $_SESSION['message'];
                  unset($_SESSION['message']); ?>  
                  </h5> 
                  <br> 
                </div>
                <br>
              <?php } ?>  
                  <div>
                    <label> Subject : </label>
                    <input type="text" name="sub">
                  </div>
                  <div>
                    <label> Stars/Rating : (Out of 5)</label>
                    <input type="number" name="rating" step="0.01" min="1" max="5">
                  </div>
                  
                  <div>
                    <label> Your Experience : </label>
                    <input type="text" name="exp">
                  </div>
                  <div class=" d-flex justify-content-center ">
                    <button type="submit" name="submit">
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


  <!-- Backend -->
  <?php
  if(isset($_POST['submit'])) {
    $sub=$_POST['sub'];
    $exp=$_POST['exp'];
    $rating=$_POST['rating'];
    $uid=$_SESSION['uid'];
    include '../../conn.php';
    $sql="INSERT INTO `reviews`( `uid`, `subject`, `experience`, `rating`) VALUES ('$uid','$sub','$exp','$rating')";
    mysqli_query($db, $sql);
    $_SESSION['message']="Your Review Has Been Submitted Successfully! Thank You.";
    echo "<script type='text/javascript'>document.location.href='clientreview.php';</script>";
  }
  ?>  

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

</body>

</html>