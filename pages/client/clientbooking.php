<?php 
  session_start();
  include '../../conn.php';
  $results = mysqli_query($db, "SELECT SrvEveName,SrvEveCharges FROM tbl_service_events;");
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

  <title> Shah Abhay PhotoGraphy | Booking </title>


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
  </div>

  <!-- Registration section -->

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
          Book Your Shoot
        </h2>
        <p>
          Capture The Perfect Moments of Your Event
        </p>
      </div>
      <div class="">
      <div class="book">
        <div class="row">
          <div class="col-md-8 mx-auto">
          <?php if(isset($_SESSION['message'])) { ?>
        <div id="msg" style="background-color: cyan; color: black">
        <br> <h5 style="text-align:center">
          <?php echo $_SESSION['message'];
          unset($_SESSION['message']); ?>  
          </h5> <br>
        </div> <br> <br>
        <?php } ?> 
            <form method="post">
              <div class="contact_form-container">
                <div> 
                  <label for="event"> <h5> Event Type </h5> </label> <br>
                  <select name="event" id="event" required> 
                    <option> Select </option>
                    <option value="prewedding"> Pre Wedding </option>
                    <option value="wedding"> Wedding </option>
                    <option value="birthday"> Birthday </option>
                    <option value="inogration/opening"> Inogration/Opening </option>
                    <option value="anniversary"> Anniversary </option>
                    <option value="vastu poojan"> Vastu Poojan </option>
                    <option value="party"> Party </option>
                    <option value="competetion"> Competetion </option>
                    <option value="school function"> School Function </option>
                    <option value="corperate"> Corperate </option>
                    <option value="portfolio shoot"> Portfolio Shoot </option>
                    <option value="festival shoot"> Festival Shoot </option>
                    <option value="music/concert/opera"> Music / Concert / Opera  </option>
                    <option value="sports tournament"> Sports Tournament </option>
                    <option value="graduation"> Graduation </option>
                    <option value="funeral"> Funeral </option>
                    <option value="festival shoot"> Festival Shoot </option>
                    <option value="award ceremony"> Award Ceremony </option>
                    <option value="political event"> Political Event </option>
                    <option onclick="per()" value="personalized"> Personalized Events </option>
                  </select>
                  <br> <br> <br> 

                  <script>
                    function per(){
                      document.getElementById("per").style.display="block";
                    }
                  </script>

                  <div id="per" style="display:none;">
                    <label for="personalized"> <h5> Personalized Event Name </h5> </label>
                    <input type="text" name="personalized" id="personalized" class="book"> <br> <br>
                  </div>

                  <label for="baddress"> <h5> Address </h5> </label> <br>
                  <textarea rows="7" style="resize:none;" cols="50" id="baddress" name="baddress"> </textarea>

                  <br> <br> <br>
                  <label for="start"> <h5> Start Date </h5> </label>
                  <input type="date" name="start" id="start">
                  
                  <br> <br>
                  <label for="end"> <h5> End Date </h5> </label>
                  <input type="date" name="end" id="end">
                  <br> <br>
                  
                 <div>
                    <h4> Services :- </h4>
                    <table>
                      <?php
                     include '../../conn.php';
                      $results = mysqli_query($db, "SELECT * FROM tbl_service_events;");
                      while ($row = mysqli_fetch_array($results)) {
                          $amt[$row['SrvEveID']]=$row['SrvEveCharges'];
                          $serv=$row['SrvEveName']; 
                          $sid=$row['SrvEveID'];  
                          // echo '<script> alert("'.$serv.'");</script>';
                          ?>
                      <tr>
                        <td>
                          <label for="<?php echo $serv;?>"> <?php echo ucwords($serv); ?> </label>
                        </td>
                        <td>
                          <input type="checkbox" id="<?php echo $serv;?>" onclick="est(this);" name="services[]" value="<?php echo $sid;?>">
                        </td>
                      </tr> 
                    <?php
                    }
                ?>
                    </table> <br> 
                    <label for="total"> <h5> Estimated Budget </h5> </label>
                    <input type="number" id="total" name="total" value="0" readonly>
                    <!-- <h5> Estimated Budget = <span id="est"> 0 </span> </h5> -->
                    <br> <br>
                  </div>
                </div>
                <label for="instruction"> <h4> Special Instructions </h4> </label>
                <input type="text" name="instruction" id="instruction"  class="book"> <br> <br>
                  <p style="font-size: small;"> *There are Booking Charges of 100/- for Confirmation of your Booking. </p>
                  <div class=" d-flex justify-content-center ">
                    <button type="submit" name="submit">
                      Proceed To Pay
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- Backend -->

  <?php

  if(isset($_POST['submit'])) {
    $event=$_POST['event'];
    $personalized=$_POST['personalized'];
    $uid=$_SESSION['uid'];
    $bstart=$_POST['start'];
    $bend=$_POST['end'];
    $baddress=$_POST['baddress'];
    $total=$_POST['total'];
    $instruction=$_POST['instruction'];
    $arr=$_POST['services'];
    $SrvEveID=implode(",",$arr);
    // echo "<script> alert(\"$SrvEveID\");</script>";
    // echo "<script> alert(\"$bend\");</script>";


    $sql="INSERT INTO `booking`(`event`, `personalized`, `uid`, `start`, `end`, `baddress`, `instructions`, `bstatus`, `totalamount`, `SrvEveID`) 
    VALUES ('$event','$personalized','$uid','$bstart','$bend','$baddress','$instruction','pending','$total','$SrvEveID')";
    mysqli_query($db, $sql);
    $_SESSION['message']="Your Booking Request was Placed Successfully!!!";  
    echo "<script>document.location.href='clientbooking.php';</script>";
  }
?>

<script> 
  var values=[];
  var count=0;
  var budget=0;
  var sum=0;
  var rs=0;


  var add = (a, b) => {
    // alert(a+b)
    // console.log(a+b)
    return (a+b)
  }
  
  let subt = (x, y) => {
    // alert(x-y)
    // console.log(x-y)
    return (x-y)
  }

  function est(checkbox) {
    if(checkbox.checked){
      values.push(checkbox.value);
      count++;
      var arr = <?php echo json_encode($amt); ?>;
      for (var key in arr) {
        rs = Number(arr[key]);
        if(key == checkbox.value) {
          budget=add(budget,rs);
          document.getElementById('total').value=budget; 
        }
      }
      // alert(values);
      // alert(count);
    }
    
    
    if(!checkbox.checked){
      values.splice(values.indexOf('checkbox.value'),1);
      count--;
      var arr = <?php echo json_encode($amt); ?>;
      for (var key in arr) {
        rs = Number(arr[key]);
        if(key == checkbox.value) {
          budget=subt(budget,rs);
          document.getElementById('total').value=budget; 
        }
      }
      // alert(values);
      // alert(count);
    }
  
    // str = values.toString();
    // alert(str);
    // pass(str);
    
  }

  
</script>


 <?php include '../../footers/footer.php'; ?>

</body>
</html>