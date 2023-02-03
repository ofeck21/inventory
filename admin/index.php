<?php 
require_once 'config.php';
if (empty($_SESSION['inventory'])) {
	header("location:login.php");
}else{
require_once 'config.php';


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin | Sistem Inventaris Barang</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/fontawesome-all.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<script type="text/javascript" src="../assets/js/swal/sweetalert2.all.js"></script>

<!-- data tables css -->
<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span>Sistem Inventaris Barang </span>Universitas Islam Madura</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><?php echo $admin['nama'];?><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="?admin"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin</a></li>
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="active"><a href="?beranda"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Beranda</a></li>
			<li><a href="?data"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Data Barang</a></li>
			<li role="presentation" class="divider"></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<?php
			if (isset($_GET['?beranda'])) {
				require_once 'beranda.php';
			}elseif (isset($_GET['profil']) || isset($_GET['editProfil'])) {
				require_once 'profil.php';
			}elseif (isset($_GET['data'])) {
				require_once 'data.php';
			}elseif (isset($_GET['tambah'])) {
				require_once 'tambah.php';
			}elseif (isset($_GET['hapus'])) {
				require_once 'hapus.php';
			}elseif (isset($_GET['edit'])) {
				require_once 'edit.php';
			}elseif (isset($_GET['admin'])) {
				require_once 'admin.php';
			}elseif (isset($_GET['desa']) || isset($_GET['editDesa'])) {
				require_once 'desa.php';
			}
			else{
				require_once 'beranda.php';
			}
		?>
	</div>	<!--/.main-->

	<!-- Modal -->

	<!-- Modal Edit Data-->
<div class="modal fade" id="edit" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Edit Data</h4>
    </div>
    <div class="modal-body">
    	<div class="hasil-data"></div>      
    </div>
    <div class="modal-footer">
    	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
  </div>
  
</div>
</div>
<!-- end modal -->

	<!-- Modal Lihat Foto-->
<div class="modal fade" id="lihat" role="dialog">
<div class="modal-dialog">

  <div class="hasil-data"></div> 
  
</div>
</div>
<!-- end modal -->

	<?php 

	require_once 'tambah.php';

	require_once 'proses.php';
	 ?>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	

	<!-- data tables -->
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>

	<script type="text/javascript">

    	$(document).ready(function() {
		    $('#dataBarang').DataTable();
		} );

		$('#edit').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'edit.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });

		$('#lihat').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'lihat.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
		
	</script>

</body>
</html>
<?php

 } ?>