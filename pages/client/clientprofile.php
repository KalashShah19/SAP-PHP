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
                    $id=$_SESSION['uid'];
                    include '../../conn.php';
                    $sql="select * from users where uid=$id;";
                    $results=mysqli_query($db, $sql);
                    while($data = mysqli_fetch_array($results)) {
                  ?>
                  <div>
                    <label> First Name : </label>
                    <input type="text" name="fname" value="<?php echo $data['fname'];?>">
                  </div>
                  <div>
                    <label> Last Name : </label>
                    <input type="text" name="lname" value="<?php echo $data['lname'];?>">
                  </div>
                  <label> Gender : </label>
                    <table>
                      <tr>
                        <td>
                          <input type="radio" id="male" name="gender" value="male" <?php if($data['gender']=="male") { echo "checked";}?>> 
                        </td>
                        <td>
                          <label for="male"> Male </label>
                        </td>
                        <td>
                          <input type="radio" id="female" name="gender" value="female" <?php if($data['gender']=="female") { echo "checked";}?>>
                        </td>
                        <td>
                          <label for="female"> Female </label>
                        </td>
                        <td>
                          <td>
                            <input type="radio" id="other" name="gender" value="other" <?php if($data['gender']=="other") { echo "checked";}?>>
                          </td>
                          <td>
                          <label for="other"> Other </label>
                        </td>
                      </tr>
                    </table>
                  <div>
                    <label> Phone Number : </label>
                    <input type="text" name="contact" value="<?php echo $data['contact'];?>">
                  </div>
                  <div>
                    <label> Email : </label>
                    <input type="email"  name="email" value="<?php echo $data['email'];?>">
                  </div>
                  <div>
                    <label> Address : </label>
                    <input type="text"  name="address" value="<?php echo $data['address'];?>">
                  </div>
                  <div class=" d-flex justify-content-center ">
                    <!-- <button style="border: 2px solid white;" type="submit">
                      Upload Profile Photo
                    </button> -->
                    <button style="border: 2px solid white;" name="submit" type="submit">
                      Save
                    </button>
                    <button style="border: 2px solid white;" name="change" formaction="clientprofile.php#change">
                      Change Password
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
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $pass=0;
    
    $sql="UPDATE `users` SET `fname`='$fname',lname`='$lname',contact`='$contact',gender='$gender',`address`='$address',`email`='$email'  WHERE uid=$id;";
    mysqli_query($db, $sql);
    echo '<script> alert("Your Profile has been Updated Successfully.");</script>';
    echo '<script> document.location.href="clientprofile.php";</script>';
  }

  if(isset($_POST['change'])){ ?>
    <center>
      <h2> Change Password </h2> <br>
      <form method="POST" id="change"> 
        <label for="new"> New Password </label>
        <input type="password" id="new" name="new"> <br>
        <label for="confirm"> Confirm Password </label> 
        <input type="password" id="confirm" name="confirm">  <br>
        <button name="save" type="submit">
          Save
        </button>
      </form>
      <br>
    </center>
  <?php } ?>

  <?php
    if(isset($_POST['save'])){
      if($_POST['new'] == $_POST['confirm']){
        $password=md5($_POST['new']);
        $sql="update users set password='$password' where uid=$id";
        mysqli_query($db, $sql);
        echo "<script> alert('Your Password has been Chnaged Successfully!'); </script>";
      }
      else {
        echo "<script> alert('Passwords do not Match!'); </script>";
      }
    }
  ?>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

</body>

</html>