<?php 
session_start();
  if(!isset($_SESSION['login'])){
    echo "Your are not a Valid User!! Go to <a href=\"../visitor/login.php\"> Login </a>";
  }
  else {
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

  <title> Clients Management </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../css/responsive.css" rel="stylesheet" />

  <style>
    html{
      scroll-behavior: smooth;
    }
    table, tr, td, th {
      border: 1px solid black;
      text-align: center;
      /* padding:5px; */
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
            User Management
          </h2>
          <p>
            Everything You want to Know about Your Clients
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-11 mx-auto">
                <div class="contact_form-container"> 
                  <center>
                      <table>
                        <tr>
                          <th> First Name </th>
                          <th> Last Name </th>
                          <th> Phone Number </th>
                          <th> Gender </th>
                          <th> Email </th>
                          <th> Address </th>
                          <th> User Type </th>
                          <th colspan="2"> Actions </th>
                        </tr>
                    <?php 
                      include '../../conn.php';
                      $sql="select * from users where uid!=1;";
                      $results = mysqli_query($db,$sql);
                      while ($data = mysqli_fetch_array($results)) { ?>
                        <tr>
                          <td>
                            <?php echo $data['fname']; ?>
                          </td>
                          <td>
                            <?php echo $data['lname']; ?>
                          </td>
                          <td>
                            <?php echo $data['contact']; ?>
                          </td>
                          <td>
                            <?php echo $data['gender']; ?>
                          </td>
                          <td>
                            <?php echo $data['email']; ?>
                          </td>
                          <td>
                            <?php echo $data['address']; ?>
                            </td>
                            <td>
                              <?php echo $data['usertype']; ?>
                          </td>
                          <td>
                            <a style="border:1px solid black;background-color:lime;color:black"  href="ownerclients.php?edit=<?php echo $data['uid'];?>#edit"> Edit </a>
                          </td>
                          <td>
                            <a style="border:1px solid black;background-color:red;color:white" href="ownerclients.php?delete=<?php echo $data['uid'];?>"> Block </a>
                          </td>
                        </tr> 
                        <?php
                      }
                    ?> </center>
                      </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php
      if(isset($_GET['edit'])){ 
        $uid=$_GET['edit'];
        $sql="select * from users where uid=$uid;";
        $results = mysqli_query($db,$sql);
        while ($data = mysqli_fetch_array($results)) {
        ?>
      <center>
        <div id="edit">
        <h2> Edit Information </h2>
        <table>
        <form method="POST">
          <tr>
            <td><label> First Name : </label></td>
            <td><input type="text" name="fname" value="<?php echo $data['fname'];?>"></td>
          </tr>
          <tr>
            <td><label> Last Name : </label></td>
            <td><input type="text" name="lname" value="<?php echo $data['lname'];?>"></td>
        </tr>
        <tr>
            <td><label> Phone Number : </label></td>
            <td><input type="number" name="contact" value="<?php echo $data['contact'];?>"></td>
        </tr>
        <tr>
            <td><label> Gender : </label></td>
            <td> Male <input type="radio" name="gender" value="male" <?php if($data['gender'] == "male") { echo "checked";} ?>>
             Female <input type="radio" name="gender" value="female" <?php if($data['gender'] == "female") { echo "checked";} ?>>
             Other <input type="radio" name="gender" value="other" <?php if($data['gender'] == "other") { echo "checked";} ?>>
            </td>
        </tr>
          <tr>
            <td><label> Email : </label></td>
            <td><input type="email" name="email" value="<?php echo $data['email'];?>"></td>
        </tr>
          <tr>
            <td><label> Address : </label></td>
            <td><input type="text"  name="address" value="<?php echo $data['address'];?>"></td>
        </tr>
        <tr>
            <td><label> user Type : </label></td>
            <td> <label for="client"> Client </label> 
              <input type="radio"  name="usertype" id="client" value="client" <?php $user=$data['usertype']; if($user=="client"){echo "checked";} ?>>
            <label for="admin"> Admin </label>
              <input type="radio"  name="usertype" id="admin" value="admin" <?php $user=$data['usertype']; if($user=="admin"){echo "checked";} ?>>  </td>
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
              $fname=$_POST['fname'];
              $lname=$_POST['lname'];
              $contact=$_POST['contact'];
              $gender=$_POST['gender'];
              $email=$_POST['email'];
              $address=$_POST['address'];
              $usertype=$_POST['usertype'];
              $sql="UPDATE `users` SET `fname`='$fname',`lname`='$lname',`contact`='$contact',gender='$gender',`address`='$address',`email`='$email', usertype='$usertype'  WHERE uid=$uid;";
              mysqli_query($db, $sql);
              echo '<script> alert("Record Updated Successfully."); </script>';
              echo '<script> document.location.href="ownerclients.php"; </script>';
          }
      ?>

    <?php
      if(isset($_GET['delete'])){
        $uid=$_GET['delete'];
        header('location:ownerclients.php');
        $sql="Delete from users where uid=$uid;";
        mysqli_query($db, $sql);
        echo '<script> alert("Record Deleted Successfully."); </script>';
        echo '<script> document.location.href="ownerclients.php"; </script>';
      }
    ?>
  <!-- footer section -->
  <?php
    include '../../footers/footer.php';
  }
  ?>
 
</body>

</html>