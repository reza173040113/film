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
		<center><h1>UBAH DATA FILM</h1></center>
		<table class="table table-bordered">
			<form action="" method="post">
				<input type="hidden" name="id" value="<?= $film['id'];?>">
				<thead>
					<tr>
						<th>Kode</th>
						<th>:</th>
						<th><input type="text" name="kode" required id="kode" value="<?= $film['kode'];?>" /></th>
					</tr>
					<tr>
						<th>Judul</th>
						<th>:</th>
						<th><input type="text" name="judul" required id="judul" value="<?= $film['judul'];?>"/></th>
					</tr>
					<tr>
						<th>Genre</th>
						<th>:</th>
						<th>
							<input type="text" name="genre" required id="genre" value="<?= $film['genre'];?>"/>
						</th>
					</tr>
					<tr>
						<th>Tahun Terbit</th>
						<th>:</th>
						<th>
							<input type="text" name="tahun_terbit" required id="tahun_terbit" value="<?= $film['tahun_terbit'];?>"/>
						</th>
					</tr>
					<tr>
						<th colspan="3"><center><input type="submit" value="UBAH DATA" /></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
