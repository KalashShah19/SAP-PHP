<?php
  session_start(); 
  
?>
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

  <title> Shah Abhay PhotoGraphy | All Pics Folder </title>


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
    <div class="container">
      <div class="heading_container">
        <h2 id="folder">
            All Pics Folder 
        </h2>
        <p>
            Select Best Photos for Products
        </p>
      </div>
      <center>
        <?php if(isset($_SESSION['message'])) { ?>
        <div id="msg" style="background-color: cyan; color: black">
        <br> <h5 style="text-align:center">
          <?php echo $_SESSION['message'];
          unset($_SESSION['message']); ?>  
          </h5> <br>
        </div> <br> <br>
        <?php } ?>
      </center>
      <div class="portfolio_container layout_padding2">
        <div class="row">
          <?php 
          if(isset($_GET['folder'])){
            $folder=$_GET['folder'];
            $_SESSION['folder']=$folder;
            include '../../conn.php'; 
            $uid=$_SESSION['uid'];
            $sql="select * from media where uid=$uid and mediafolder='$folder' and selected='no';";
            $result=mysqli_query($db, $sql);
            while($data = mysqli_fetch_array($result)) {
              $name=$data['medianame'];
              $path=$data['mediapath'];
              $mid=$data['mid'];
              $image=$path.$folder."/".$name;
          ?>
          <div class="column">
            <div class="img-box b-1">
              <img src="<?php echo $image; ?>">
              <div class="btn-box">
                <a href="clientphotos.php?id=<?php echo $mid;?>&?folder=<?php echo $folder;?>" class="btn-1">
                </a>
              </div>
            </div>
            </div>
          <?php 
              } 
            }
          ?>

        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <?php 
    if(isset($_GET['id'])){
      include '../../conn.php'; 
      $folder=$_SESSION['folder'];
      $mid=$_GET['id'];
      echo $mid;
      echo $folder;
      $sql1="update media set selected='yes' where mid=$mid;";
      mysqli_query($db,$sql1);
      $_SESSION['message']="That Image was Selected Successfully!";
      echo "<script>document.location.href='clientphotos.php?folder=$folder';</script>";
    }
  ?>
  
  <script>
    var folder="<?php echo $folder;?>";  
    var url=window.location.href;
    document.getElementById("folder").innerText=folder;
  </script>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

 
</body>

</html>