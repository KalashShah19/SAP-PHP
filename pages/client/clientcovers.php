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

  <title> Shah Abhay PhotoGraphy | Album Covers </title>


  <!-- bootstrap core css -->
 <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="../../css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <?php include '../../headers/client/header.php';?>
    <!-- end header section -->

    <section class="portfolio_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Album Covers
          </h2>
          <p>
            Choose Exactly how will Your Album Looks Like.
          </p>
        </div>
        <form method="POST">
      <div class="info_container">
        <div class="covslidershow covmiddle">
          <div class="covslides">
            <input type="radio" name="r" value="1" id="r1">
            <input type="radio" name="r" value="2" id="r2">
            <input type="radio" name="r" value="3" id="r3">
            <input type="radio" name="r" value="4" id="r4">
            <input type="radio" name="r" value="5" id="r5">
            <div class="covslide s1">
              <img src="../../images/cover1.jpg" alt="First">
            </div>
            <div class="covslide">
              <img src="../../images/cover2.jpg" alt="Second">
            </div>
            <div class="covslide">
              <img src="../../images/cover3.jpg" alt="Third">
            </div>
            <div class="covslide">
              <img src="../../images/cover4.jpg" alt="Fourth">
            </div>
            <div class="covslide">
              <img src="../../images/cover5.jpg" alt="Fifth">
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
  </div>
    <div class=" d-flex justify-content-center ">
      <button type="submit" name="select" style="background-color: #0fcfdc;"> Select </a> 
    </div>
  </form>
</section>


<?php
  if(isset($_POST['select'])){
    echo "<script>document.location.href='clientinfo.php?pid=9';</script>";
  }
?>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

</body>

</html>