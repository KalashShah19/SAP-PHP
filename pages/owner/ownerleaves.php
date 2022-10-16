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

  <title> Leaves Records </title>

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
            Leave Statistics
          </h2>
          <p>
            Past Data of Leaves of Satff
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <form action="" method="post">
                <div class="contact_form-container">
                  <center>
                  <table>
                    <tr>
                      <th> Name </th>
                      <th> Leaves </th>
                      <th> Requests </th>
                      <th> Rejected </th>
                      <th> Pending </th>
                    </tr>  
                    <?php
                      include '../../conn.php';
                      $sql="select distinct leaves.uid, fname from leaves join users on users.uid=leaves.uid;";
                      $results = mysqli_query($db,$sql);
                      while ($data = mysqli_fetch_array($results)) { $uid=$data['uid']; ?>
                        <tr>
                          <td>
                            <?php echo $data['fname'];?>
                          </td>
                          <td>
                            <?php
                              $sql2="select count(lid) from leaves where uid='$uid' AND leavestatus='approved';";
                              $re=mysqli_query($db, $sql2);
                              $req=mysqli_fetch_array($re);
                              echo $req['count(lid)'];
                              ?>
                          </td>
                          <td>
                            <?php
                              $sql1="select count(lid) from leaves where uid=$uid;";
                              $r=mysqli_query($db, $sql1);
                              $c=mysqli_fetch_array($r);
                              echo $c['count(lid)'];
                            ?>
                          </td>
                          <td>
                          <?php
                              $sql3="select count(lid) from leaves where uid=$uid AND leavestatus='rejected';";
                              $res=mysqli_query($db, $sql3);
                              $rej=mysqli_fetch_array($res);
                              echo $rej['count(lid)'];
                            ?>
                          </td>
                          <td>
                          <?php
                              $sql3="select count(lid) from leaves where uid=$uid AND leavestatus='pending';";
                              $res=mysqli_query($db, $sql3);
                              $rej=mysqli_fetch_array($res);
                              echo $rej['count(lid)'];
                            ?>
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
  
  

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

  
</body>

</html>