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

  <title> Shah Abhay PhotoGraphy | Profile </title>


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
   <?php include '../../headers/client/header.php' ?>
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
          Profile
        </h2>
        <p>
          Look at Your Reflection
        </p>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form action="clientprofile.php" method="post">
              <div class="contact_form-container">
                <div>
                  <!-- <p> Profile Picture : </p>
                  <img src="../../images/kalash.jpg" width="100px"> <br> <br> <br> -->
                  <?php 
                    include '../../conn.php';
                    $sql="select * from users where uid=$_SESSION['uid']";
                    $results=mysqli_query($db, $sql);
                    while($data = mysqli_fetch_array($results)) {
                  ?>
                  <div>
                    <label> First Name : </label>
                    <input type="text" name="fname" value="<?php echo $data['fname'];?>">
                  </div>
                  <div>
                    <label> Middle Name : </label>
                    <input type="text" name="mname" value="<?php echo $data['mname'];?>">
                  </div>
                  <div>
                    <label> Last Name : </label>
                    <input type="text" name="lname" value="<?php echo $data['lname'];?>">
                  </div>
                  <div>
                    <label> User Name : </label>
                    <input type="text" name="user" value="<?php echo $data['username'];?>">
                  </div>
                  <div>
                    <label> Password : </label>
                    <input type="text" name="pass" value="">
                  </div>
                  <div>
                    <label> Phone Number : </label>
                    <input type="text" name="num" value="<?php echo $data['contact'];?>">
                  </div>
                  <div>
                    <label> Email : </label>
                    <input type="email"  name="email" value="<?php echo $data['email'];?>">
                  </div>
                  <div>
                    <label> Address : </label>
                    <input type="text"  name="add" value="<?php echo $data['address'];?>">
                  </div>
                  <div class=" d-flex justify-content-center ">
                    <!-- <button style="border: 2px solid white;" type="submit">
                      Upload Profile Photo
                    </button> -->
                    <button style="border: 2px solid white;" type="submit">
                      Save
                    </button>
                  </div>
                </div>
              </div>
            </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- Backend -->

  <?php
  if(isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $num=$_POST['num'];
    $email=$_POST['email'];
    $add=$_POST['add'];
  }
  ?>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

</body>

</html>