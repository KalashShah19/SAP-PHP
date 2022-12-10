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

  <title> Shah Abhay PhotoGraphy | Portfolio </title>


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
  <?php include '../../headers/visitor/header.php'; ?>
  <!-- end header section -->
  </div>

  <!-- portfolio section -->

  <section class="portfolio_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          The Portfolio
        </h2>
        <p>
          Our Works 
        </p>
      </div>
      <center>
        <form method="POST">
          <label> Search : </label>
          <select name="search">
            <option value=""> Select </option>
            <option value="prewedding/"> Pre Wedding </option>
            <optgroup label="Wedding">
                <option value="haldi/"> Haldi </option>
                <option value="mehndi/"> Mehndi </option>
                <option value="vidai/"> Vidai </option>
                <option value="phera/"> Phera </option>
                <option value="mandap muhrat/"> Mandap Muhrat </option>
                <option value="kanku/"> Kanku </option>
            </optgroup>
                <option value="anniversary"> Anniversary </option>
                <option value="birthday/"> Birthday </option>
                <option value="opening"> Inogration/Opening </option>
                <option value="vastu poojan"> Vastu Poojan </option>
                <option value="party"> Party </option>
                <option value="competetion"> Competetion </option>
                <option value="school function"> School Function </option>
                <option value="corperate"> Corperate </option>
                <option value="portfolio shoot"> Portfolio Shoot </option>
                <option value="festival shoot"> Festival Shoot </option>
                <option value="concert"> Music / Concert / Opera  </option>
                <option value="sports tournament"> Sports Tournament </option>
                <option value="graduation"> Graduation </option>
                <option value="funeral"> Funeral </option>
                <option value="festival shoot"> Festival Shoot </option>
                <option value="award ceremony"> Award Ceremony </option>
                <option value="political event"> Political Event </option>
        </select> <br>
          </select>
          <input type="submit" name="submit" value="Search">
        </form> <br>
      <?php 
      include '../../conn.php';
      if(isset($_POST['submit'])){
          $folder=$_POST['search'];
          $sql="select * from media where mediafolder='$folder';";
          $results = mysqli_query($db,$sql);
          while ($data = mysqli_fetch_array($results)) { ?>
      <img src="../../images/<?php echo $data['mediafolder'].$data['medianame'];?>" alt="Portfolio Image" style="margin:10px" width="40%">
      <?php } } 
      else { 
          $folder='portfolio/';
          $sql1="select * from media where mediafolder='portfolio/';";
          $result = mysqli_query($db,$sql1);
          while ($port = mysqli_fetch_array($result)) { ?>
      <img src="../../images/<?php echo $port['mediafolder'].$port['medianame'];?>" alt="Portfolio Image" width="40%"  style="margin:10px"> 
      <?php } } ?>
    </div> </center>

  </section>

  <!-- end about section -->

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

  
</body>

</html>