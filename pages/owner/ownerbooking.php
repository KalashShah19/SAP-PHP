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
                <div class="contact_form-container"> <hr> 
                  <table>
                    <tr>
                      <td> Name </td>
                      <td> Event </td>
                      <td> Start </td>
                      <td> End </td>
                      <td colspan="2"> Actions </td>
                    </tr>

                  <?php 
                  $db = mysqli_connect('localhost', 'root', 'root', 'sap');
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
                            <a href=""> Approve </a>
                          </td>
                          <td>
                            <a href=""> Reject </a>
                          </td>
                        </tr>

                      <?php } ?>
                    </table>
                  

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  

  <!-- footer section -->
  <?php
    include '../../footers/footer.php';
  ?>

</body>

</html>