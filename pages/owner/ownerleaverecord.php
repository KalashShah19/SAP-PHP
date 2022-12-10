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

  <title> Leave History </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../css/responsive.css" rel="stylesheet" />

  <style type="text/css">
    table,tr,td,th{
      border: 2px solid black;
      padding: 15px;
      text-align: center;
    }
  </style>
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
              Leave History
            </h2>
            <p>
              Flashback to All the Leaves of Staff
            </p>
          </div>
          <div class="">
            <div class="row">
              <div class="col-md-8 mx-auto">
                  <div class="contact_form-container"> 

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
                  <table>
                    <tr>
                      <th> Name </th>
                      <th> Reason </th>
                      <th> Start Date </th>
                      <th> End Date </th>
                      <th> Status </th>
                    </tr>

                  <?php
                      include '../../conn.php';
                      $sql="select * from leaves join users on leaves.uid=users.uid where leavestatus!=\"pending\";";
                      $results = mysqli_query($db,$sql);
                      while ($data = mysqli_fetch_array($results)) { ?>
                        <tr>
                          <td>
                            <?php echo $data['fname'];?>
                          </td>
                          <td>
                            <?php echo $data['reason'];?>
                          </td>
                          <td>
                            <?php echo $data['startdate'];?>
                          </td>
                          <td>
                            <?php echo $data['enddate'];?>
                          </td>
                          <td>
                            <?php echo $data['leavestatus'];?>
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