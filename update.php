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

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $sql = "select * from `product` where id=$id";
    $result = mysqli_query($link,$sql);

    if($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $pname=$row['pname'];
        $pprice=$row['pprice'];
    }
}

?>



<?php
    if(isset($_POST['update_data'])){
        if(!empty($_POST['pname']) && !empty($_POST['pprice'])){

                $filename = $_FILES['pimage']['name'];
                $tempname = $_FILES['pimage']['tmp_name'];
                $folder = "./image/".$filename;

                
            $id = $_POST['id'];
            $pname = $_POST['pname'];
            $pprice = $_POST['pprice'];

            $query = "update `product` set `pname`='$pname',`pprice`='$pprice',`pimage`='$filename' where `id`='$id'";
            $run = mysqli_query($link,$query);

            if(move_uploaded_file($tempname,$folder)){
                echo '
                <script type = "text/javascript">
	                alert("Product Updated Successfully");
				    window.location = "product.php";
			    </script>
		        ';
            }
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
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

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
                                <a href="addproduct.php">Add Product</a>
                                <a href="logout.php">Log-out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <form style="width: 50%; margin-top: 50px;" class="container" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product Name</label>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $pname ?>" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text" class="form-control" id="pprice" name="pprice" value="<?php echo $pprice ?>">
        </div>
        <div class="mb-3">
            <label for="pimage" class="form-label">Change image</label>
            <!-- <img src="./image/" style="width: 10%;"/> -->
            <input type="file" class="form-control" id="pimage" name="pimage"/>
        </div>
        <button type="submit" class="btn btn-primary" name="update_data">Update</button>
    </form>

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
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to
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
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </footer>

    </main>
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>

</body>

</html>