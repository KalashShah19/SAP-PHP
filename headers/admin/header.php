<header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-11 offset-lg-0">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="adminprofile.php">
              <?php 
                    $uid=$_SESSION['uid'];
                    include '../../conn.php';
                    $sql="select * from users where uid=$uid;";
                    $results=mysqli_query($db, $sql);
                    $data = mysqli_fetch_array($results);
                    $image = $data['profile'];
                  ?>
                <img src="../../images/profiles/<?php echo $image; ?>" style="border-radius: 50px" alt="">
                </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav">
                    <li class="nav-item" id="apply">
                      <a class="nav-link" href="adminleave.php"> Apply Leave <span class="sr-only">(current)</span></a>
                    </li>
                  <li class="nav-item" id="booking">
                      <a class="nav-link" href="adminbooking.php"> Booking Requests <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="product">
                      <a class="nav-link" href="adminorders.php"> Product Orders <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="requests">
                        <a class="nav-link" href="adminleaverequests.php"> Leave Requests <span class="sr-only">(current)</span></a>
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
    // alert(page);

    if(page=="adminbooking.php") {
        document.getElementById("booking").className = "nav-item active";
    }
    if(page=="adminorders.php") {
        document.getElementById("product").className="nav-item active";
    }
    if(page=="adminleave.php") {
        document.getElementById("apply").className="nav-item active";
    }
    if(page=="adminleaverequests.php") {
        document.getElementById("requests").className="nav-item active";
    }

    function logout() {
        alert("Logging Out....");
    }
</script>
