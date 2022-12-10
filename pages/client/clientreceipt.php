<?php session_start(); 
$uid = $_SESSION['uid']; ?>
<!DOCTYPE html>
<html>
  <script>
    alert("Your Payment was Received, Thank You.");
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

  <title> Shah Abhay PhotoGraphy | Payment Receipt </title>


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
    <?php include '../../headers/client/header.php'; ?>
  </div>
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
          Payment Receipt
        </h2>
        <p>
          Proof of Your Payment
        </p>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form action="clienthome.php" method="post">
              <div class="contact_form-container">
                <center>
                <table class="tabl">
                  <?php 
                    include '../../conn.php';
                    $res = mysqli_query($db, "select * from booking join users on users.uid = booking.uid join tbl_service_events on tbl_service_events.SrvEveID = booking.SrvEveID where booking.uid = $uid;"); 
                    $data = mysqli_fetch_array($res);
                  ?>
                  <tr class="tabl">
                    <td class="tabl"> Name </td>
                    <td class="tabl"> <?php echo $data['fname']; ?> <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                    <td class="tabl"> Email </td>
                    <td class="tabl"> <?php echo $data['email']; ?> <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                    <td class="tabl"> Mobile Number </td>
                    <td class="tabl"> <?php echo $data['contact']; ?> <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                  <td class="tabl"> Order </td>
                  <td class="tabl"> <?php echo $data['event']; ?> <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                  <td class="tabl"> Location </td>
                  <td class="tabl"> <?php echo $data['baddress']; ?> <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                  <td class="tabl"> Start Date </td>
                  <td class="tabl"> <?php echo $data['start']; ?> <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                  <td class="tabl"> End Date </td>
                  <td class="tabl"> <?php echo $data['end']; ?> <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                  <td class="tabl"> Amount </td>
                    <td class="tabl"> <?php echo $data['totalamount']; ?> <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                  <td class="tabl"> Services </td>
                  <?php
                    $names="";
                    $ids = $data['SrvEveID'];
                    $id = explode(",", $ids);
                    foreach($id as $i){
                      $sql1 = "select * from tbl_service_events where SrvEveID=$i";
                      $res = mysqli_query($db, $sql1);
                      $data = mysqli_fetch_array($res);
                      $name = $data['SrvEveName']; 
                      $names.=$name.",";
                    }
                  ?>
                    <td class="tabl"> <?php echo $names;?> <br> <br> </td>
                  </tr>
                </table>
                
                <button type="submit"> Home </button>
              </div>
            </form>
          </center>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <!-- Backend -->
  <?php
  if(isset($_POST['submit'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
  }
  ?>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

</body>

</html>