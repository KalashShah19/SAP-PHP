<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <script>
    var path = window.location.pathname;
    var page = path.split("/").pop();
    
</script>
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

  <title> Shah Abhay PhotoGraphy | Contact Us </title>


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
    <?php include '../../headers/visitor/header.php'; ?>
    <!-- end header section -->
  </div>

  <!-- contact section -->

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
          Contact Us
        </h2>
        <p> Tell us Your Quesrie or Message or Suggestions or Requests </p>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <center>    
              <?php if(isset($_SESSION['message'])) { ?>
              <div id="msg" style="background-color: cyan; color: black">
              <br> <h5>
                <?php echo $_SESSION['message'];
                unset($_SESSION['message']); ?>  
                </h5> <br>
              </div>
              <br> <br>
              <?php } ?>
            </center>
            <form method="post">
              <div class="contact_form-container">
                <div>
                  <div>
                    <label> First Name : </label>
                    <input type="text" name="cfname">
                  </div>
                  <div>
                    <label> Middle Name : </label>
                    <input type="text" name="cmname">
                  </div>
                  <div>
                    <label> Last Name : </label>
                    <input type="text" name="clname">
                  </div>
                  <div>
                    <label> Email : </label>
                    <input type="email" name="cemail">
                  </div>
                  <div class="">
                    <label> Message : </label>
                    <input type="text" class="message_input" name="cmsg">
                  </div>
                  <div class=" d-flex justify-content-center ">
                    <button type="submit" name="submit">
                      Send
                    </button>
                  </div>
                  <center>
                    <span> <br> <br> <h4>
                      Email : abhayshah@gmail.com
                      <br> <br>
                      Mobile Number : 9874563210
                    </h4></span>
                  </center>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->
<!-- Backend -->
<?php
    if(isset($_POST['submit'])) {
    $fname=$_POST['cfname'];
    $mname=$_POST['cmname'];
    $lname=$_POST['clname'];
    $email=$_POST['cemail'];
    $msg=$_POST['cmsg'];

    include '../../conn.php';
    $sql="INSERT INTO `contact`(`cfname`, `cmname`, `clname`, `cemail`, `cmsg`) VALUES ('$fname', '$mname', '$lname', '$email', '$msg');";
    $results = mysqli_query($db,$sql);
    $_SESSION['message']="Thank You for Contacting us, Your Message has been Delivered.";
    echo "<script type='text/javascript'>document.location.href='contact.php';</script>";


  }
?>


  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

 
</body>

</html>