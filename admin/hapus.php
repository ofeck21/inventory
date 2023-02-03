<?php
if (isset($_GET['hapus'])) {
	$id = $_GET['hapus'];
	$hapus = mysqli_query($konek, "DELETE FROM barang WHERE id_barang='$id'");
	if ($hapus) {
		echo "<script>
		swal({
		  title: 'Hapus Data !',
		  text: 'Menghapus Data...',
		  timer: 2000,
		  onOpen: () => {
		    swal.showLoading()
		  }
		})
		location=(href='?data');
		</script>";
	}else{
		echo "<script>
		alert('Data gagal di hapus !');
		location=(href='?data');
		</script>";
	}
}
?>