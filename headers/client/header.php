  <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-11 offset-lg-0">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="clientprofile.php">
                  <?php 
                    $uid=$_SESSION['uid'];
                    include '../../conn.php';
                    $sql="select * from users where uid=$uid;";
                    $results=mysqli_query($db, $sql);
                    $data = mysqli_fetch_array($results);
                    $image = $data['profile'];
                  ?>
                <img src="../../images/profiles/<?php echo $image; ?>"  style="border-radius: 50px" alt="">
                </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav">
                    <li class="nav-item" id="home">
                      <a class="nav-link" href="clienthome.php"> Dash Board <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="booking">
                      <a class="nav-link" href="clientbooking.php"> Shoot Booking <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="selected">
                      <a class="nav-link" href="clientselectedpics.php"> Selected Pics <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="bill">
                      <a class="nav-link" href="clientpayment.php"> Bill Payment <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="feedback">
                      <a class="nav-link" href="clientreview.php"> FeedBack / Review </a>
                    </li>
                    <li class="nav-item" id="media">
                      <a class="nav-link" href="clientfolders.php"> Media Folders  </a>
                    </li>
                    <li class="nav-item" id="custom">
                      <a class="nav-link" href="clientproducts.php"> Customized Products </a>
                    </li>
                    <li class="nav-item" id="cart">
                      <a class="nav-link" href="clientcart.php"> My Cart </a>
                    </li>
                    <li class="nav-item" id="orders">
                        <a class="nav-link" href="clientorders.php"> My Orders </a>
                      </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../../index.php" onclick="logout()"> Log Out </a>
                    </li>
                  </ul>
                </div>

              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

<script>
  var path = window.location.pathname;
    var page = path.split("/").pop();

    if(page=="clienthome.php") {
        document.getElementById("home").className = "nav-item active";
    }
    else if(page=="clientbooking.php") {
        document.getElementById("booking").className = "nav-item active";
    }
    else if(page=="clientselectedpics.php") {
        document.getElementById("selected").className = "nav-item active";
    }
    else if(page=="clientpayment.php") {
        document.getElementById("bill").className = "nav-item active";
    }
    else if(page=="clientreview.php") {
        document.getElementById("feedback").className = "nav-item active";
    }
    else if(page=="clientfolders.php") {
        document.getElementById("media").className = "nav-item active";
    }
    else if(page=="clientproducts.php") {
        document.getElementById("custom").className = "nav-item active";
    }
    else if(page=="clientorders.php") {
        document.getElementById("orders").className = "nav-item active";
    }
    else if(page=="clientcart.php") {
        document.getElementById("cart").className = "nav-item active";
    }

    function logout() {
        alert("Logging Out....");
    }
</script>