<!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title></title>
 </head>
 <body>
  
 <div>
 <div>
    <?php 
    $connect = mysqli_connect('localhost','root','','demo_database');
  if(!$connect){
    echo"Kết nối thất bại";
  }
    $id = (isset($_GET['id']) ? $_GET['id'] : '');
    $sql="SELECT * FROM products WHERE product_id = $id ";
    $result= mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_array ($result)) {
       $product_id = $row['product_id'];
       $product_image = $row['product_image'];
     ?>
      <div style="float:left">
          <img src="Image/<?php echo $product_image ; ?>" style="width: 300px;height: 350px" >
        </div>
        <div style=" text-align: left;">
        <h2 >Name Of Product: <?php echo $row['product_name'] ?></h2>
        <p style="color: red;padding-left: 20px;"> Price: <?php echo $row['product_price']." $"; ?></p>   

        <br>
        <br>
         <a href='detail.php?add_cart=<?php echo $product_id ?>'>
          <button style='float:right'>Add to Cart</button>
          </a>   
          <?php //include("add_cart.php"); ?>
         <br>
          <br>          
        <div style="border-bottom: 1px solid black"></div>
        <br>
        <h2>
          Basic product info:
        </h2>               
        <p><?php echo $row["product_desc"]; ?></p>
        </div>       

        <?php
      }
      ?>
     </div>
     </div>
    
 </body>
 </html>



 