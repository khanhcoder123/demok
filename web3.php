<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
    margin:0;
    padding:0;
    border:none;
    font-family: 'Open Sans', sans-serif;
}
body {
    overflow: hidden;
    background-color: rgb(0 0 0 / 80%);
}
.to {
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: minmax(100px,auto);
}
 
.khanh {
    background: rgba(0, 0, 0 , 0.8) ;
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 470px;
    width: 292px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px grey;
    background-color: white;
}
h2 {
    margin-top: 50px;
    margin-bottom: 30px;
}

label {
    margin-left: -126px;
    display: block;
    font-weight: bold;
 
}
input{
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
}
input[type="text"] {
    padding: 5px;
    width: 70%;
}
input#submit {
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom: 10px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
input#submit:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
}
p:hover a{
	color: white;
}
input[type="password"]{
 padding: 5px;
 width: 70%;
}
	</style>

</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS1ksyDHh2EMSKzdf9Sb_7734UKE-PrUs9Mw&usqp=CAU">
	<form action="web1.php" method="post">
		
         <div class="to">
            <div class="khanh">

            	
	                <h2>LOGIN </h2>
	                <label>UserName</label>
	                <input type="text" name="username"> <br>   
	                <label >Password</label>
	                <input type="password" name="password"> <br>
	                <input id="submit" type="submit" name="login" value="login ">
	           
            </div>                
        </div>
    
        <p style="color:red">Do not have an account?? <a href="http://localhost/mywebbsite/web2.php">Register Here</a></p>
        <p style="color:red">Back Home Page  <a href="http://localhost/mywebbsite/web1.php">Click Here</a></p>
	</form>
	<?php 
	// B1: K???t n???i CSDL
	$connect = mysqli_connect('localhost','root','','demo_database');
	if(!$connect){
    echo"K???t n???i th???t b???i";
  }
	//B2: XD c??u truy v???n
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user WHERE username ='$username' AND password ='$password'";
		//B3: Th???c thi truy v???n
		$result = mysqli_query($connect, $sql);
		//B4: Nh???n k???t qu??? truy v???n v?? x??? l??
		$count_rows = mysqli_num_rows($result);
		if($count_rows==0){
			echo "<script>alert('Sai t??n ng?????i d??ng ho???c m???t kh???u') </script>";
		}
		else{
			echo "<script> alert('????ng nh???p th??nh c??ng') </script>";
		}
	}	
	?>
	
	
</body>
</html>