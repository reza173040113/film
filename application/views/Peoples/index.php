<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container">
	<h3 class="mt-3">List of peoples</h3>
	<div class="row">
		<div class="col-md-5">
			<form action="<?= base_url('peoples'); ?>" method="post">
				<div class="input-group mb-3">
					<input type="text" name="keyword" class="form-control" placeholder="Search keyword.." autofocus autocomplete="off">
					<div class="input-group-append">
						<input type="submit" name="submit" class="btn btn-primary">
					</div>
				</div>
				
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md">
			<h5>Results : <?= $total_rows; ?></h5>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if(empty($peoples)) : ?>
						<tr>
							<td colspan="4">
								<div class="alert alert-danger" role="alert">
									data not found!
								</div>
							</td>
						</tr>
					<?php endif ?>
					<?php foreach($peoples as $p) : ?>
						<tr>
							<th><?= ++$start; ?></th>
							<td><?= $p['name']; ?></td>
							<td><?= $p['email']; ?></td>
							<td>
								<a href="" class="btn btn-warning">detail</a>
								<a href="" class="btn btn-success">edit</a>
								<a href="" class="btn btn-danger">delete</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>

			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
</body>
</html>