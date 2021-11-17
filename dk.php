<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		.wrapper{
			width: 100%;
			height: auto;
			margin: auto;
		}
		.header{
			height: 100px;

		}
		.logo {
			float: left;
			width: 150px;
			padding: 0PX;
		}
		.logo img{
			width: 205px;
			display: block;
		}
		.search input{
			float: right;
			margin-top:0px;

		}
		.search {
			float: right;
			display: flex;
			flex-wrap: nowrap;
			position: relative;
			margin: 20px;
			right: 500px;


		}
		.search input[type=text]{width: 250px; height: 30px}
		.search input[type=submit]{height: 30px}
		#input1{
			float: right;
			width: 300px;
			height: 25px;

		}
		.search a {
			float: right;
			display: flex;
			flex-wrap: nowrap;
			position: relative;
			margin: auto;
			left: 450px;

		}
		.search a img {
			width: 30px;

		}
		.search a:hover {


		}
		
		.content{
			width: 100%;
			height: 300px;
		}
		.left{
			width: 100%;
			height: 300px;
			float: left;
		}
		.left form{
			margin: 50px;
			margin-left: 600px;
		}
		#email{
			width: 280px;
			height: 30px;
		}
		#pass{
			width: 280px;
			height: 30px;
		}
		#name{
			width: 280px;
			height: 30px;
		}
		#button{
			width: 288px;
			height: 30px;
		}
		.footer{
			width: 100%;
			height: 100px;
			
			
		}
		


	</style>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<a href="index1.php"><img src="https://danangjob.vn/Upload/Member/201895164039.jpg "></a>
			</div>
			<div class="search">
				
			</div>
		</div>
		<div class="menu">
		</div>
		<div class ="content">
			<div class ="left">
				<p style="font-size: 20px; margin-left: 640px; text-transform: uppercase;" >Đăng ký tài khoản</p>
				<form method="post" enctype="multipart/form-data">
					<input type="text" name="username" placeholder="Username" id="email"> <br> <br>
					<input type="password" name="password" id="pass" placeholder="Password"> <br> <br>
					<input type="text" name="fullname" placeholder="Full Name" id="name"> <br> <br>
					<input type="file" name="img" id="img">
					<input type="submit" name="register" value="Đăng ký" id="button">
				</form>

				<?php
				$connect = mysqli_connect('localhost','root','','congdz');
				if(!$connect){
					echo "ket noi that bai";
				}
				else{
					echo"";
				}

				if (isset($_POST['register'])) { 
					$file=$_FILES['img']['name'];
						$file_tmp=$_FILES['img']['tmp_name'];
						$path = "Avartar/";
						move_uploaded_file($file_tmp,$path.$file);

					$username = $_POST['username'];
					$password = $_POST['password'];
					$fullname=$_POST['fullname'];
					$sql="insert into users values ('$userid','$username','$password','$fullname','file')";
					$result = mysqli_query($connect,$sql);
					if ($result) {
						echo "<script>alert('Account has been created successfully!')</script>";
						echo "<script>window.open('../index1.php','_self')</script>";
					}
					else{
						echo"<script>alert('Error')</script>";
					}  
				}
				?>
			</div>
		</div>
		<div class="footer">
			
		</div>
	</div>
</body>
</html>