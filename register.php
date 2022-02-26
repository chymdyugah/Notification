<?php
	session_start();
?>
<html>
<head>
<title>REGISTER</title>
</head>
<body>
<div class="container">
<div class="center">
<center>
<h1>REGISTER</h1>
<div class='row'>
			<div class='col-xs-12 col-lg-offset-3 col-lg-6'>
				<div id="home">
					<div class="row">
						<div class="col-xs-12 col-md-offset-3 col-md-6">
							<form method="post">
								<div class="col-xs-12 form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" required><br><br>
								</div><div class="col-xs-12 form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control" required><br><br>
								</div>
								<div class="col-xs-12 form-group">
									<label>Password</label>
									<input type="password" name="pword" class="form-control" required><br><br>
								</div>
								<div class="col-xs-12 form-group">
									<input type="submit" name="submit" class="btn btn-default" value="REGISTER">
								</div>
								
							</form>
						</div><br><br>
						<div class="col-xs-12 col-ms-offset-1">
							<center><a href="register.php"><p>login if you do have an account</p></a></center>
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
		$password=$conn->real_escape_string($_POST['pword']);
		$password = md5($password);
		$name=$_POST['name'];
		$sql="INSERT INTO users (username, password, name) values ('$username', '$password', '$name')";
		$conn->query($sql);
		if(!$conn->query($sql)){
		  echo $conn->error;
		  die();
		} else {
		  header('location:index.php');
		  exit();

		}
	}



?>