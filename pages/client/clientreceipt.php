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
                <table class="tabl">
                  <tr class="tabl">
                    <td class="tabl"> Name </td>
                    <td class="tabl"> Kalash Shah <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                    <td class="tabl"> Email </td>
                    <td class="tabl"> kalash@gmail.com <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                    <td class="tabl"> Mobile Number </td>
                    <td class="tabl"> 9874652130 <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                  <td class="tabl"> Order </td>
                    <td class="tabl"> Album, Cup, Stickers, Photo Frame <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                  <td class="tabl"> Amount </td>
                    <td class="tabl"> 30200 <br> <br> </td>
                  </tr>
                  <tr class="tabl">
                    <td class="tabl"> Payment Method </td>
                    <td class="tabl"> UPI <br> <br> </td>
                  </tr>
                </table>
                
                <button type="submit"> Home </button>
              </div>
            </form>
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