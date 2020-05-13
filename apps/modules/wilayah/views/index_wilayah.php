<!DOCTYPE html>
<html>
<head>
	<title>RS Rujukan COVID-19</title>
	<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

	<style type="text/css">
	.pagination>li {
		display: inline;
		padding:0px !important;
		margin:0px !important;
		border:none !important;
	}
	.modal-backdrop {
  		z-index: -1 !important;
	}
	iframe {
    	height:700px !important;
	}
	</style>

</head>
<body>
	<!-- <div style="margin-left:320px;">
		<h1>RS Rujukan COVID-19 di Setiap Provinsi</h1>
	</div> -->

	<div class="container">
	<div class="row">
	</div>
    
    <div class="row">		
    <div class="col-md-12">
	<table id="example" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>No</th>
			<th>Provinsi</th>
			<th>Nama RS</th>
			<th>Alamat</th>
		</tr>
	</thead>
		<?php
		$no = 1;
		foreach($rs_rujukan as $rs){ 
		?>
	<tbody>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $rs->provinsi ?></td>
			<td><?php echo $rs->nama_rs ?></td>
			<td><?php echo $rs->alamat_rs ?></td>
		</tr>
	</tbody>
		<?php } ?>
	</table>
	</div>
	</div>
	</div>

	<script>
		$(document).ready(function() {
    	$('#example').DataTable();
		$("[data-toggle=tooltip]").tooltip();
		$('.dataTables_length').addClass('bs-select');
		} );
	</script>

</body>
</html>