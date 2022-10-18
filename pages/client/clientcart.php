<?php
  session_start();
  $uid=$_SESSION['uid'];
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

  <title> Shah Abhay PhotoGraphy | Cart </title>


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
    <!-- end header section -->
</div>

    <?php if(isset($_SESSION['msg'])) { ?>
      <div id="msg">
      <div id="msg" style="background-color: cyan; color: black">
      <br> <h5 style="text-align:center">
        <?php echo $_SESSION['msg'];
        unset($_SESSION['msg']); ?>  
        </h5> <br>
      </div> <br> <br>
      </div>
    <?php } ?>
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
            Cart
          </h2>
          <p>
            Confirm Your Orders and Proceed to Pay
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <div class="contact_form-container">
                <div class="row">
                  <?php 
                  $total=0;
                    include '../../conn.php';
                    $sql="select * from cart join products on cart.pid=products.pid join media on media.mid=products.mid where cart.uid=$uid;";
                    $results=mysqli_query($db, $sql);
                    while($data = mysqli_fetch_array($results)){
                  ?>
                  <div class="column">
                    <div class="img-box b-1">
                      <div class="img-box b-1">
                        <img src="<?php echo $data['mediapath'].$data['mediafolder'].$data['medianame']; ?>">
                        <br> <br> <p> Size : <?php echo $data['size']; ?> <br> </p>
                         <p> Color : <?php echo $data['color']; ?> <br> </p>
                        <p> Price : <?php echo $data['price']; $total=$total+$data['price']; ?> /- Rs <br> </p>
                        <p> <a style="background-color:black; color:white" href="clientcart.php?del=<?php echo $data['pid']; ?>"> Delete </a> </p>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
              <div class=" d-flex justify-content-center ">
                <form method="post">
                      <br><br><h2> Total Amount = <?php echo $total; ?> /- RS </h2>
                       <button type="submit" name="pay">
                        Confirm And Pay
                      </button> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php 
      if(isset($_GET['del'])){
        $pid=$_GET['del'];
        mysqli_query($db, "delete from cart where pid=$pid and uid=$uid;");
        $_SESSION['msg']="That Product was Deleted Successfully from Your Cart.";
        echo "<script>document.location.href='clientcart.php';</script>";
    }

    if(isset($_POST['pay'])){
      $ids="";
        $res=mysqli_query($db,"select pid from cart where uid=$uid;");
        while($str=mysqli_fetch_array($res)){
          $ids.=",".$str['pid'];
        }

        mysqli_query($db, "INSERT INTO `orders`(`uid`, `deliverystatus`, `pid`, `ordertotal`) VALUES ('$uid', 'pending', '$ids', '$total');");
        mysqli_query($db, "delete from cart where uid=$uid;");
        echo "<script>document.location.href='clientpayment.php';</script>";
    }
    ?>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->


</body>

</html>