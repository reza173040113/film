<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<center><h1>DAFTAR FILM</h1></center>
		<a href="<?= site_url('Film/tambah_data') ?>" class="btn btn-info" style="margin-bottom: 10px;margin-left: 5px;">TAMBAH DATA</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Kode</th>
					<th>Judul</th>
					<th>Genre</th>
					<th>Tahun Terbit</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($dat as $row){ ?>
					<tr>
						<td><?= $row->kode ?></td>
						<td><?= $row->judul ?></td>
						<td><?= $row->genre ?></td>
						<td><?= $row->tahun_terbit ?></td>
						<td><a href="<?= site_url('Film/ubah/'.$row->kode) ?>" class="btn btn-warning">EDIT</a></td>
						<td><a href="<?= site_url('Film/delete_data/'.$row->kode) ?>"  class="btn btn-danger" onclick="return confirm('yakin?');">DELETE</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
