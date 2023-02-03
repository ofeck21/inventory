
<div class="row">
	<div class="col-lg-12">
		<h2 class='page-header'>Data Barang dan Aset Universitas Islam Madura</h2>
	</div>
</div> <!-- end row -->



<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Data Barang
				<a href="#tambah" data-toggle="modal" data-target="#tambah" ><button class="btn btn-info pull-right"> Tambah Barang</button></a>
			</div>
			<div style="margin-top:10px; padding: 0 5px;" class="panel-body">
				<table id="dataBarang" class="table table-striped table-bordered" style="width:100%">
				    <thead>
				        <tr>
				            <th>No</th>
				            <th>Kode Barang</th>
				            <th>Nama Barang </th>
				            <th>Jenis  </th>
				            <th>Merk (Model) </th>
				            <th>Jumlah </th>
				            <th>Harga </th>
				            <th>Tanggal Beli </th>
				            <th>Tahun Buat </th>
				            <th>Kondisi </th>
				            <th width="50">Aksi </th>
				        </tr>
				    </thead>
				    <tbody>
				    	 <?php 
				        $q = mysqli_query ($konek, "SELECT * FROM (( barang 
				        	INNER JOIN jenis ON barang.jenis = jenis.id_jenis) 
				        	INNER JOIN kondisi ON barang.kondisi = kondisi.id_kondisi ) ORDER BY id_barang DESC") ;

				        $no = 1;

				        while ( $row = mysqli_fetch_assoc($q)) {
				        	echo "
				        	<tr>
				        		<td>$no</td>
				        		<td>$row[kode_barang]</td>
				        		<td>$row[nama_barang]</td>
				        		<td>$row[nama_jenis]</td>
				        		<td>$row[merk_model]</td>
				        		<td>$row[jumlah] $row[satuan]</td>
				        		<td>Rp.$row[harga],-</td>
				        		<td>$row[tanggal_beli]</td>
				        		<td>$row[tahun_buat]</td>
				        		<td>$row[nama_kondisi]</td>
				        		<td>
				        			<span class='pull-right'><a href='#lihat' title='Lihat' data-toggle='modal' data-id=".$row['id_barang']."><i class='fa fa-box-open'></i></a> | 
								   <span class='pull-right'><a href='#edit' title='Ubah' data-toggle='modal' data-id=".$row['id_barang']."><i class='fa fa-edit'></i></a> |<a href='?hapus=$row[id_barang]' onclick='return confirm(\"Apa anda yakin akan menghapus data ini ?\");' title='Hapus'><i class='fa fa-times alert-danger'></i></a></span>
				        		</td>
				        	</tr>
				        	";
				        	$no++;
				        }
				        ?>
				       
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>