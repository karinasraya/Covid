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

	<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#insertModal' data-whatever='@mdo'>New</button>
	<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New Data RS</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo base_url('admin_wilayah/simpan') ?>">
				<input type="hidden" class="form-control" name="nomor">
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Nama RS :</label>
					<input type="text" class="form-control" name="nama_rs">
				</div>
				<div class="form-group">
					<label for="message-text" class="col-form-label">Provinsi :</label>
					<input type="text" class="form-control" name="provinsi">
				</div>
				<div class="form-group">
					<label for="message-text" class="col-form-label">Alamat :</label>
					<input type="text" class="form-control" name="alamat_rs">
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
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
			<th>Pilihan</th>
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
					{"data": "alamat_rs"},
					{
						"data": null,
						render: function ( data, type, row ) {
							return "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#updateModal"+data.nomor+"' data-whatever='@mdo'>Edit</button>" +
							" <a href='http://localhost:8000/Covid/public/admin_wilayah/hapus/"+data.nomor+"' class='btn btn-danger'>Delete</a>";
						}
					}
				]
			});
		});
	</script>
	<?php foreach ($rs_rujukan as $item):?>
		<div class="modal fade" id="updateModal<?php echo $item->nomor;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data RS</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo base_url('admin/rs_rujukan/update') ?>">
				<input type="hidden" class="form-control" name="nomor" value="<?php echo $item->nomor;?>">
				<div class="form-group">
					<label for="recipient-name" class="col-form-label">Nama RS :</label>
					<input type="text" class="form-control" name="nama_rs" value="<?php echo $item->nama_rs;?>">
				</div>
				<div class="form-group">
					<label for="message-text" class="col-form-label">Provinsi :</label>
					<input type="text" class="form-control" name="provinsi" value="<?php echo $item->provinsi;?>">
				</div>
				<div class="form-group">
					<label for="message-text" class="col-form-label">Alamat :</label>
					<input type="text" class="form-control" name="alamat_rs" value="<?php echo $item->alamat_rs;?>">
				</div>
				<button type="submit" class="btn btn-primary">Ubah Data</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
		</div>
	<?php endforeach;?>
</body>
</html>