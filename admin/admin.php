<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Profil Admin
			</div>
			<div class="panel-body">
<?php
if ($_GET['admin']=='edit') {
?>
			<form method="POST" action="">
				<table class="table table-hover">
					<tr>
						<td>Nama </td>
						<td> : </td>
						<td><input class="form-control" type="text" name="namaLengkap" value="<?php echo $admin['nama'];?>"></td>
					</tr>
					<tr>
						<td>Gendre</td>
						<td> : </td>
						<td><input class="form-control" type="text" name="jendre" value="<?php echo $admin['jendre'];?>"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td> : </td>
						<td><?php echo $admin['username'];?></td>
					</tr>
					<tr>
						<td>Password</td>
						<td> : </td>
						<td><input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda"></td>
					</tr>
				</table>
				<input type="submit" name="saveProf" value="SIMPAN" class="btn btn-primary"> 
				<a href="?admin" class="btn btn-default pull-right"> BATAL </a>
			</form>	
			

<?php
}elseif ($_GET['admin']=='password') {
?>

<form method="POST" action="">
				<table class="table table-hover">
					<tr>
						<td>Nama </td>
						<td> : </td>
						<td><?php echo $admin['nama'];?></td>
					</tr>
					<tr>
						<td>Gendre</td>
						<td> : </td>
						<td><?php echo $admin['jendre'];?></td>
					</tr>
					<tr>
						<td>Username</td>
						<td> : </td>
						<td><?php echo $admin['username'];?></td>
					</tr>
					<tr>
						<td>Password Lama</td>
						<td> : </td>
						<td><input class="form-control" type="password" name="pasLama" placeholder="Password Lama"></td>
					</tr>
					<tr>
						<td>Password Baru</td>
						<td> : </td>
						<td><input class="form-control" type="password" name="pasBaru" placeholder="Password Baru"></td>
					</tr>
					<tr>
						<td>Sekali Lagi</td>
						<td> : </td>
						<td><input class="form-control" type="password" name="lagi" placeholder="Password Baru"></td>
					</tr>
				</table>
				<input type="submit" name="savePas" value="SIMPAN" class="btn btn-primary"> 
				<a href="?admin" class="btn btn-default pull-right"> BATAL </a>
			</form>	
			

<?php
}else{
?>
				<table class="table table-hover">
					<tr>
						<td>Nama </td>
						<td> : </td>
						<td><?php echo $admin['nama'];?></td>
					</tr>
					<tr>
						<td>Gendre</td>
						<td> : </td>
						<td><?php echo $admin['jendre'];?></td>
					</tr>
					<tr>
						<td>Username</td>
						<td> : </td>
						<td><?php echo $admin['username'];?></td>
					</tr>
					<tr>
						<td>Password</td>
						<td> : </td>
						<td><?php echo $admin['pass'];?></td>
					</tr>
				</table>
				<div class="pull-right"><a href="?admin=edit" class="btn btn-primary">Edit Profil</a> <a href="?admin=password" class="btn btn-warning">Edit Password</a></div>
			

<?php } ?>
			</div>
		</div>
	</div>
</div>