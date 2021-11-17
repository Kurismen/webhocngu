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
			width: 50%;
			height: 300px;
			float: left;
		}
		.left form{
			margin: 50px;
			margin-left: 200px;
		}
		#email{
			width: 280px;
			height: 30px;
		}
		#pass{
			width: 280px;
			height: 30px;
		}
		#button{
			width: 288px;
			height: 30px;
		}
		.left #dk a{
			float: right;
			margin-top: -35px;
			margin-right: 220px;
		}
		.right{
			width: 50%;
			height: 300px;
			float:right;
		}
		.right img{
			width: 550px;
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
				<p style="font-size: 20px; margin-left: 200px; text-transform: uppercase;" >Đăng nhập</p>
				<form method="post">
					<input type="text" name="username" placeholder="username" id="email"> <br> <br>
					<input type="password" name="password" id="pass" placeholder="Password"> <br> <br>
					<input type="submit" name="login" value="Sign In" id="button">
					<p>
						<a href="">
							Quên mật khẩu?
						</a> 
					</p>
					<p id="dk">
						<a href="Admin/dk.php">
							Đăng ký tài khoản
						</a>
					</p>
				</form>
				<?php
				$connect = mysqli_connect('localhost','root','','congdz');
				if(!$connect){
					echo "ket noi that bai";
				}
				else{
					echo"";
				}

				if (isset($_POST['login'])) {
					echo"ok";
					$username = $_POST['username'];
					$password = $_POST['password'];
					$sql ="select * from users where username='$username' AND password='$password'";
					$result = mysqli_query($connect,$sql);
					$check_login = mysqli_num_rows($result);
					if($check_login==0){
							echo "<script>alert('Password or username is incorrect, please try again!')</script>";
							echo"<script>window.open('account.php','_self')</script>";
						}

						if($check_login > 0){   
							echo "<script>alert('You have logged in successfully !')</script>";  
							echo"<script>window.open('index1.php','_self')</script>";
						}

				}


				?>
			</div>
			<div class="right">
				<img src="https://lh3.googleusercontent.com/aYt0Vo3ZkgXph_zUANNyLNadkGgLNufiTcWw99vlt5zcEZzQDf2nXdIQzhEHPWTALDzSmT2CfZ846JsljXfkhJcHTyViNe_pfw=w1920-rw">
				<br>
				<img src="https://lh3.googleusercontent.com/puAMN1DPNs9iX4lP-bkZQxTaXwTBrijeOViWsyVEA6uMCSa7p1JueLliITJoseaN-Ulhsb54Nzu-_OXCCOoKUhxOdek_Rbms=w1920-rw">
				<br>
				<img src="https://lh3.googleusercontent.com/MXnxe4rSk9Dwez081Ureq8AkafdzRjDRoBcoirw_JmZ4_21Sr0JXWHPSnFpbd0r0nOH7uACdmlmAQiTNX5BAhaTDB2OyHPo=w1920-rw">

			</div>
		</div>
		<div class="footer">
			
		</div>
	</div>
</body>
</html>