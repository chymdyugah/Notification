<?php
	session_start();
?>
<html>
<head>
<title>Login</title>
</head>
<body>
<div class="container">
<div class="center">
<center>
<h1>LOGIN</h1>
<div class='row'>
			<div class='col-xs-12 col-lg-offset-3 col-lg-6'>
				<div id="home">
					<div class="row">
						<div class="col-xs-12 col-md-offset-3 col-md-6">
							<form method="post">
								<div class="col-xs-12 form-group">
									<label>Username:</label>
									<input type="text" name="username" class="form-control" required><br><br>
								</div>
								<div class="col-xs-12 form-group">
									<label>Password:</label>
									<input type="password" name="pword" class="form-control" required><br><br>
								</div>
								<div class="col-xs-12 form-group">
									<input type="submit" name="submit" class="btn btn-default" value="LOGIN">
								</div>
								
							</form>
						</div><br><br>
						<div class="col-xs-12 col-ms-offset-1">
							<center><a href="register.php"><p>register if you do not have an account</p></a></center>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</center>
</div>
</div>
</body>
</html>
<?php
include "conn.php";
	
	if(isset($_POST['submit'])){
		$username=$conn->real_escape_string($_POST['username']);
		$password=md5($conn->real_escape_string($_POST['pword']));
		$sql="SELECT * from users where username='$username' and password='$password'";
		$result=$conn->query($sql);
		if($result->num_rows==0){
		  echo "<script>alert('Invalid Username or Password!')</script>";
		  die();
		} else {
		  $row = $result->fetch_assoc();
		  $_SESSION['id']="Hey $username, you did good!";
		  header('location:home/index.php');
		  exit();
		}
	}

?>