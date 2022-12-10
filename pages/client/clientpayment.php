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

  <title> Shah Abhay PhotoGraphy | Bill Payment </title>


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
          Payment
        </h2>
        <p>
          Way to Give Returns
        </p>
      </div>
      <div class="">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="clientreceipt.php" method="post">
                  <br><br>
                  <label for="method"> Select Method :- </label>  
                  <div class="folders">
                      <button type="submit" name="UPI"> UPI </button>
                      <button type="submit" name="DEBIT"> DEBIT CARD </button>
                      <button type="submit" name="CREDIT"> CREDIT CARD </button>
                    </div>
                  </div>
                </form>
            </div>
          </div>
      </div>
    </div>
  </section>
  

  <!-- Backend 
  <?php
    if(isset($_POST['UPI'])){
      // mysqli_query($db, "insert into payment");
    }
  
  ?> -->

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

 
</body>

</html>