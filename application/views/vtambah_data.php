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
		<right><a href="<?= site_url('Film/tampil') ?>" class="btn btn-info"><< KEMBALI</a></right>
		<center><h1>TAMBAH DATA FILM</h1></center>
		<table class="table table-bordered">
			<form action="<?= site_url('Film/tambah_data_action') ?>" method="post">
				<thead>
					<tr>
						<th>Kode</th>
						<th>:</th>
						<th><input type="text" name="kode" required/></th>
					</tr>
					<tr>
						<th>Judul</th>
						<th>:</th>
						<th><input type="text" name="judul" required/></th>
					</tr>
					<tr>
						<th>Genre</th>
						<th>:</th>
						<th><input type="text" name="genre" required/></th>
					</tr>
					<tr>
						<th>Tahun Terbit</th>
						<th>:</th>
						<th><input type="text" name="tahun_terbit" required/></th>
					</tr>
					<tr>
						<th colspan="3"><center><input type="submit" value="TAMBAH DATA" /></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
