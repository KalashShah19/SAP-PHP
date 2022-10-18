<?php
  session_start();
  if($_SESSION['login']=="false"){
    echo "
    <br> <h5 style=\"text-align:center\">
    Your are not a Valid User!! Go to <a href=\"../visitor/login.php\"> Login </a>";
  }
  else {
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

  <title> Shah Abhay PhotoGraphy | Home </title>


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
            Dashboard
          </h2>
          <p>
            The Engine to run all the Operations
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact_form-container">
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
                  <h2> Welcome, <?php echo $_SESSION['fname']; ?> .</h2> <br>
                  <!-- <br> This is Tutorial Video :- <br> <br>
                  <iframe width="500" height="315" src="https://www.youtube.com/embed/1wKaSofErXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  <div> 
                   <br> <h3> Here are some Usefull Links :- <h3> <br>
                    <h5> <uL>
                      
                      <table>
                        <tr> 
                          <td>
                            <li> To Edit Profile </li>
                          </td>
                          <td style="padding: 25px;">
                            =>
                          </td>
                          <td> 
                            Click <a href="clientprofile.php"> Here </a> <br>
                          </td>
                        </tr>
                        <tr> 
                          <td>
                            <li> To Capture Memories of Your Event </li>
                          </td>
                          <td style="padding: 25px;">
                            =>
                          </td>
                          <td> 
                            Click <a href="clientbooking.php"> Here </a> <br>
                          </td>
                        </tr>
                        
                        <tr> 
                          <td>
                            <li> To Checkout Selected Photos, </li>
                          </td>
                          <td style="padding: 25px;">
                            =>
                          </td>
                          <td> 
                            Click <a href="clientselectedpics.phpß"> Here </a> <br>
                          </td>
                        </tr>
                        
                        <tr> 
                          <td>
                            <li> To Pay the Bill, </li>
                          </td>
                          <td style="padding: 25px;">
                            =>
                          </td>
                          <td> 
                            Click <a href="clientpayment.php"> Here </a> <br>
                          </td>
                        </tr>
                        
                        <tr> 
                          <td>
                            <li> To Provide Review, </li>
                          </td>
                          <td style="padding: 25px;">
                            =>
                          </td>
                          <td> 
                            Click <a href="clientreview.php"> Here </a> <br>
                          </td>
                        </tr>
                        
                        <tr> 
                          <td>
                            <li> To View All Media, </li>
                          </td>
                          <td style="padding: 25px;">
                            =>
                          </td>
                          <td> 
                            Click <a href="clientfolders.php"> Here </a> <br>
                          </td>
                        </tr>

                        <tr> 
                          <td>
                            <li> To Order Customized Products, </li>
                          </td>
                          <td style="padding: 25px;">
                            =>
                          </td>
                          <td> 
                            Click <a href="clientproducts.php"> Here </a> <br>
                          </td>
                        </tr>
                        
                        <tr> 
                          <td>
                            <li> To See Cart, </li>
                          </td>
                          <td style="padding: 25px;">
                            =>
                          </td>
                          <td> 
                            Click <a href="clientcart.php"> Here </a> <br>
                          </td>
                        </tr>

                        <tr> 
                          <td>
                            <li> To Pay the Bill, </li>
                          </td>
                          <td style="padding: 25px;">
                            =>
                          </td>
                          </td>
                          <td> 
                            Click <a href="clientpayment.php"> Here </a> <br>
                          </td>

                        </tr>
                      </table>
                    </uL>
                    </h5>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    

  <!-- Backend 
  <?php

  ?> -->

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

<?php } ?>
</body>

</html>