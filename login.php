<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post">
		<table align="left" width="70%">
			<tr align="left">
				<td colspan="4"><h2>login.</h2>
					<br />
					<span>Don't have acc? <a href="register.php">register here</a><br />
						<br />
					</span></td>
				</tr>
				<tr>
					<td><b>UserName:</b></td>
					<td colspan="3"><input type="text" name="username" required placeholder="username" /></td>
				</tr>
				<tr>
					<td width="15%"><b>Password:</b></td>
					<td colspan="3"><input type="password" name="password" required placeholder ="password"/></td>
				</tr>
				<tr align="left">
					<td></td>
					<td colspan="4"><input type="submit" name="login" value="login"/></td> 
				</tr>
			</table>

		</form>
		<?php
		$connect = mysqli_connect('localhost','root','','congdz');
		if(!$connect){
			echo "ket noi that bai";
		}
		else{
			echo"kết nối thành công";
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
				exit();
			}

			if($check_login > 0){   
				$_SESSION['userid'] = $row_login['userid'];
				echo "<script>alert('You have logged in successfully !')</script>";  
				echo"<script>window.open('index.php','_self')</script>";
			}


		}


		?>
	</body>
	</html>

