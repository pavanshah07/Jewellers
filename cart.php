<?php
// Initialize the session
session_start();
$cl_id = $_SESSION["id"];
// Check if the user is already logged in, if yes then redirect him to welcome page
if(!(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
    header("location: login.php");
    exit;
}

include "config.php";
?>

<?php

if(isset($_POST['add_cart'])){

    $pid = $_POST['id'];

    $sql = "select * from `product` where id='$pid'";
    $result = mysqli_query($link,$sql);

        if($result){

            while($row=mysqli_fetch_assoc($result)){

              $pid=$row['id'];
              $pname=$row['pname'];
              $pprice=$row['pprice'];
              $pimage=$row['pimage'];

            }
        }

    $query = "insert into cart(cl_id,pname,pprice,pimage) values('$cl_id','$pname','$pprice','$pimage')";
    $result1 = mysqli_query($link,$query);
    if($result1){
        echo '
      <script type = "text/javascript">
	      alert("Product Added To Cart Successfully");
				window.location = "addcart.php";
			</script>
		  ';
    }

}

?>