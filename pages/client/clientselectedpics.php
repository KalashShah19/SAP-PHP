<?php session_start();  
  include '../../conn.php'; 
  $uid=$_SESSION['uid'];
  $sql1="select count(mid) as count from media where uid=$uid and selected='yes';";
  $result=mysqli_query($db, $sql1);
  $data = mysqli_fetch_array($result);
  if($data['count'] < 30 ){
    $_SESSION['selection']="yes";
  }
  else {
    $_SESSION['selection']="no";
  }
?>
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

  <title> Shah Abhay PhotoGraphy | Selected Pics </title>


  <!-- bootstrap core css -->
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
     <?php include '../../headers/client/header.php' ?>;
    <!-- end header section -->


  <!-- portfolio section -->

  <section class="portfolio_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Selected Photos
        </h2>
        <p>
          Your Best Selected Photos for Products
        </p>
      </div>
      <?php if($_SESSION['selection'] == "yes"){ ?>
      <form action="clientfolders.php">
        <button style="font-size: x-large; border: 2px solid white; margin-left: 45%; color: white; background-color: rgb(0, 217, 255)" type="submit"> Select More Pics </button>
      </form> <?php } ?>
      <div class="portfolio_container layout_padding2">
        <div class="row">
        <?php 
            $uid=$_SESSION['uid'];
            $sql="select * from media where uid=$uid and selected='yes';";
            $result=mysqli_query($db, $sql);
            while($data = mysqli_fetch_array($result)) {
              $name=$data['medianame'];
              $path=$data['mediapath'];
              $mid=$data['mid'];
              $folder=$data['mediafolder'];
              $image=$path.$folder."/".$name;
          ?>
          <div class="column">
            <div class="img-box b-1">
              <img src="<?php echo $image; ?>" alt="">
            </div>
            </div>
          <?php } ?>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->


</body>

</html>