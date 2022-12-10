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

  <title> Shah Abhay PhotoGraphy | Product Orders </title>


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
            Customized Product Orders
          </h2>
          <p>
            Refer the Orders for Customized Products 
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact_form-container"> <hr> 
                  <form method="post"> 
                    <center>
                    <?php 
                      $sql = "select * from orders join users on users.uid = orders.uid where deliverystatus='delivered';";
                      $res = mysqli_query($db, $sql);
                      while($data = mysqli_fetch_array($res)){ $oid=$data['oid'];
                    ?>
                    <h3> Name : <?php echo $data['fname'];?> </h3> 
                    <p> Order : <?php echo $data['pname'] ?> <p> 
                    <p> Address : <?php echo $data['address'] ?> <p> 
                    <button type="submit" formaction="adminproductdetails.php?oid=<?php echo $oid; ?>"> Details </button> 
                    <hr> <br> 
                    <?php } ?>
                    
                    </form>
                    </div>
                </div>
                      </center>
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