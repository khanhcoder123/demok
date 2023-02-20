<!DOCTYPE html>
<html>
<head>
    <title>Demo Layout</title>
    <style type="text/css">
     body{
        font-family:sans-serif ;
        background-color: beige;

     }   
    .wrapper{
        width: 100%;  
        height: auto;
        margin:auto;          
    }
    .header{
        height: 55px;
        margin: auto;
        
    }
    .logo {
        float:left;
        padding-right: 100px;

    }
    #form_search{
        margin-top:10px;

    }
    #form_search input[type=text]{width: 250px; height: 30px}
    #form_search input[type=submit]{height: 30px}

    .login{
        float: right;
        right:30px;
        height:35px;
        line-height:35px;
        color:gray; 
        position:relative;
        display:inline;         
    }
    .login a{
        text-decoration: none;  

    }
    .register{
        float: right;
        margin-right: 50px;
        height:35px;
        line-height:35px;
        color:gray;           
    }
    
    .register a{
        text-decoration: none;  

    }
    .menu{  
        width: 100%     
        height: 30px;
        background: #FF1493;
        border: 1px solid black

    }
    .menu ul li{
        list-style: none;
        text-align: center;
        display: inline-table;
        
    }
    .menu ul li a{
        text-decoration: none;
        font-size: 16px;
        margin: 30px;
        padding: 5px;
        text-transform: uppercase;
        color: black;
    }
    .menu ul li a:hover{
        color: white;
        text-decoration: underline;
    }

    .content{
        width: 100%;        
       
    }
    .left{
        width: 21%;
        background: gray;
        
        float: left;
    }
    .right{
        width: 80%;    

        float:right;
    }
    

    .left >p {
      background:white;
      color:black;
      font-size:28px;
      font-family:arial;
      padding:10px;
      text-align:center;
  }
  .category ul{
      width:100%;
      height: auto; 
  }
  .category ul li{
      list-style: none;

  }
  .category ul li a{
      color:black;
      padding:8px;
      margin:5px;
      text-align:center;
      font-size:20px;
      text-decoration:none;
      font-family:sans-serif;
  }
  .category a:hover{
      text-decoration: underline;
      color: white;
  }
  .brand ul{
      width:100%;
      height: auto;
      list-style: none;
  }
  .brand ul li{
      list-style: none;

  }
  .brand a:hover{
      text-decoration: underline;
      color: white;
  }
  .brand ul li a{
      color:black;
      padding:8px;
      margin:5px;
      text-align:center;
      font-size:20px;
      text-decoration:none;
      font-family:sans-serif;
  }
  .products_box{
   width:780px;
   text-align:center;
   margin-left:30px;
   margin-bottom:10px;
}
.single_product{
   float:left;
   margin-left:30px;
   margin-top: 20px;
   padding:10px;
}
.single_product img{
   border:2px solid black;

}
footer{
     position: relative;
     width: 100%;
     height: 400px;
     padding: 50px 100px;
     background-color: pink;
     display: flex;
     justify-content: space-between;
     flex-wrap: wrap;
     border: 1px solid;
 }
footer .container{
     display: flex;
     justify-content: space-between;
     flex-wrap: wrap;
     flex-direction: row;
 }
 footer .container .noi-dung{
     margin-right: 30px;
 }
footer  .container .noi-dung.about{
     width:40%;
 }
 footer .container .noi-dung.about h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
 footer .container .noi-dung.about h2:before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #800000;
 }
footer .container .noi-dung.about p{
     color: white;
 }
 /*Thiết Lập Cho Thành Phần Icon Mạng Xã Hội*/
 .social-icon{
     margin-top: 20px;
     display: flex;
 }
.social-icon li {
     list-style: none;
 }
 .social-icon li a{
     display: inline-block;
     width: 40px;
     height: 40px;
     background: #222;
     display: flex;
     justify-content: center;
     align-items: center;
     margin-right: 10px;
     text-decoration: none;
     border-radius: 4px;
 }
.social-icon li a:hover{
     background: #f00;
 }
.social-icon li a .fa{
     color: #fff;
     font-size: 20px;
 }
.links h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
.links h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
.links h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
.links{
    position: relative;
    width: 25%;
 }
 .links ul li{
     list-style: none;
 }
 .links ul li a{
     color: #999;
     text-decoration: none;
     margin-bottom: 10px;
     display: inline-block;
 }
.links ul li a:hover{
     color: #fff;
 }
 .contact h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
.contact h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
.contact{
     width: calc(35% - 60px);
     margin-right: 0 !important;
 }
.contact .info{
     position: relative;
 }
 .contact .info li{
     display: flex;
     margin-bottom: 16px;
 }
 .contact .info li span:nth-child(1) {
     color: #fff;
     font-size: 20px;
     margin-right: 10px;
 }
.contact .info li span{
     color: #999;
 }
.contact .info li a{
     color: #999;
     text-decoration: none;
 }
 .btn {
     display: inline-block;
     background: transparent;
     color: inherit;
     font: inherit;
     border: 0;
     outline: 0;
     padding: 0;
     margin-top:16px;
     transition: all 200ms ease-in;
     cursor: pointer;
 }
 .btn--primary {
     background: #222;
     color: #fff;
     box-shadow: 0 0 10px 2px rgba(0, 0, 0, .1);
     border-radius: 2px;
     padding: 8px 24px;
 }
 .btn--primary:hover {
     background: #f00;
 }
 .btn--primary:active {
     background: #f00;
     box-shadow: inset 0 0 10px 2px rgba(0, 0, 0, .2);
 }
