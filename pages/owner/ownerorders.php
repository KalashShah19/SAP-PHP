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

  <title> Product Orders </title>

  <style type="text/css">
    table,tr,td,th{
      border: 2px solid black;
      padding: 15px;
      text-align: center;
    }
  </style>
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
    <?php include '../../headers/owner/header.php';?>
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
            Product Orders
          </h2>
          <p>
            Refer the Pending Orders for Customized Products 
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact_form-container"> <hr> 
                <center>
                  <table>
                    <tr>
                      <th> User </th>
                      <th> Products </th>
                      <th> Total </th>
                      </tr>

                    <?php
                      include '../../conn.php';
                      $sql="select * from orders join users on users.uid = orders.uid;";
                      $results = mysqli_query($db,$sql);
                      while ($data = mysqli_fetch_array($results)) { ?>
                        <tr>
                          <td>
                            <?php echo $data['fname'];?>
                          </td>
                          <td>
                            <?php echo $data['pname'];?>
                          </td>
                          <td>
                            <?php echo $data['ordertotal'];?>
                          </td>
                        </tr>

                      <?php } ?>
                  </table>
                </center>
                </div>
              </div>
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