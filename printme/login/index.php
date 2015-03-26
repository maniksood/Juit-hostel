<?php include 'config.php'; ?>


<!doctype html>
	<html lang="en">
		<html>
			<head>
				<title>
						Login | FPS
				</title>

				<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

			</head>

			<body>



			<div class="container">
			<div class="row">
			<center>
				<img class="img-responsive" src="../img/print_icon.svg">
			</center>
			</div>
			<div class="row">
				<center>
				<h3><em>Login</em><h3>
				</center>
				<form action="" method="post">
					<div class="col-md-4"></div>
					<div class="col-md-4">
					<label for="inputEmail">Email</label>
					<input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email" required="required">
					<label for="inputPassword">Password</label>
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required"><br>
					<center><button type="submit" class="btn btn-primary" name="login">Login</button></center>
				</form>
<br>
				
			    </div>
			    <div class="col-md-4"></div>
			</div>
			</div>

			</body>
		</html>



<?php 
	if (isset($_POST['login'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$select = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'" ;
			$result = mysql_query($select);
			$res = mysql_fetch_assoc($result);
			
			if ($res) {
				$verified = $res['verified'];
				if ($verified == 'yes') {
					$id = $res['id'];
					$email = $res['email'];
					$name = $res['name'];
					$wallet = $res['wallet'];

					$_SESSION['id'] = $id;

					header("location:../printme/");
				}else{
					echo "<script>alert('Your account is not verified. Please check your email for confirmation link.');</script>";
				}
			}else{
				echo "<script>alert('Incorrect email or password. Please try again');</script>";
			}
		}	
?>