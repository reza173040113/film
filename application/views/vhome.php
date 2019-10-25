<!DOCTYPE html>
	<head>
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
		<style type="text/css">
			body{
				background: url("<?= base_url('assets/img/2.jpg') ?>");
				background-repeat: no-repeat;
				background-size: cover;
			}
			@font-face{
				font-family: 'TAKASIH';
				src:url('<?=base_url('assets/fonts/TAKASIH.ttf') ?>') format('truetype');
			}
			h1{
				color: white;
				font-family: TAKASIH;
				font-size: 72px;
				margin:19%;
				text-shadow: 100px,10px,10px,#333;
				-webkit-text-shadow:100px,10px,10px,#333;
				-o-text-shadow:100px,10px,10px,#000;
				-ms-text-shadow:100px,10px,10px,#000;


			}
			a{
				border: 1px solid white;
				padding:20px 45px;
				color: white;
				font-size: 20px;
				border-radius: 10px;
				box-shadow:  0px 0px 5px 5px #fff;
				font-family: Lucida Console;
				margin-right: 20px;

			}
			a:hover{
				text-decoration: none;
				color: white;
			}
			.admin{
				margin-top: -17%;
			}

		</style>
		<title></title>
	</head>
	<body>
		<center>
			<h1><?= $nama ?> MOVIE </h1>
			<div class="admin">
				<a href="<?=site_url('Film/tampil') ?>">Admin</a>
				<a href="<?= base_url(); ?>peoples">Peoples</a>
			</div>
		</center>
	</body>
</html>
