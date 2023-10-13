<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
    header("location: login.php");
    exit;
}
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


  <script>
    let myfun1 = () => {
      document.getElementById("btn-a2").classList.add("unactive");
      document.getElementById("btn-a3").classList.add("unactive");
      document.getElementById("btn-a4").classList.add("unactive");
      document.getElementById("btn-a5").classList.add("unactive");

      document.getElementById("btn-a1").classList.add("active");
      document.getElementById("btn-a1").classList.remove("unactive");
    }

    let myfun2 = () => {
      document.getElementById("btn-a1").classList.add("unactive");
      document.getElementById("btn-a3").classList.add("unactive");
      document.getElementById("btn-a4").classList.add("unactive");
      document.getElementById("btn-a5").classList.add("unactive");


      document.getElementById("btn-a2").classList.add("active");
      document.getElementById("btn-a2").classList.remove("unactive");
    }

    let myfun3 = () => {
      document.getElementById("btn-a1").classList.add("unactive");
      document.getElementById("btn-a2").classList.add("unactive");
      document.getElementById("btn-a4").classList.add("unactive");
      document.getElementById("btn-a5").classList.add("unactive");

      document.getElementById("btn-a3").classList.add("active");
      document.getElementById("btn-a3").classList.remove("unactive");
    }

    let myfun4 = () => {
      document.getElementById("btn-a1").classList.add("unactive");
      document.getElementById("btn-a2").classList.add("unactive");
      document.getElementById("btn-a3").classList.add("unactive");
      document.getElementById("btn-a5").classList.add("unactive");

      document.getElementById("btn-a4").classList.add("active");
      document.getElementById("btn-a4").classList.remove("unactive");
    }

    let myfun5 = () => {
      document.getElementById("btn-a1").classList.add("unactive");
      document.getElementById("btn-a2").classList.add("unactive");
      document.getElementById("btn-a3").classList.add("unactive");
      document.getElementById("btn-a4").classList.add("unactive");

      document.getElementById("btn-a5").classList.add("active");
      document.getElementById("btn-a5").classList.remove("unactive");
    }

  </script>

  <style>
    .active {
      display: block;
    }

    .unactive {
      display: none;
    }
  </style>
</head>

