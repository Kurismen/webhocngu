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
				<a href="index.html"><img src="https://danangjob.vn/Upload/Member/201895164039.jpg "></a>
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
						<a href="dk.php">
							Đăng ký tài khoản
						</a>
					</p>
			</div>
		</div>
		<div class="footer">
			
		</div>
	</div>
</body>
</html>