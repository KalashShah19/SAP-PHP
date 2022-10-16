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

  <title> Booking Requests</title>


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
            Booking Requests
          </h2>
          <p>
            Check out the Requests and Suggest Owner to Approve or Reject
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <form method="post">
                <div class="contact_form-container">
                  <center>
                    <?php if(isset($_SESSION['message'])) { ?>
                    <div id="msg" style="background-color: cyan; color: black">
                    <br> <h5 style="text-align:center">
                      <?php echo $_SESSION['message'];
                      unset($_SESSION['message']); ?>  
                      </h5> <br>
                    </div>
                    <br> <br>
                    <?php } ?>
                  <table>
                    <tr>
                      <th> Name </th>
                      <th> Event </th>
                      <th> Start </th>
                      <th> End </th>
                      <th> Services </th>
                      <th> Budget </th>
                      <th colspan="2"> Actions </th>
                    </tr>

                  <?php
                      include '../../conn.php';
                      $sql="select * from booking join users on booking.uid=users.uid where bstatus=\"pending\";";
                      $results = mysqli_query($db,$sql);
                      while ($data = mysqli_fetch_array($results)) { ?>
                        <tr>
                          <td>
                            <?php echo $data['fname'];?>
                          </td>
                          <td>
                            <?php echo $data['event'];?>
                          </td>
                          <td>
                            <?php echo $data['start'];?>
                          </td>
                          <td>
                            <?php echo $data['end'];?>
                          </td>
                          <td>
                            <?php 
                              $SrvEveID=$data['SrvEveID'];
                              $ID = explode(",", $SrvEveID);
                              $sql1="select * from tbl_service_events;";
                              $res = mysqli_query($db,$sql1);
                              while ($srv = mysqli_fetch_array($res)) { 
                                foreach($ID as $id){
                                  if($id == $srv['SrvEveID']){
                                    echo $srv['SrvEveName']."<br>";
                                  }
                                }
                              }
                            ?>
                          </td>
                          <td>
                            <?php echo $data['totalamount'];?>
                          </td>
                          <td>
                            <a href="ownerbooking.php?approved=<?php echo $data['bid'];?>" style="color:black; background-color: lime; border: 2px solid black"> Approve </a>
                          </td>
                          <td>
                            <a href="ownerbooking.php?rejected=<?php echo $data['bid'];?>" style="color:black; background-color: red; border: 2px solid black"> Reject </a>
                          </td>
                        </tr>

                      <?php } ?>
                    </table>
                      </center>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
                        
    <?php
      if(isset($_GET['approved'])) {
        $bid=$_GET['approved'];
        $sql="update booking set bstatus='approved' where bid=$bid;";
        mysqli_query($db, $sql);
        $_SESSION['message']="Request have been Approved Successfully.";
        echo "<script type='text/javascript'>document.location.href='ownerbooking.php';</script>";
      }

      if(isset($_GET['rejected'])) {
        $bid=$_GET['rejected'];
        $sql="update booking set bstatus='rejected' where bid=$bid;";
        mysqli_query($db, $sql);
        $_SESSION['message']="Request have been rejected Successfully.";
        echo "<script type='text/javascript'>document.location.href='ownerbooking.php';</script>";
      }
    ?>

  <!-- footer section -->
  <?php
    include '../../footers/footer.php';
  ?>

</body>

</html>