<?php 	
require_once 'config.php';	
 		$id = $_POST['idx'];      
        $sql =  mysqli_query ($konek, "SELECT * FROM (( barang 
				        	INNER JOIN jenis ON barang.jenis = jenis.id_jenis) 
				        	INNER JOIN kondisi ON barang.kondisi = kondisi.id_kondisi ) WHERE id_barang = $id") ;
        $row = mysqli_fetch_assoc($sql);

 ?>

<form method="POST" action="" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $row[id_barang] ?>">
            <input type="text" name="kode_barang" class="form-control" value="<?php echo $row[kode_barang] ?>">
            <br>
            <label>Foto</label>
            <input type="file" name="foto">
            <br>
		<label>Nama Barang :</label>
      	<input type="text" name="nama_barang" value="<?php echo $row['nama_barang'];?>" class="form-control" required>
      	<br>
      	<label>Jenis Barang :</label>
      	<select class="form-control" name="jenis_barang" required>
      		<option value="<?php echo $row['id_jenis'];?>">-- <?php echo $row['nama_jenis'];?> --</option>
      		<option value="1">Aset</option>
      		<option value="2">Transportasi</option>
      		<option value="3">Alat Kantor</option>
      	</select>
      	<br>
      	<label>Merk (Model) :</label>
      	<input type="text" name="merk_model" value="<?php echo $row['merk_model'];?>" class="form-control" required>
      	<br>
      	<label>Jumlah :</label>
      	<input type="text" name="jumlah" value="<?php echo $row['jumlah'];?>" class="form-control" required>
      	<br>
      	<label>Satuan :</label>
      	<input type="text" name="satuan" value="<?php echo $row['satuan'];?>" class="form-control" required>
      	<br>
      	<label>Harga :</label>
      	<input type="text" name="harga" value="<?php echo $row['harga'];?>" class="form-control" required>
      	<br>
      	<label>Tanggal Beli :</label>
      	<input type="date" name="tanggal_beli" value="<?php echo $row['tanggal_beli'];?>" class="form-control" required>
      	<br>
      	<label>Tahun Buat :</label>
      	<input type="text" name="tahun" value="<?php echo $row['tahun_buat'];?>" class="form-control" required>
      	<br>
      	<label>Kondisi Barag :</label>
      	<select class="form-control" name="kodisi" required>
      		<option value="<?php echo $row['id_kondisi'];?>">-- <?php echo $row['nama_kondisi'];?> --</option>
      		<option value="1">Baik</option>
      		<option value="2">Kurang Baik</option>
      		<option value="3">Rusak</option>
      	</select>
      	<br>
     <button class="btn btn-primary" type="submit" name="update">SIMPAN</button>
 </form>