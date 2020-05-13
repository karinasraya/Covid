<!DOCTYPE html>
<html>
<head>
	<title>RS Rujukan COVID-19</title>
</head>
<body>
	<div style="margin-left:320px;">
		<h1>RS Rujukan COVID-19 di Setiap Provinsi</h1>
	</div>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Provinsi</th>
			<th>Nama RS</th>
			<th>Alamat</th>
		</tr>
		<?php
		$no = 1;
		foreach($rs_rujukan as $rs){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $rs->provinsi ?></td>
			<td><?php echo $rs->nama_rs ?></td>
			<td><?php echo $rs->alamat_rs ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>