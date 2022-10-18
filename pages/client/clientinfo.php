<?php 
  session_start(); 
  include '../../conn.php';
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

  <title> Shah Abhay PhotoGraphy | Product Info </title>


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
            Product Information
          </h2>
          <p>
            Know what It Is and Select Your Style
          </p>
        </div>
        <div class="">
            <div class="row">
              <div class="col-md-7 mx-auto">
                <div class="contact_form-container">
                  <div class="row">
                    <div class="column">
                      <div class="img-box b-1">
                      <?php 
                        if(isset($_GET['pid'])){
                          $pid=$_GET['pid'];
                        }
                        $results=mysqli_query($db, "select * from products join media on media.mid=products.mid where pid=$pid GROUP BY pname;");
                        while($data = mysqli_fetch_array($results)){
                      ?>
                        <h2> <?php echo $data['pname'] ?> </h2>   
                      <form method="POST">
                          <img src="<?php echo $data['mediapath'].$data['mediafolder'].$data['medianame']; ?>">
                        </div>
                      </div>
                      <div class="column">
                        <div class="img-box b-1">
                          <?php 
                            if($data['pname']=="Album"){
                          ?>
                          <button name="cover" formaction="clientcovers.php"> SelectCover </button>
                          <?php } ?> 
                           <label for="size"> Size : </label>

                          <select id="size" name="size">
                            <?php 
                              $pname=$data['pname'];
                              $sql1="select distinct size from products where pname='$pname'";
                              $res=mysqli_query($db, $sql1); 
                              while($d = mysqli_fetch_array($res)){  ?>
                              <option value="<?php echo $d['size']; ?>"> <?php echo $d['size']; ?> </option>
                            <?php } ?>
                          </select>
                          
                          <br> <br>
                          <label for="color"> Color : </label>
                          <select id="color" name="color">
                          <?php 
                              $pname=$data['pname'];
                              $sql2="select distinct color from products where pname='$pname'";
                              $re=mysqli_query($db, $sql2); 
                              while($dt = mysqli_fetch_array($re)){  ?>
                              <option value="<?php echo $dt['color']; ?>"> <?php echo $dt['color']; ?> </option>
                            <?php } ?>
                          </select> 
                            
                          <br> <br>
                          <p> Price : <?php echo $data['price'];?> /- Rs <br> </p> 
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                <div class=" d-flex justify-content-center ">
                    <button type="submit" name="cart">
                    Add to Cart
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

    <?php 
      $coid=0;
      if(isset($_POST['cart'])){
        $sql3="insert into cart (uid, pid) values('$uid','$pid');";
        mysqli_query($db, $sql3);
        $_SESSION['msg']="Product was Added Successfully in Your Cart.";
        echo '<script> document.location.href="clientcart.php";</script>';
      }
    ?>
  

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

</body>

</html>