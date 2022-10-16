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

  <title> Contact Messages </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../css/responsive.css" rel="stylesheet" />

  <style>
    table, tr, td, th {
      border: 1px solid black;
      text-align: center;
      padding:10px;
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
            Review / Feedbacks
          </h2>
          <p>
            Reviews / Feedbacks from Clients
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact_form-container"> 
                  <center>
                    <table>
                      <tr>
                        <th> Name </th>
                        <th> Rating </th>
                        <th> Subject </th>
                        <th> Experience </th>
                      </tr>

                      <?php
                        include '../../conn.php';
                        $sql="select * from reviews join users on users.uid=reviews.uid;";
                        $results = mysqli_query($db,$sql);
                        while ($data = mysqli_fetch_array($results)) { ?>
                      <tr>
                        <td> <?php echo $data['fname']; ?></td>
                        <td> <?php echo $data['rating']; ?></td>
                        <td> <?php echo $data['subject']; ?></td>
                        <td> <?php echo $data['experience']; ?></td>
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