<?php
	session_start();
	if (!$_SESSION['id']){
		header('location:../index.php');
	}
?>
<html>
<head>
<title>Dashboard</title>
</head>
<body style="background-color:cyan;">
<a href="logout.php"><p>Logout</p></a>
	<div style="margin:auto;">
		<?php
			echo $_SESSION['id'];
		?>
	</div>
</body>
</html>
<?php
	echo("<script>alert('".$_SESSION['id']."')</script>");
?>
