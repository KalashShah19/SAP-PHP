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
  <style type="text/css">
    table,tr,td,th{
      border: 2px solid black;
      padding: 15px;
      text-align: center;
    }
  </style>

  <title> Product Management </title>


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
              Product Management
            </h2>
            <p>
              All Info about Products You want to Show to Your Clients
            </p>
          </div>
          <div class="">
            <div class="row">
              <div class="col-md-8 mx-auto">
                  <div class="contact_form-container"> 
                    <center>
                    <?php if(isset($_SESSION['message'])) { ?>
                    <div id="msg" style="background-color: cyan; color: black">
                    <br> <h5>
                      <?php echo $_SESSION['message'];
                      unset($_SESSION['message']); ?>  
                      </h5> <br>
                    </div>
                    <br> <br>
                    <?php } ?>
                      <form method="POST" action="ownermanageproduct.php#add">
                        <button name="add"> Add New Product </button>
                      </form> <br>
                  <table>
                    <tr>
                      <th> Name </th>
                      <th> Image </th>
                      <th> Price </th>
                      <th> Size </th>
                      <th> Color </th>
                      <th colspan="2"> Actions </th>
                    </tr>

                    <?php
                      include '../../conn.php';
                      $sql="select * from products;";
                      $results = mysqli_query($db,$sql);
                      while ($data = mysqli_fetch_array($results)) { ?>
                        <tr>
                          <td>
                            <?php echo $data['pname'];?>
                          </td>
                          <td>
                            <?php echo $data['mid'];?>
                          </td>
                          <td>
                            <?php echo $data['price'];?>
                          </td>
                          <td>
                            <?php echo $data['size'];?>
                          </td>
                          <td>
                            <?php echo $data['color'];?>
                          </td>
                          <td>
                            <a style="border:1px solid black;background-color:lime;color:black"  href="ownermanageproduct.php?edit=<?php echo $data['pid'];?>#edit"> Edit </a>
                          </td>
                          <td>
                            <a style="border:1px solid black;background-color:red;color:white" href="ownermanageproduct.php?delete=<?php echo $data['pid'];?>"> Delete </a>
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
  
    <?php
      if(isset($_GET['edit'])){ 
        $pid=$_GET['edit'];
        $sql="select * from products where pid=$pid;";
        $res = mysqli_query($db,$sql);
        while ($data = mysqli_fetch_array($res)) {
      ?>
      <center>
        <div id="edit">
        <h2> Edit Information </h2>
        <table>
        <form method="POST">
          <tr>
            <td><label> Name : </label></td>
            <td><input type="text" name="pname" value="<?php echo $data['pname'];?>"></td>
          </tr>
          <tr>
            <td><label> Image : </label></td>
            <td><input type="text" name="mid" value="<?php echo $data['mid'];?>"></td>
        </tr>
        <tr>
            <td><label> Price : </label></td>
            <td><input type="number" name="price" value="<?php echo $data['price'];?>"></td>
        </tr>
       
        <tr>
            <td><label> Size : </label></td>
            <td><input type="text" name="size" value="<?php echo $data['size'];?>"></td>
        </tr>
       
        <tr>
            <td><label> Color : </label></td>
            <td><input type="text" name="color" value="<?php echo $data['color'];?>"></td>
        </tr>

        <tr> 
            <td colspan="2"><input type="submit" name="update" value="Update"></td>
        </tr>

        </form>
        </table>
      </center>
      <?php } } ?>
  
      <?php
          if(isset($_POST['update'])) {
              $pid=$_GET['edit'];
              $pname=$_POST['pname'];
              $mid=$_POST['mid'];
              $price=$_POST['price'];
              $color=$_POST['color'];
              $size=$_POST['size'];
              $sql1="UPDATE `products` SET `pname`='$pname',`mid`='$mid',`price`='$price',`size`='$size',`color`='$color' WHERE pid=$pid;";
              mysqli_query($db, $sql1);
              $_SESSION['message']="Product has been Edited Successfully!!! ";
              // echo '<script> alert("Product Updated Successfully."); </script>';
              header('location:ownermanageproduct.php');
              echo '<script> document.location.href="ownermanageproduct.php"; </script>';
          }
      ?>

    <?php
      if(isset($_GET['delete'])){
        $pid=$_GET['delete'];
        $sql="Delete from products where pid=$pid;";
        mysqli_query($db, $sql);
        $_SESSION['message']="Product has been Deleted Successfully!!! ";

        echo '<script> alert("Product Deleted Successfully."); </script>';
        echo '<script> document.location.href="ownermanageproduct.php"; </script>';
      }
    ?>

    <?php 
      if(isset($_POST['add'])){ ?>
      <center>
        <h3 id="add"> New Product </h3>
        <form method="POST">
      <table>  
          <tr>
            <td><label> Name : </label></td>
            <td><input type="text" name="npname"></td>
          </tr>
          <tr>
            <td><label> Image : </label></td>
            <td><input type="text" name="nmid"></td>
        </tr>
        <tr>
            <td><label> Price : </label></td>
            <td><input type="number" name="nprice"></td>
        </tr>
       
        <tr>
            <td><label> Size : </label></td>
            <td><input type="text" name="nsize"></td>
        </tr>
       
        <tr>
            <td><label> Color : </label></td>
            <td><input type="text" name="ncolor"></td>
        </tr>

        <tr> 
            <td colspan="2"><input type="submit" name="newpro" value="Add"></td>
        </tr>

      </table>
    </form>
      </center>
     <?php } ?>

     <?php
          if(isset($_POST['newpro'])) {
            $npname=$_POST['npname'];
            $nmid=$_POST['nmid'];
            $nprice=$_POST['nprice'];
            $ncolor=$_POST['ncolor'];
            $nsize=$_POST['nsize'];
            $sql2="INSERT INTO `products`(`pname`, `mid`, `price`, `size`, `color`) VALUES ('$npname','$nmid','$nprice','$nsize','$ncolor')";
            mysqli_query($db, $sql2);
            $_SESSION['message']="New Product has been added Successfully!!! ";
            // echo '<script> alert("New Product Added Successfully."); </script>';
            header('location:ownermanageproduct.php');
            echo '<script> document.location.href="ownermanageproduct.php"; </script>';
          }
      ?>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

 
</body>

</html>