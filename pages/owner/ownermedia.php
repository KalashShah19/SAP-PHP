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

    .edit{
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
            Media Management
          </h2>
          <p>
            Provide Your Clients with Amazing Photos and Videos 
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-11 mx-auto">
                <div class="contact_form-container"> 
                    <center>
                    <hr> <h3> Upload New Media </h3> <br>

                        <table>
                            <form method="POST" enctype="multipart/form-data">
                                <tr> <td>
                                <label for="client"> Select Client : </label>
                                </td> <td>
                                <select name="client" id="client">
                                        <?php 
                                include '../../conn.php';
                                $sql="select * from users where usertype!='admin';";
                                $results = mysqli_query($db,$sql);
                                while ($data = mysqli_fetch_array($results)) { ?>
                            <option value="<?php echo $data['uid']; ?>"> <?php echo $data['fname'] ?> </option>
                            <?php } ?>
                            </select> <br> <br>
                        </td> </tr>
                        
                        <tr> <td>
                        <label for="folder"> Select Folder : </label>
                        </td> <td>
                        <select name="folder" id="folder">
                          <option value="portfolio/"> Portfolio </option>
                          <option value="prewedding/"> Pre Wedding </option>
                          <optgroup label="Wedding">    
                            <option value="haldi/"> Haldi </option>
                            <option value="mehndi/"> Mehndi </option>
                            <option value="vidai/"> Vidai </option>
                            <option value="phera/"> Phera </option>
                            <option value="mandap muhrat/"> Mandap Muhrat </option>
                            <option value="kanku/"> Kanku </option>
                          </optgroup>
                            <option value="anniversary/"> Anniversary </option>
                            <option value="birthday/"> Birthday </option>
                            <option value="opening/"> Inogration/Opening </option>
                            <option value="vastu poojan/"> Vastu Poojan </option>
                            <option value="party/"> Party </option>
                            <option value="competetion/"> Competetion </option>
                            <option value="school function/"> School Function </option>
                            <option value="corperate/"> Corperate </option>
                            <option value="portfolio shoot/"> Portfolio Shoot </option>
                            <option value="festival shoot/"> Festival Shoot </option>
                            <option value="concert/"> Music / Concert / Opera  </option>
                            <option value="sports tournament/"> Sports Tournament </option>
                            <option value="graduation/"> Graduation </option>
                            <option value="funeral/"> Funeral </option>
                            <option value="festival shoot/"> Festival Shoot </option>
                            <option value="award ceremony/"> Award Ceremony </option>
                            <option value="political event/"> Political Event </option>
                        </select> <br>
                        </td> </tr>
                        
                        <tr> <td>
                        <label for="media"> Choose Media : </label> 
                        </td> <td>
                        <input type="file" name="media[]" id="media" style="width:300px" multiple> <br>
                        </td> </tr>
                        <tr> <td colspan="2" style="text-align:center;"> 
                            <button type="submit" name="submit"> Upload </button>
                        </td></tr>
                      </table> <br><br>
                      
                    <hr> <h3> Manage Client Media </h3> <br>
                      
                    <label> Order By : </label>  
                    <select name="orderby">
                      <option value="client"> Client </option>
                      <option value="folder"> Folder </option>
                    </select>
                    <button name="view"> View </button>
                    </form>
                      
                      <table class="edit" id="records">
                        <tr class="edit">
                          <th class="edit"> First Name </th>
                          <th class="edit"> Media Name </th>
                          <th class="edit"> Media Folder </th>
                          <th  class="edit" colspan="3"> Actions </th>
                        </tr>
                    <?php 
                    if(isset($_POST['view'])){
                      include '../../conn.php';
                      echo "<script> window.location.href='ownermedia.php#records'; </script>";
                      if($_POST['orderby'] == "client"){ 
                        $sql="select * from media join users on users.uid=media.uid where usertype!='admin' order by fname asc";
                      }
                      else {
                        $sql="select * from media join users on users.uid=media.uid where usertype!='admin' order by mediafolder asc";
                      }
                      $results = mysqli_query($db,$sql);
                      while ($data = mysqli_fetch_array($results)) { $mid=$data['mid']; ?>
                        <tr class="edit">
                          <td class="edit">
                            <?php echo $data['fname']; ?>
                          </td>
                          
                          <td class="edit">
                            <?php echo $data['medianame']; ?>
                          </td>
                          
                          <td class="edit">
                            <?php echo $data['mediafolder']; ?>
                          </td>
                          
                          <td class="edit">
                            <a style="border:1px solid black;background-color:lime;color:black"  href="ownerpreview.php?pre=<?php echo $data['mid']; ?>"> Preview </a>
                          </td>
                          <td>
                            <a style="border:1px solid black;background-color:red;color:white" href="ownermedia.php?delete=<?php echo $data['mid'];?>"> Delete </a>
                          </td>
                        </tr> 
                        <?php } } ?>
                      </table> <br> <hr>
                    </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

    <!-- Backend code  -->

    <?php
    function compressImage($source, $destination, $quality) { 
      // Get image info 
      $imgInfo = getimagesize($source); 
      $mime = $imgInfo['mime']; 
       
      // Create a new image from file 
      switch($mime){ 
          case 'image/jpeg': 
              $image = imagecreatefromjpeg($source); 
              break; 
          case 'image/png': 
              $image = imagecreatefrompng($source); 
              break; 
          case 'image/gif': 
              $image = imagecreatefromgif($source); 
              break; 
          default: 
              $image = imagecreatefromjpeg($source); 
      } 
       
      // Save image 
      imagejpeg($image, $destination, $quality); 
       
      // Return compressed image 
      return $destination; 
  } 
   
   if(isset($_POST['submit'])){
      ini_set('upload_max_filesize', '900M');
      ini_set('post_max_size', '900M');
      $errors = array();
      $dir="../../images/";
      $folder = $_POST['folder'];
      $uid = $_POST['client'];
      $countfiles = count($_FILES['media']['name']);
      for($i=0;$i<$countfiles;$i++) {
        $filename = $_FILES['media']['name'][$i];
      
      $file_name = $_FILES['media']['name'][$i];
      $file_size = $_FILES['media']['size'][$i];
      $file_tmp = $_FILES['media']['tmp_name'][$i];
      $file_type = $_FILES['media']['type'][$i];
      $arr = explode('.',$_FILES['media']['name'][$i]);
      $file_ext = strtolower(end($arr));
      $target_file = $dir.$folder . basename($_FILES["media"]["name"][$i]);
      $path = $dir.$folder.$file_name;
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="Extension not allowed, please choose a JPEG or PNG file.";
      }

      if (file_exists($target_file)) {
        $errors[] = "file already exists.";
      } 
      
      if(empty($errors)==true){
        if($file_size > 5000000 ) {
          $compressedImage = compressImage($file_tmp, $path, 77); 
            if($compressedImage){ 
             mysqli_query($db, "insert into media (medianame,mediafolder,uid,selected) values('$file_name', '$folder', $uid,'no');");
             echo "Success ";
          } else{
            echo "Error, while Compressing Image.";
          }
        }else{
          if(move_uploaded_file($file_tmp,$path)){
            mysqli_query($db, "insert into media (medianame,mediafolder,uid,selected) values('$file_name', '$folder', $uid,'no');");
            echo "Success ";
          }else{
            echo "Error, while Uploading Image.";
          }
        }
      }
      else{
        print_r($errors);
      }
    }
   }

   if(isset($_GET['delete'])) {
      $mid = $_GET['delete'];
      $res = mysqli_query($db, "select * from media where mid = $mid");
      $data = mysqli_fetch_array($res);
      $path = "../../images/".$data['mediafolder'].$data['medianame'];
      unlink('$path');
      mysqli_query($db, "delete from media where mid = $mid;");
      header('loaction:ownermedia.php');
  }
?>


    
  <!-- footer section -->
  <?php
    include '../../footers/footer.php';
  }
  ?>
 
</body>

</html>