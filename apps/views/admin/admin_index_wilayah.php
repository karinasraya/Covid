<!DOCTYPE html>
<html>
<head>
	<title>RS Rujukan COVID-19</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/2.0.2/css/scroller.bootstrap4.min.css">
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
	<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
	<thead>
		<tr>
			<th>No</th>
			<th>Provinsi</th>
			<th>Nama RS</th>
			<th>Alamat</th>
		</tr>
	</thead>
	</table>
	</div>
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/scroller/2.0.2/js/dataTables.scroller.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').dataTable({
				"aLengthMenu": [
						[5, 15, 20, 100, -1],
						[5, 15, 20, 100, "All"]
					],
				"ajax": "http://localhost:8000/Covid/public/admin_wilayah/getRSRujukan",
				"aoColumns": [
					{"data": "nomor"},
					{"data": "provinsi"},
					{"data": "nama_rs"},
					{"data": "alamat_rs"}
				]
			});
		});
	</script>
</body>
</html>