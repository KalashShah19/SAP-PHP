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

  <title> Shah Abhay PhotoGraphy | Customizable Products </title>


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

  <!-- portfolio section -->

  <section class="portfolio_section layout_padding">
   
      <div class="heading_container">
        <h2>
          Customizable Products
        </h2>
        <p>
          Exactly the Products That You Dreamt of.
        </p>
      </div>
      <div class="row p-b-100">
                  <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            
            <?php
          include '../../conn.php';
          $sql="select * from products join media on products.mid=media.mid group by pname;";
          $results=mysqli_query($db,$sql);
          while($data=mysqli_fetch_array($results)){
        ?>
        <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4"> <span id="goldenretriver">
            
                    <center style="background-color: black; color: white"> <?php echo $data['pname']; ?> </center>
                <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-3">
                    <img src="<?php echo "../../images/".$data['mediafolder'].$data['medianame']; ?>">
                    <div class="info-box">
                    <a href="clientinfo.php?pid=<?php echo $data['pid'];?>" class="info"> </a>
              </div>
                
          </div>
                </div> <?php } ?>
            </div>
        </div>
    </div>
           
              
  </section>
    <!-- end about section -->

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->
</body>
</html>
