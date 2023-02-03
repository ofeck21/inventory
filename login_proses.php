<?php  

	if(isset($_POST['login'])){
		
		$username = $_POST['username'];
		$password = md5($_POST['password']);

			if ($admin['2'] == $username AND $admin['3'] == $password) {
				$_SESSION['inventory'] = $admin['2'];
				echo "<script>
				swal({
				  position: 'center',
				  type: 'success',
				  title: 'Login Berhasil',
				  showConfirmButton: false,
				  timer: 1500
				});
				location=(href='admin/');</script>";
			}else{
				echo "<script>
				swal(
				  'Oops!',
				  'username atau Password Salah!',
				  'error'
				)
				</script>";
			}
	}

?>