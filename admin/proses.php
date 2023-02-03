<?php
	$kodeBarang = $_POST['kode_barang'];
	$namaBarang = $_POST['nama_barang'];
	$jenisBarang = $_POST['jenis_barang'];
	$merkBarang = $_POST['merk_model'];
	$jumlah = $_POST['jumlah'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];
	$tanggal = $_POST['tanggal_beli'];
	$tahun = $_POST['tahun'];
	$kondisi = $_POST['kodisi'];
	

if (isset($_POST['tambah'])) {

	if ($namaBarang == "" || $jenisBarang == "" || $merkBarang == "" || $jumlah == "" || $satuan == "" || $harga == "" || $tanggal == "" || $tahun == "" || $kondisi == "" ) {
		 echo "<script>
		alert('Data Tidak Boleh Kosong !');
		</script>";
	}else{

			$foto 		= $_FILES['foto']['name'];
			$fotoname	= $kodeBarang."_".$foto;
			$tipe		= $_FILES['foto']['type'];
			$tmp		= $_FILES['foto']['tmp_name'];
			
			$dir 		= "foto/".$fotoname;

			$upload 	= move_uploaded_file($tmp, $dir);

			if ( ($upload) && ($tipe == "image/jpeg" || $tipe == "image/jpg" || $tipe == "image/png")) {
				

				$q = "INSERT INTO barang (id_barang, jenis, nama_barang, merk_model, satuan, jumlah, harga, tanggal_beli, tahun_buat, kondisi, kode_barang, barang ) VALUES (NULL, '$jenisBarang', '$namaBarang', '$merkBarang', '$satuan', '$jumlah', '$harga', '$tanggal', '$tahun', '$kondisi', '$kodeBarang', '$fotoname' )";

				$insert = mysqli_query ($konek, $q);

				if ($insert) {
			    echo "<script>
				swal({
						  position: 'center',
						  type: 'success',
						  title: 'Data Telah Ditambahkan !',
						  showConfirmButton: false,
						  timer: 1500
						});
				location=(href='?data');
				</script>";
				} else {
				    echo "<script>
					swal({
						  position: 'center',
						  type: 'error',
						  title: 'Data Gagal Disimpan !',
						  showConfirmButton: false,
						  timer: 1500
						});
					</script>";
				}
			}
	}
}elseif (isset($_POST['update'])) {
	$id = $_POST['id'];
	if (isset($_FILES['foto'])) {
		$foto 		= $_FILES['foto']['name'];
		$fotoname	= $kodeBarang."_".$foto;
		$tipe		= $_FILES['foto']['type'];
		$tmp		= $_FILES['foto']['tmp_name'];
		
		$dir 		= "foto/".$fotoname;

		$upload 	= move_uploaded_file($tmp, $dir);
		if ( ($upload) && ($tipe == "image/jpeg" || $tipe == "image/jpg" || $tipe == "image/png")) {
			$sql = "UPDATE barang SET jenis='$jenisBarang', nama_barang='$namaBarang', merk_model='$merkBarang', satuan='$satuan', jumlah='$jumlah', harga='$harga', tanggal_beli='$tanggal', tahun_buat='$tahun', kondisi='$kondisi', kode_barang='$kodeBarang', barang='$fotoname' WHERE id_barang='$id'";

			$update = mysqli_query ($konek, $sql);
			if ($update) {
				echo "<script>
				swal({
						  position: 'center',
						  type: 'success',
						  title: 'Data Telah Diubah !',
						  showConfirmButton: false,
						  timer: 1500
						});
				location=(href='?data');
				</script>";
			}else{
				echo "<script>
				swal({
						  position: 'center',
						  type: 'error',
						  title: 'Data Gagal Diubah !',
						  showConfirmButton: false,
						  timer: 1500
						});
				location=(href='index.php?edit=$id');
				</script>";
			}
		}else{
		$sql = "UPDATE barang SET jenis='$jenisBarang', nama_barang='$namaBarang', merk_model='$merkBarang', satuan='$satuan', jumlah='$jumlah', harga='$harga', tanggal_beli='$tanggal', tahun_buat='$tahun', kondisi='$kondisi', kode_barang='$kodeBarang' WHERE id_barang='$id'";

		$update = mysqli_query ($konek, $sql);


		
			if ($update) {
				echo "<script>
				swal({
						  position: 'center',
						  type: 'success',
						  title: 'Data Telah Diubah !',
						  showConfirmButton: false,
						  timer: 1500
						});
				location=(href='?data');
				</script>";
			}else{
				echo "<script>
				swal({
						  position: 'center',
						  type: 'error',
						  title: 'Data Gagal Diubah !',
						  showConfirmButton: false,
						  timer: 1500
						});
				location=(href='index.php?edit=$id');
				</script>";
			}
		}
	}
}


