<?php 	
require_once 'config.php';	
 		$id = $_POST['idx'];      
        $sql =  mysqli_query ($konek, "SELECT * FROM (( barang 
				        	INNER JOIN jenis ON barang.jenis = jenis.id_jenis) 
				        	INNER JOIN kondisi ON barang.kondisi = kondisi.id_kondisi ) WHERE id_barang = $id") ;
        $row = mysqli_fetch_assoc($sql);

 ?>

<!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"><?php echo $row[nama_barang] ?> : <?php echo $row[merk_model] ?></h4>
    </div>
    <div class="modal-body">
      <center>
            <?php if ($row[barang] == ''){ ?>
                  Tidak Ada Foto
            <?php }else { ?>
           <img src="foto/<?php echo $row[barang] ?>" width="300">
           <?php } ?>
      </center>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
    </div>
  </div>