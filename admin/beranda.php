
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Total Barang : <?php echo $jml;?></h2>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-teal panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $baik?></div>
							<div class="text-muted">Barang Baik </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $kurang?></div>
							<div class="text-muted">Barang Kurang Baik</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $rusak?></div>
							<div class="text-muted">Barang Rusak</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $kantor?></div>
							<div class="text-muted">Alat Kantor</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $aset?></div>
							<div class="text-muted">Aset</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $trans?></div>
							<div class="text-muted">Transportasi</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Rekapitulasi Data Barang Universitas Islam Madura</div>
					<div class="panel-body">
						<table class="table table-hover table-bordered" >
						    <thead>
						    <tr>
						        <th  style="text-align:center;" rowspan="2">No</th>
						        <th  style="text-align:center;" rowspan="2">Jenis Barang</th>
						        <th  style="text-align:center;" colspan="3">Kondisi</th>
						        <th  style="text-align:center;" rowspan="2">Keterangan</th>
						    </tr>
						    <tr>
						        <th  style="text-align:center; width: 160px;">Baik</th>
						        <th  style="text-align:center; width: 160px;">Kurang Baik</th>
						        <th  style="text-align:center; width: 160px;">Rusak</th>
						    </tr>
						    </thead>
						    <tr>
						    	<td style="text-align:center;">1</td>
						    	<td> Alat Kantor </td>
						    	<td> <?php echo $jbkb ?> </td>
						    	<td> <?php echo $jbkkb ?> </td>
						    	<td> <?php echo $jbkr ?> </td>
						    	<td> </td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">2</td>
						    	<td> Aset </td>
						    	<td> <?php echo $jbab ?> </td>
						    	<td> <?php echo $jbakb ?> </td>
						    	<td> <?php echo $jbar ?> </td>
						    	<td> </td>
						    </tr>
						    <tr>
						    	<td style="text-align:center;">3</td>
						    	<td> Transportasi </td>
						    	<td> <?php echo $jbtb ?> </td>
						    	<td> <?php echo $jbtkb ?> </td>
						    	<td> <?php echo $jbtr ?> </td>
						    	<td> </td>
						    </tr>
						    <tfoot>
						    <tr>
						    	<th colspan="2" style="text-align:center;">Jumlah</th>
						        <th  style="text-align:center; width: 160px;"><?php echo $baik ?></th>
						        <th  style="text-align:center; width: 160px;"><?php echo $kurang ?></th>
						        <th  style="text-align:center; width: 160px;"><?php echo $rusak ?></th>
						    </tr>
						    </tfoot>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->