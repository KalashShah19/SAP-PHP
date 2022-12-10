<?php session_start(); ?>
<!DOCTYPE HTML>
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

  <title> Shah Abhay PhotoGraphy | Booking Requests</title>


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
    <?php include '../../headers/admin/header.php';?>
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
            Booking Requests
          </h2>
          <p>
            Check out the Requests and Suggest Owner to Approve or Reject
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <form action="clienthome.php" method="post">
                <center>
                <div class="contact_form-container"> <hr> 
                <?php 
                  include '../../conn.php';
                  $res = mysqli_query($db, "select * from booking join users on users.uid = booking.uid where bstatus ='pending';");
                  while($data = mysqli_fetch_array($res)) { $bid=$data['bid'];
                 ?>
                  <p> Name : <?php echo $data['fname'];?> </p>
                  <p> Event : <?php echo $data['event'];?> <p> 
                  <p> Start Date : <?php echo $data['start'];?> <p> 
                  <p> Start Date : <?php echo $data['end'];?><p> 
                  <form> 
                    <a href="adminbooking.php?avail=<?php echo $bid; ?>" style="background:black;color:cyan; padding: 5px"> Available </a>
                    <a href="adminbooking.php?unavail=<?php echo $bid; ?>" style="background:black;color:cyan;margin:10px; padding:5px"> Unavailable </a>
                  </form> 
                  <hr>
                  <?php } ?>
                </div>
              </form>
            </div>
          </div>
        </center>
        </div>
      </div>
    </section>
  
  <?php
    if(isset($_GET['avail'])){
      $bid=$_GET['avail'];
      mysqli_query($db, "update booking_details set status = 'available' where bdid = $bdid;");
      
    }
  ?>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>

 
</body>

</html>