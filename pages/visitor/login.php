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

  <title> Shah Abhay PhotoGraphy | Login </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../css/responsive.css" rel="stylesheet" />

  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
      </script>
      <script type="text/javascript">
         (function(){
            emailjs.init("cyZCTdqrK-Ga1FwTq");
         })();
      </script>
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php include '../../headers/visitor/header.php'; ?>
    <!-- end header section -->
  </div>

  <!-- Login section -->

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
          Login
        </h2>
        <p>
          Get the Access of the System 
        </p>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form method="post">
              <div class="contact_form-container">
                <div>
                  <div>
                    <label> User Name : </label>
                    <input type="text" name="user">
                  </div>
                  <div>
                    <label> Password : </label>
                    <input type="password" name="pass">
                  </div>
                  <div class=" d-flex justify-content-center ">
                     <button style="border: 2px solid white;" type="submit" name="submit">
                      Login
                    </button> 
                    <button  style="border: 2px solid white;" onclick="forgotpass()" type="submit" name="forgot">
                      Forgot Password
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

  <!-- Backend validation -->
  <?php
    include '../../conn.php';
    if(isset($_POST['submit'])) {
      $user=$_POST['user'];
      $pass=$_POST['pass'];
      $login=0;
      
      $results = mysqli_query($db, "SELECT * FROM users;");
      while ($row = mysqli_fetch_array($results)) {
        $username=$row['username'];
        $password=$row['password'];
        $type=$row['usertype'];
        if($username==$user && $password==$pass) {
          $login=1;
          $_SESSION['fname']=$row['fname'];
          $_SESSION['uid']=$row['uid'];
          $_SESSION['login']="true";
          break;
      }
    }

      if($login==1) {
        $_SESSION['msg']="Login Successfull.";
        if($type=="client")
          echo "<script type='text/javascript'>document.location.href='../client/clienthome.php';</script>";
        else if($type=="admin")
          echo "<script type='text/javascript'>document.location.href='../admin/adminbooking.php';</script>";
        else if($type=="owner")
        echo "<script type='text/javascript'>document.location.href='../owner/ownerclients.php';</script>";
      }
      else {
        echo '<script> alert("Login Failed. Enter Valid Credentials !!");</script>';
      }
    }    

    if(isset($_POST['forgot'])){
      $str="";
      $json=array("email" => "",
      "uid" => "",
      "usertype" => "",
      "fname" => "");
      $row=array();
      $sql="select fname,uid,email,usertype from users;";
      $results = mysqli_query($db,$sql);
      while ($row = mysqli_fetch_array($results)) {
        $email=$row['email'];
        $usertype=$row['usertype'];
        $uid=$row['uid'];
        $fname=$row['fname'];
        $str=$str.$email.",";
        $json=array_push( $json, array(
          "email" => $email,
          "uid" => $uid,
          "usertype" => $usertype,
          "fname" => $fname));
      }
    }
    ?>

  <script>
    function forgotpass() {
      var email="";
      var mails;
      var i=0;
      var flag=0;
      var arr = <?php echo json_encode($json);?>;
      var uid=0;
      email=prompt("Enter Your Email : ");
      str="<?php echo $str;?>";
      mails=str.split(",");
      for(i;i<mails.length;i++) {
        if(email==mails[i]){
          var digits = '0123456789';
          var OTP = "";
          for (let i = 0; i < 4; i++ ) {
              OTP += digits[Math.floor(Math.random() * 10)];
          }
          // Send Mail
          var para = { otp : OTP, email: email };
          emailjs.send("service_q9n1gle","template_gzlkddb",para);
          <?php 
            $mail='<script> document.write(email); </script>';
            if($json['email']==$mail){
              echo "done";
            }
          ?>
          flag=1;
          break;
        }
      }
      
      if(flag==0){
        alert("Enter Valid Email;"); 
      }
      else {
        var inp=prompt("OTP has been sent to your Email, kindly check your spam section and enter the OTP below : ");
        if(inp==OTP) {
          
          document.location.href='../client/clienthome.php';
          alert("Correct!!");
        }
        else {
          alert("Wrong OTP.");
        }
      }
    }
  </script>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

  
</body>

</html>