<header class="header_section">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 offset-lg-0">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.php">
                <img src="../../images/logo.jpg" alt="" style="border-radius: 10px" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav">
                    <li  id="index" class="nav-item">
                        <a class="nav-link" id="ind" href="../../index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="register">
                        <a class="nav-link" id="reg" href="register.php">Register <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" id="login">
                        <a class="nav-link"  id="log" href="login.php">Login </a>
                    </li>
                    <li class="nav-item" id="about">
                        <a class="nav-link"  id="ab" href="about.php"> About </a>
                    </li>
                    <li class="nav-item" id="portfolio">
                        <a class="nav-link"  id="port" href="portfolio.php"> Portfolio </a>
                    </li>
                    <li class="nav-item" id="feedbacks">
                        <a class="nav-link"  id="feed" href="feedbacks.php"> Feedbacks </a>
                    </li>
                    <li class="nav-item" id="contact">
                        <a class="nav-link"  id="cont" href="contact.php">Contact Us</a>
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

    if(page=="index.php") {
        document.getElementById("index").className = "nav-item active";
        document.getElementById("ind").href = "index.php";
        document.getElementById("logo").src="images/logo.jpg";
        document.getElementById("ind").href="index.php";
        document.getElementById("log").href="pages/visitor/login.php";
        document.getElementById("reg").href="pages/visitor/register.php";
        document.getElementById("ab").href="pages/visitor/about.php";
        document.getElementById("port").href="pages/visitor/portfolio.php";
        document.getElementById("feed").href="pages/visitor/feedbacks.php";
        document.getElementById("cont").href="pages/visitor/contact.php";
    }
    if(page=="register.php") {
        document.getElementById("register").className = "nav-item active";

    }
    if(page=="login.php") {
        document.getElementById("login").className = "nav-item active";
    }
    if(page=="about.php") {
        document.getElementById("about").className = "nav-item active";
    }
    if(page=="portfolio.php") {
        document.getElementById("portfolio").className = "nav-item active";
    }
    if(page=="feedbacks.php") {
        document.getElementById("feedbacks").className = "nav-item active";
    }
    if(page=="contact.php") {
        document.getElementById("contact").className = "nav-item active";
    }
</script>