elseif (isset($_POST['save'])) {
	$no = 1;
	$artikel = $_POST['artikel'];
	$save = mysqli_query ($konek, "UPDATE profil SET artikel='$artikel' WHERE id='$no'");

	if($save){
		echo "<script>
		swal({
				  position: 'center',
				  type: 'success',
				  title: 'Data Telah Diubah !',
				  showConfirmButton: false,
				  timer: 1500
				});
		location=(href='index.php?profilPdmw');
		</script>";
	}else{
		echo "<script>
		swal({
				  position: 'center',
				  type: 'error',
				  title: 'Profil Gagal Diubah !',
				  showConfirmButton: false,
				  timer: 1500
				});
		location=(href='index.php?editProfil');
		</script>";
	}
}elseif(isset($_POST['saveProf'])) {
	
	$namaLengkap = $_POST['namaLengkap'];
	$jendre = $_POST['jendre'];
	$password = md5($_POST['password']);

	if ($password == $admin['password']) {
		$setAdmin = mysqli_query($konek, "UPDATE users SET nama='$namaLengkap', jendre='$jendre' WHERE id_user=1");
		if($setAdmin){
			echo "<script>
			swal({
				  position: 'center',
				  type: 'success',
				  title: 'Profil Telah Diubah !',
				  showConfirmButton: false,
				  timer: 1500
				});
			location=(href='index.php?admin');
			</script>";
		}
	}else{
		echo "<script>
			swal({
				  position: 'center',
				  type: 'error',
				  title: 'Masukkan Password Yang Benar !',
				  showConfirmButton: false,
				  timer: 1500
				});
			location=(href='index.php?admin=edit');
			</script>";
	}	
}elseif (isset($_POST['savePas'])) {

	$pasLama = md5($_POST['pasLama']);
	$pasBaru = md5($_POST['pasBaru']);
	$lagi = md5($_POST['lagi']);

	if ($pasLama == $admin['password']) {
		if ($pasBaru != $lagi) {
			echo "<script>
				swal({
				  position: 'center',
				  type: 'error',
				  title: 'Masukkan Password 2x Dengan Benar !',
				  showConfirmButton: false,
				  timer: 1500
				});
				location=(href='index.php?admin=password');
				</script>";
		}elseif ($pasBaru == $lagi) {
			$ubah = mysqli_query ($konek, "UPDATE users SET password='$pasBaru' WHERE id_user=1");
			if ($ubah) {
				echo "<script>
				swal({
				  position: 'center',
				  type: 'success',
				  title: 'Password Telah Diubah !',
				  showConfirmButton: false,
				  timer: 1500
				});
				location=(href='index.php?admin');
				</script>";
			}else{
				echo "<script>
				swal({
				  position: 'center',
				  type: 'error',
				  title: 'Password Gagal Diubah !',
				  showConfirmButton: false,
				  timer: 1500
				});
				location=(href='index.php?admin=password');
				</script>";
			}
		}
	}else{
		echo "<script>
				swal({
				  position: 'center',
				  type: 'error',
				  title: 'Password Lama Salah !',
				  showConfirmButton: false,
				  timer: 1500
				});
				location=(href='index.php?admin=password');
				</script>";
	}
}

?>