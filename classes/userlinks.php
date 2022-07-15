<script>
        var path = window.location.pathname;
        var page = path.split("/").pop();
</script>
<?php
    $page="<script> document.write(page)</script>";
    #echo "page = $page";
    switch ($page) {
      case "userhome.php" :
      echo '
      <div class="hero_area">
          <header class="header_section">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-11 offset-lg-1">
                  <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                      <img src="images/logo.png" alt="">
                      <span>
                        Abhay Shah
                      </span>
                    </a>
                  </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">

                              <li class="nav-item active">
                                <a class="nav-link" href="userhome.php"> Dash Board <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" href="bestpics.php"> Best Pics <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item ">
                                <a class="nav-link" href="covers.php"> Album Covers <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="preview.php"> Album Preview </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="folders.php"> Media Folders  </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="custome.php"> Customized Products </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="../index.php"> Log Out </a>
                              </li>
                            </ul>
                          </div>
                        </div>

                      </nav>
                    </div>
                  </div>
                </div>
              </header> ';
              break;

    case "bestpics.php" : 
    echo '
    <div class="hero_area">
        <header class="header_section">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-11 offset-lg-1">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="">
                    <span>
                      Abhay Shah
                    </span>
                  </a>
                </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                          <ul class="navbar-nav  ">

                            <li class="nav-item">
                              <a class="nav-link" href="userhome.php"> Dash Board <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                            <a class="nav-link" href="bestpics.php"> Best Pics <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                              <a class="nav-link" href="covers.php"> Album Covers <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="preview.php"> Album Preview </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="folders.php"> Media Folders  </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="custome.php"> Customized Products </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="../index.html"> Log Out </a>
                            </li>
                          </ul>
                        </div>
                      </div>

                    </nav>
                  </div>
                </div>
              </div>
            </header> ';
            break;

    case "covers.php" :
      echo '
      <div class="hero_area">
          <header class="header_section">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-11 offset-lg-1">
                  <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                      <img src="images/logo.png" alt="">
                      <span>
                        Abhay Shah
                      </span>
                    </a>
                  </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">

                          <li class="nav-item">
                            <a class="nav-link" href="userhome.php"> Dash Board <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="bestpics.php"> Best Pics <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="covers.php"> Album Covers <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="preview.php"> Album Preview </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="folders.php"> Media Folders  </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="custome.php"> Customized Products </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="../index.html"> Log Out </a>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </nav>
                </div>
              </div>
            </div>
          </header> ';
          break;

      case "preview.php" :
      echo '
      <div class="hero_area">
        <header class="header_section">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-11 offset-lg-1">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="">
                    <span>
                      Abhay Shah
                    </span>
                  </a>
                </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                      <ul class="navbar-nav  ">

                        <li class="nav-item">
                          <a class="nav-link" href="userhome.php"> Dash Board <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="bestpics.php"> Best Pics <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link" href="covers.php"> Album Covers <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="preview.php"> Album Preview </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="folders.php"> Media Folders  </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="custome.php"> Customized Products </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="../index.html"> Log Out </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                </nav>
              </div>
            </div>
          </div>
        </header> ';
        break;

    case "folders.php" :
      echo '
      <div class="hero_area">
          <header class="header_section">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-11 offset-lg-1">
                  <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                      <img src="images/logo.png" alt="">
                      <span>
                        Abhay Shah
                      </span>
                    </a>
                  </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">

                          <li class="nav-item">
                            <a class="nav-link" href="userhome.php"> Dash Board <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="bestpics.php"> Best Pics <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="covers.php"> Album Covers <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="preview.php"> Album Preview </a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="folders.php"> Media Folders  </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="custome.php"> Customized Products </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="../index.html"> Log Out </a>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </nav>
                </div>
              </div>
            </div>
          </header> ';
          break;
    case "custome.php" :
      echo '
      <div class="hero_area">
          <header class="header_section">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-11 offset-lg-1">
                  <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                      <img src="images/logo.png" alt="">
                      <span>
                        Abhay Shah
                      </span>
                    </a>
                  </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">

                          <li class="nav-item">
                            <a class="nav-link" href="userhome.php"> Dash Board <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="bestpics.php"> Best Pics <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link" href="covers.php"> Album Covers <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="preview.php"> Album Preview </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="folders.php"> Media Folders  </a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="custome.php"> Customized Products </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="../index.html"> Log Out </a>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </nav>
                </div>
              </div>
            </div>
          </header> ';
          break;
    }
?>