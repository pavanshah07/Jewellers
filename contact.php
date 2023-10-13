<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
    header("location: login.php");
    exit;
}


require_once "config.php";
// Check connection
if(isset($_POST['submit'])){
if(!empty($_POST['pname']) && !empty($_POST['email']) && !empty($_POST['comment'])){
    $pname = $_POST['pname'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $query = "insert into persons(pname,email,comment) values('$pname','$email','$comment')";
    $run = mysqli_query($link,$query) or die(mysqli_error());
    echo '
      <script type = "text/javascript">
	      alert("Contact Details Send Successfully");
				window.location = "contact.php";
			</script>
		  ';
}
else{
  echo '
			<script type = "text/javascript">
				alert("All Fields Are Required");
				window.location = "contact.php";
			</script>
		';

}
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>RADHE JEWELLERS</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style");
    }
</script>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
  </style>

</head>

<body>

  <header class="header_section innerpage_header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span>
            RADHE JEWELLERS
          </span>
        </a>
        <div class="" id="">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="shop.php">Shop</a>
                <a href="blog.php">Blog</a>
                <a href="contact.php">Contact</a>
                <a style="<?php 
                
                $username = $_SESSION["username"]; if($username=='admin'){ echo 'display: block;' ; }else{
                  echo 'display: none;' ; }?>" href="product.php">Add Product</a>
                <a href="logout.php">Log-out</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <div class="container" style="height: 35rem; margin-top: 50px;">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119077.85307739899!2d72.63849431640622!3d21.145118000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be05274e362b3e3%3A0x672dfe4f512e4d87!2sSDJ%20International%20College!5e0!3m2!1sen!2sin!4v1659960462643!5m2!1sen!2sin"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="images/img1.webp" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>

                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                      <div class="d-flex align-items-center mb-2 pb-1">
                        <span class="h1 fw-bold mb-0">GET IN TOUCH</span>
                      </div>

                      <h5 class="fw-normal mb-2 pb-3" style="letter-spacing: 1px;">Comment Your Opinion</h5>

                      <div class="form-outline mb-2">
                        <input type="text" name="pname" id="form2Example17" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example17">Name</label>
                      </div>

                      <div class="form-outline mb-2">
                        <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example17">Email address</label>
                      </div>

                      <div class="form-outline mb-2">
                        <textarea name="comment" class="form-control form-control-lg" cols="70" rows="2"></textarea>
                        <label class="form-label" for="form2Example27">Comment</label>
                      </div>

                      <div class="pt-1 mb-4">
                        <button class="btn btn-dark  btn-block" type="submit" name="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="info_section layout_padding2" style="margin-top: 50px;">
      <div class="container">
        <div class="row info_form_social_row">
          <div class="col-md-8 col-lg-9">
            <div class="info_form">
              <form action="">
                <input type="email" placeholder="Enter your email">
                <button>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-4 col-lg-3">

            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h4>
                Menu
              </h4>
              <div class="info_links_menu">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="shop.html">Shop</a>
                <a href="blog.html">Blog</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_insta">
              <h4>
                Instagram
              </h4>
              <div class="insta_box">
                <div class="img-box">
                  <img src="images/p1.png" alt="">
                </div>
                <p>
                  long established fact that a reader
                </p>
              </div>
              <div class="insta_box">
                <div class="img-box">
                  <img src="images/p2.png" alt="">
                </div>
                <p>
                  long established fact that a reader
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_detail">
              <h4>
                About Us
              </h4>
              <p class="mb-0">
                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                distribution of letters, as opposed to
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h4>
              Contact Us
            </h4>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          Copyright ©2022 All rights reserved | Made By @Mihir Soni
        </p>
      </div>
    </footer>

  </main>
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>

</body>

</html>