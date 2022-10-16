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

  <title> Booking Records </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../css/responsive.css" rel="stylesheet" />

  <style type="text/css">
    table,tr,td{
      border: 2px solid black;
      padding: 10px;
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
            Bookings Records
          </h2>
          <p>
            Flashback to All the Bookings Recorded By System
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">  
                <div class="contact_form-container">
                  <center>
                  <table>
                    <tr>
                      <td> Name </td>
                      <td> Event </td>
                      <td> Start </td>
                      <td> End </td>
                      <td> Services </td>
                      <td> Budget </td>
                      <td> Status</td>
                    </tr>

                  <?php 
                  include '../../conn.php';
                      $sql="select * from booking join users on booking.uid=users.uid where bstatus!=\"pending\";";
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
                              $results = mysqli_query($db,$sql1);
                              while ($srv = mysqli_fetch_array($results)) { 
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
                            <?php echo $data['bstatus'];?>
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