.form__field {
     width: 90%;
     background: #fff;
     color: #a3a3a3;
     font: inherit;
     box-shadow: 0 6px 10px 0 rgba(0, 0, 0, .1);
     border: 0;
     outline: 0;
     padding: 8px 4px;
 }
 .single-product{
    display: inline-block;
    margin-bottom: 40px;
 }
 #cart{
    float: right;
    margin-right: 50px ;
    height: 50px;
 }
</style>
</head>
<body  >
    <div class="wrapper">
        <div class="header"> 
            <div class="logo"> 
              <img id="logo" src= "data:image/png;base64,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" style="height: 50px; width: 70px; margin-top: 1px;">
              
                  
          </div><!--/.header_logo-->
          <img id="cart" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9q9U7YaUc27iaqP1bbyD3g6GSLqlRmAFbeQ&usqp=CAU" />
          <div id="form_search">
             <form method="get" action="search.php" enctype="multipart/form-data">
                <input type="text"  name="user_query" placeholder="Search a Product" />
                <input href="http://localhost/mywebbsite/web6.php" type="submit" name="search" value="Search" />
            </form>

              
        </div> 
    </div>

    <!-- end header --> 
    <div class="menu">
        <ul>
            <li><a href="http://localhost/mywebbsite/web1.php"> Home Page </a> </li>
            <li><a href="http://localhost/mywebbsite/web4.php">Manage Product </a></li>
            <li><a href="http://localhost/mywebbsite/web5.php"> Add product </a> </li>
            <li><a href="http://localhost/mywebbsite/web2.php">  About </a></li>
            <li><a href="http://localhost/mywebbsite/web3.php">  Login </a></li>
        </ul>
    </div>
    <div class ="content">
        <div class ="left">
           <p> Product Type </p>
           <div class="category">
              <ul>
                <li> <a href="#">Đồ chơi cho trẻ  </a></li>
                <li> <a href="#">Đồ chơi thông minh</a></li>
                <li> <a href="#">Đồ chơi xếp hinh </a></li>
                <li> <a href="#">Đồ chơi vận động  </a></li>
            </ul>
        </div>
        <p > Brand </p>
        <div class="brand">
          <ul>
            <li> <a href="#">Sach hay </a></li>
            <li> <a href="#">Sach rat hay</a></li>
            <li> <a href="#">Sach rat rat hay </a></li>
        </ul>
    </div>
</div>
<div class="right">
    <p style="text-align: center;font-size: 20px"> Tất cả sản phẩm </p>
   <div class ="products_box">
      <?php
      $connect = mysqli_connect('localhost','root','', 'demo_database');
      if(!$connect){
        echo('Error');
      }
      $sql ="select * from products";

      $result = mysqli_query($connect,$sql);
      
      while($row_product=mysqli_fetch_array($result)){
        $product_id = $row_product['product_id'];
        $product_name = $row_product['product_name'];
        $product_price = $row_product['product_price'];
        $product_image = $row_product['product_image'];
        echo"
        <div class='single-product'>
    <img src='Image/$product_image' width='150' height='200' float='left' />
    <p><b> Price:$product_price </b></p>
    <p><b>$product_name </b></p>
    <a href='web4.php?id=$product_id'>Details</a>
    <a href=''>
      <button style='float:right'>Add to Cart</button>
  </a>
  </div>            
";    }  
      ?>

      
</div>       
    

</div>
</div>
</div>
<footer>
     <div class="container">
         <!--Bắt Đầu Nội Dung Giới Thiệu-->
         <div class="noi-dung about">
             <h2>Về Chúng Tôi</h2>
             <p>Sách hay nhận đặt hàng trực tuyến và giao hàng tận nơi. KHÔNG hỗ trợ đặt mua và nhận hàng trực tiếp tại văn phòng cũng như tất cả Hệ Thống Fahasa trên toàn quốc.</p>
             <ul class="social-icon">
                 <li><a href=""><i class="fa fa-facebook"></i></a></li>
                 <li><a href=""><i class="fa fa-twitter"></i></a></li>
                 <li><a href=""><i class="fa fa-instagram"></i></a></li>
                 <li><a href=""><i class="fa fa-youtube"></i></a></li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Giới Thiệu-->
         <!--Bắt Đầu Nội Dung Đường Dẫn-->
         <div class="noi-dung links">
             <h2>Đường Dẫn</h2>
             <ul>
                 <li><a href="#">Home Page</a></li>
                 <li><a href="#">Về Chúng Tôi</a></li>
                 <li><a href="#">Thông Tin Liên Lạc</a></li>
                 <li><a href="#">Dịch Vụ</a></li>
                 <li><a href="#">Điều Kiện Chính Sách</a></li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Đường Dẫn-->
         <!--Bắt Đâu Nội Dung Liên Hệ-->
         <div class="noi-dung contact">
             <h2>Thông Tin Liên Hệ</h2>
             <ul class="info">
                 <li>
                     <span><i class="fa fa-map-marker"></i></span>
                     <span>Đường Số 1<br />
                          huyện thanh chương Nghệ An<br />
                         Việt Nam</span>
                 </li>
                 <li>
                     <span><i class="fa fa-phone"></i></span>
                     <p><a href="#">111111111</a>
                         <br />
                         <a href="#">111111111</a></p>
                 </li>
                 <li>
                     <span><i class="fa fa-envelope"></i></span>
                     <p><a href="#">khanh123@gmail.com</a></p>
                </li>
                 <li>
                     <form class="form">
                         <input type="email" class="form__field" placeholder="Đăng Ký Subscribe Email" />
                         <button type="button" class="btn btn--primary  uppercase">Gửi</button>
                     </form>
                 </li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Liên Hệ-->
     </div>
 </footer>
</body>
</html>