<?php
require_once 'config.php';
if (empty($_SESSION['inventory'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - Sistem Inventaris</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					Log in
				</div>
				<div class="panel-body">
					<form method="POST" action="">
						<div class="form-group">
							<input type="text" name="username" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<input type="password" name="password" placeholder="Password" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="login" value="Login" class="btn btn-primary">
							<a href="../index.php" class="pull-right btn btn-default"><span class="glyphicon glyphicon-home"></span> Back to Home</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['login'])){
		
		$username = $_POST['username'];
		$password = md5($_POST['password']);

			if ($admin['2'] == $username AND $admin['3'] == $password) {
				$_SESSION['inventory'] = $admin['2'];
				header("location:index.php");
			}else{
				echo "<script>alert('Periksa Kembali Username dan Password Anda !')</script>";
			}
	}

}else{
	header("location:index.php");
}
?>