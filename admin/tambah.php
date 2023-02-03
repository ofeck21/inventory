<?php 
require_once 'config.php';

$amb = mysqli_query($konek, "SELECT max(id_barang) FROM barang");
$b = mysqli_fetch_array($amb);
$k = $b[0];
$k++;
?>
<!-- Modal tambah Data-->
<div class="modal fade" id="tambah" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Tambah Barang</h4>
    </div>
    <div class="modal-body">
      <form method="POST" action="" enctype="multipart/form-data">
        <input type="text" name="kode_barang" class="form-control" value="UIM-00<?php echo $k ?>" readonly="">
        <br>
        <input type="file" name="foto">
        <br>
      	<input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control" required>
      	<br>
      	<select class="form-control" name="jenis_barang" required>
      		<option value="">-- Pilih Jenis Barang --</option>
      		<option value="1">Aset</option>
      		<option value="2">Transportasi</option>
      		<option value="3">Alat Kantor</option>
      	</select>
      	<br>
      	<input type="text" name="merk_model" placeholder="Merk (Model)" class="form-control" required>
      	<br>
      	<input type="text" name="jumlah" placeholder="Jumlah" class="form-control" required>
      	<br>
      	<input type="text" name="satuan" placeholder="Satuan" class="form-control" required>
      	<br>
      	<input type="text" name="harga" placeholder="Harga " class="form-control" required>
      	<br>
      	<input type="date" name="tanggal_beli" placeholder="Tanggal Beli" class="form-control" required>
      	<br>
      	<input type="text" name="tahun" placeholder="Tahun Pembuatan" class="form-control" required>
      	<br>
      	<select class="form-control" name="kodisi" required>
      		<option value="">-- Pilih Kondisi Barang --</option>
      		<option value="1">Baik</option>
      		<option value="2">Kurang Baik</option>
      		<option value="3">Rusak</option>
      	</select>
    </div>
    <div class="modal-footer">
    	<input type="submit" name="tambah" value="TAMBAH" class="btn btn-info">
      </form>
    </div>
  </div>
  
</div>
</div>
<!-- end modal tambah Data -->