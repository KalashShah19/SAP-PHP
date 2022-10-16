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

  <title> Shah Abhay PhotoGraphy | Album </title>


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
          Album Selection
        </h2>
        <p>
          Choose the Style of Album You want
        </p>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
              <div class="contact_form-container">
                <center>
                  <div id="msg" style="background-color: cyan; color: black">
                    <br> <h3 style="text-align:center">
                      Kindly Select Size and Cover of Your Album </h3> <br>
                  </div>
                  <br> <br>
                  <form method="post"> 
                    <label for="size"> <h4> Size : </h4>  </label>
                    <select name="size"> 
                        <option> Select </option>  
                        <option value="8×8"> 8×8 </option>
                        <option value="10x10"> 10x10 </option>
                        <option value="12x12"> 12x12 </option>
                        <option value="6x8"> 6x8 </option>
                        <option value="8×11"> 8×11 </option>
                        <option value="11×14"> 11×14 </option>
                        <option value="12×16"> 12×16 </option>
                        <option value="11x8"> 11x8 </option>
                        <option value="14x11"> 14x11 </option>
                        <option value="16x12"> 16x12 </option>
                    </select>
                    <br> <br> <h4> Select Cover : </h4>
                    <button type="submit" name="submit"> Covers </button>
                </form>
                </center>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php 
  if(isset($_POST['submit'])) {
    $uid=$_SESSION['uid'];
    $size=$_POST['size'];
    include '../../conn.php';
    $sql="insert into album (uid,size) values ('$uid','$size');";
    mysqli_query($db,$sql);
    echo "<script>document.location.href='clientcovers.php';</script>";
  }
?>
  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

 
</body>

</html>