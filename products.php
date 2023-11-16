
<?php
  session_start();
  
  if(!(isset($_SESSION['name'])&&isset($_SESSION['email'])))
  {
    header('Location: register.php');
  }
  include "includes/dbconnect.php";
?>

<!DOCTYPE html>
<html>
  <?php include "includes/css_header.php";
        if(($_SESSION['email']==""))
        {
          include "includes/header_admin.php";
        }
        else
        {
        include "includes/header_postlogin.php";
        }
   ?>
  

  <div class="container ">
    <h1 class="text-center font-80px margin-bottom50"> <b>Welcome to ElGom3a Market</b></h1>

    <!--All products with 3/12 parts each-->
    <div class="row">
      <?php 
        $query="SELECT * FROM `products`";
        $result=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($result))
        {
          echo '<div class="col-md-3">
                  <div class="product-tab">
                    <img src="images/'.$row['product_image'].'" class="img-size curve-edge">
                    <h3 class="text-center"><b>'.$row['product_name'].'</b></h3>
                    <p class="justify"><b><i> &nbsp&nbsp&nbsp&nbsp '.$row['product_description'].'</i></b></p>
                    <a href="product_description.php?product_id='.$row['product_id'].'" class="btn btn-block btn-success"> View Details </a>
                  </div>
                </div>';
        }
      ?>
             
    </div> <!--Products dispaly Ends-->

    <div class="col">
      
      <!--Bio-Section in 10/12 parts-->
    

      <!--List of items in 2/12 parts-->
      <div class="row-md-2">
        <h2 class="text-center"><b>Chart Menu</b></h2>
        <div class="row img-size-xl">
        <?php 
          $query1="SELECT * FROM `products`";
          $result1=mysqli_query($connection,$query);
          while($row1=mysqli_fetch_assoc($result1))
          {
            echo '<div class="row-md-3">
                    <div class="row  hover-pink">
                      
                      <div class="row-md-3">
                        <a href="product_description.php?product_id='.$row1['product_id'].'">
                        <img src="images/'.$row1['product_image'].'" style="width:250px; margin-top:20px;"class="">
                        </a>
                      </div>

                      <div class="col-md-6">
                        <b>'.$row1['product_name'].'</br><br>
                        <small>EGP'.$row1['product_price'].'/Kg</small>
                      </div>

                    </div>            
                  </div>';
          }         
        ?>
        </div>
      </div>     
    </div>

    <?php include "includes/footer.php"; ?>
   
  </div>
</body>
</html>