<body>

  <!-- header section strats -->
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
  <!-- end header section -->

                    <!-- start search bar -->
  <div id="search-bar" style="display: flex;
                              justify-content: center;
                              align-items: baseline;
                              gap: 5px;
                              margin: 20px 33% 0;">
    <label for="search" style="background: #28a745;
                              color: #fff;
                              padding: 6px 8px;
                              border-radius: 5px;">Search</label>
    <input type="text" class="form-control" id="search" name="search">    
  </div>
  <!-- end search bar -->

  <div class="container" style="
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin: 20px 0 0 45px;">
    <button type="button" id="btn1" class="btn btn-secondary" onclick="myfun1()">Rings</button>
    <button type="button" id="btn2" class="btn btn-secondary" onclick="myfun2()">Necklaces</button>
    <button type="button" id="btn3" class="btn btn-secondary" onclick="myfun3()">Pendant-Sets</Pendant-Set></button>
    <button type="button" id="btn5" class="btn btn-secondary" onclick="myfun5()">Ear-Rings</button>
    <button type="button" id="btn4" class="btn btn-secondary" onclick="myfun4()">Add New Products</button>
  </div>
  <!-- shop section -->
  <section class="shop_section layout_padding active" id="btn-a1">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Gold Rings
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Goldrings Main/1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹200
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Goldrings Main/2.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹300
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Goldrings Main/3.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹110
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Goldrings Main/4.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹45
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Goldrings Main/6.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹95
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Goldrings Main/7.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹70
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Goldrings Main/8.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹400
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Goldrings Main/11.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹450
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="shop.php">
          View All Products
        </a>
      </div>
    </div>
  </section>
  <!-- end shop section -->

  <!-- shop section 2-->
  <section class="shop_section layout_padding unactive" id="btn-a2">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Gold Necklaces
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Necklace Main/1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Necklace
                </h6>
                <h6>
                  Price
                  <span>
                    ₹200
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Necklace Main/2.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Necklace
                </h6>
                <h6>
                  Price
                  <span>
                    ₹300
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Necklace Main/3.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Necklace
                </h6>
                <h6>
                  Price
                  <span>
                    ₹110
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Necklace Main/4.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Necklace
                </h6>
                <h6>
                  Price
                  <span>
                    ₹45
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Necklace Main/5.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Necklace
                </h6>
                <h6>
                  Price
                  <span>
                    ₹95
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Necklace Main/6.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Necklace
                </h6>
                <h6>
                  Price
                  <span>
                    ₹70
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Necklace Main/7.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Necklace
                </h6>
                <h6>
                  Price
                  <span>
                    ₹400
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Necklace Main/8.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Necklace
                </h6>
                <h6>
                  Price
                  <span>
                    ₹450
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="shop.php">
          View All Products
        </a>
      </div>
    </div>
  </section>
  <!-- end shop section 2-->

  <!-- shop section 3-->
  <section class="shop_section layout_padding unactive" id="btn-a3">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Gold Pendant-Sets
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Pendant-Set Main/1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Pendant-Set
                </h6>
                <h6>
                  Price
                  <span>
                    ₹200
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Pendant-Set Main/2.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Pendant-Set
                </h6>
                <h6>
                  Price
                  <span>
                    ₹300
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Pendant-Set Main/4.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Pendant-Set
                </h6>
                <h6>
                  Price
                  <span>
                    ₹110
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Pendant-Set Main/6.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Pendant-Set
                </h6>
                <h6>
                  Price
                  <span>
                    ₹45
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Pendant-Set Main/7.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Pendant-Set
                </h6>
                <h6>
                  Price
                  <span>
                    ₹95
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Pendant-Set Main/8.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Pendant-Set
                </h6>
                <h6>
                  Price
                  <span>
                    ₹70
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Pendant-Set Main/9.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Pendant-Set
                </h6>
                <h6>
                  Price
                  <span>
                    ₹400
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Pendant-Set Main/10.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Pendant-Set
                </h6>
                <h6>
                  Price
                  <span>
                    ₹450
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="shop.php">
          View All Products
        </a>
      </div>
    </div>
  </section>
  <!-- end shop section 3-->

  <!-- shop section 4-->
  <section class="shop_section layout_padding unactive" id="btn-a5">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Gold Ear-rings
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Earrings Main/1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ear-ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹200
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Earrings Main/2.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ear-ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹300
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Earrings Main/3.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ear-ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹110
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Earrings Main/4.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ear-ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹45
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Earrings Main/5.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ear-ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹95
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Earrings Main/6.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ear-ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹70
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Earrings Main/7.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ear-ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹400
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/Earrings Main/8.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ear-ring
                </h6>
                <h6>
                  Price
                  <span>
                    ₹450
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
              <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="shop.php">
          View All Products
        </a>
      </div>
    </div>
  </section>
  <!-- end shop section 4-->

    <!-- shop section 5-->
    <section class="shop_section layout_padding unactive" id="btn-a4">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Added Products
        </h2>
      </div>
      <div class="row" id="row4">




        <?php
          require_once "config.php";

          $sql = "select * from `product`"; 
          $result = mysqli_query($link,$sql);
          if($result){

            while($row=mysqli_fetch_assoc($result)){
              $id=$row['id'];
              $pname=$row['pname'];
              $pprice=$row['pprice'];
              $pimage=$row['pimage'];

              echo '<div class="col-sm-6 col-md-4 col-lg-3">
                      <div class="box">
                        
                          <div class="img-box">
                            <input type="hidden" name="id" value="'.$id.'"/>
                            <img src="./image/'.$pimage.'" alt="gggg">
                          </div>
                          <div class="detail-box">
                            <h6>'.$pname.'</h6>
                            <h6>Price <span> ₹'.$pprice.'</span></h6>
                          </div>
                          <div class="new">
                            <span>New</span>
                          </div>
                          <form action="cart.php" method="post">
                            <input type="hidden" name="id" value='.$id.'>
                            <button style="width:100%;" type="submit" name="add_cart" class="btn btn-danger">Add to cart</button>
                          </form>
                      </div>
                    </div>';
            }
          }
        ?>
      </div>
      <div class="btn-box">
        <a href="shop.php">
          View All Products
        </a>
      </div>
    </div>
  </section>
  <!-- end shop section 5-->

  <!-- info section -->
  <section class="info_section layout_padding2">
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
  <!-- footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  
  <script type="text/javascript">

document.querySelector("#search").addEventListener("keyup",serachfun =() =>{
  
  var search_insert = document.querySelector("#search").value;
  
  $.ajax({
    url: "search.php",
    type: "POST",
    data: {search:search_insert},
    success: function(data){
      $("#row4").html(data);
    }
  })
});


</script>

</body>

</html>