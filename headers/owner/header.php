<header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-11 offset-lg-0">
            <nav class="navbar navbar-expand-lg custom_nav-container">
              <a class="navbar-brand" href="ownerprofile.php">
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
                    <li class="nav-item" id="clients">
                      <a class="nav-link" href="ownerclients.php"> Manage Profiles <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="book">
                      <a class="nav-link" href="ownerbooking.php"> Manage Bookings <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="media">
                      <a class="nav-link" href="ownermedia.php"> Manage Media <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="req">
                        <a class="nav-link" href="ownerleaverequests.php"> Manage Leaves <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="manage">
                        <a class="nav-link" href="ownermanageproduct.php"> Manage Products <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="orders">
                      <a class="nav-link" href="ownerorders.php"> Product Orders <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="leaves">
                        <a class="nav-link" href="ownerleaves.php"> Leave Statistics <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item" id="history">
                        <a class="nav-link" href="ownerhistory.php"> History / Past <span class="sr-only">(current)</span></a>
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

    if(page=="ownerclients.php") {
        document.getElementById("clients").className = "nav-item active";
    }
    else if(page=="ownerbooking.php") {
        document.getElementById("book").className="nav-item active";
    }
    else if(page=="ownermedia.php") {
        document.getElementById("media").className="nav-item active";
    }
    else if(page=="ownerleaverequests.php") {
        document.getElementById("req").className="nav-item active";
    }
    else if(page=="ownermanageproduct.php") {
        document.getElementById("manage").className="nav-item active";
    }
    else if(page=="ownerorders.php") {
        document.getElementById("orders").className="nav-item active";
    }
    else if(page=="ownerleaves.php") {
        document.getElementById("leaves").className="nav-item active";
    }
    else if(page=="ownerhistory.php") {
        document.getElementById("history").className="nav-item active";
    }

    function logout() {
        alert("Logging Out....");
    }
</script>
