<?php 
  session_start(); 
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

  <title> Shah Abhay PhotoGraphy | Media Folders </title>


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
    <?php include '../../headers/client/header.php';?>
  </div>
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
          Media Folders
        </h2>
        <p>
          A Place where All Your Photos and Videos Reside In
        </p>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form method="post">
              <div class="folders">
                <?php 
                if($_SESSION['selection']=="yes"){
                  include '../../conn.php'; 
                  $uid=$_SESSION['uid'];
                  $sql="select DISTINCT mediafolder from media where uid=$uid;";
                  $result=mysqli_query($db, $sql);
                  while($data = mysqli_fetch_array($result)) {
                ?>
                <button formaction="clientphotos.php?folder=<?php echo $data['mediafolder'];?>"> <?php echo strtoupper($data['mediafolder']);?> </button>
                <?php } } 
                else { ?>
                  <div style="background-color: cyan; color: black">
                  <br> <h2 style="text-align:center">
                    You have Already Selected Enough Photos for Your Album.
                   </h2> <br>
                    </div>
                <?php }
                ?>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

 
</body>

</html>