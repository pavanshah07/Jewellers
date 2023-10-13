<?php

    $search = $_POST['search'];

    require_once "config.php";

    $sql = "select * from `product` where pname like '%{$search}%'"; 
    $result = mysqli_query($link,$sql);
    if(mysqli_num_rows($result) > 0){

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
                      <h6>Price <span>'.$pprice.'</span></h6>
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
    else{
        echo '<h2 style="margin-left: 40%;"> No Records Found !!!</h2>';
    }  

?>