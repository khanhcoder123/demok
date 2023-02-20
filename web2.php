<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
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
input[type="password"]{
 padding: 5px;
 width: 70%;
}
	</style>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS1ksyDHh2EMSKzdf9Sb_7734UKE-PrUs9Mw&usqp=CAU">
<form method="POST">
	<div class="to">
            <div class="khanh">
                <h2>Register account </h2>
                <label style="margin-left: -150px;">ID</label>
                <input type="text" name="user_id">
                <label>User Name </label>
                <input type="text" name="username">    
                <label style="margin-left: -180px;" for="pwd">Password:</label>
                 <input type="password" id="pwd" name="password">
                 <input id="submit" type="submit" name="register" value="register ">
            </div>                
    </div>
    <p style="color:white">You already have an account? <a href="http://localhost/mywebbsite/web3.php">Login Here</a></p>
    <p style="color:white">You want log out? <a href="http://localhost/mywebbsite/web3.php">Login Here</a></p>
</form>
<?php 
	// B1: Kết nối CSDL
	$connect = mysqli_connect('localhost','root','','demo_database');
	if(!$connect){
    echo"Kết nối thất bại";
  }
	//B2: XD câu truy vấn
	if(isset($_POST['register'])){
		$user_id = $_POST['user_id'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql ="INSERT INTO user VALUES ('$user_id','$username','$password')";

		$result = mysqli_query($connect, $sql);
		if($result){
			echo "<script>alert('Thêm thành công') </script>";
		}
		else{
			echo "<script>alert('Thêm thất bại') </script>";
		}
	}
	?>
</body>
</html>