<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			background-image: url(data:image/jpeg;base64,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);

		}
		#product{
			    margin-top: 100px;
    margin-left: 485px;
    color: black;
    background: rgba(0, 0, 0 , 0.8);
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 470px;
    width: 513px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px grey;
    background-color: white;
    align-items: center;
    /* font-family: 'Open Sa 
   

		}
	</style>
</head>
<body>
<form  id ="product" action="" method = "POST" enctype="multipart/form-data">
	
	ProductID: <input type="text" name="product_id">
	<br>
	Name: <input type="text" name="product_name">
	<br>

	Image: <input type="file" name="product_image">
	<br>
	Price: <input type="text" name="product_price">
	<br>
	Description: <input type="text" name="product_desc">
	<br>
	<input type="submit" name="add" value="Add product">
	<p style="color:red">Back Home Page  <a href="http://localhost/mywebbsite/web1.php">Click Here</a></p>

</form>
<?php 
	$connect = mysqli_connect('localhost','root','','demo_database');
	if(!$connect){
		echo "Kết thất bại";}
	if(isset($_POST['add'])){
		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
		
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];

		// chú ý nhận dữ liệu kiểu file từ Form
		$product_image = $_FILES['product_image']['name'];
		//Đưa ảnh từ máy tính lên tmp
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		//Di chuyển ảnh từ tmp sang thư mục cần lưu
		move_uploaded_file($product_image_tmp, "Image/$product_image");
		//Viết sql
		$sql ="INSERT INTO products VALUES('$product_id','$product_name','$product_image','$product_price','$product_desc')";
		$result = mysqli_query($connect, $sql);
		if($result){
			echo "<script>alert('Thêm sản phẩm thành công') </script>";
		}
		else{
			echo "<script>alert('Thêm thất bại') </script>";
		}

	}

?>
</body>
</html>