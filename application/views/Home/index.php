<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link href="<?= base_url('assets/') ?>/bootstrap@5.1.2/dist/css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?= base_url('assets/') ?>/icons/fontawesome-free-5.15.4/css/all.css">
	<style>
		.form-rounded {
			border-radius: 1rem;
		}
	</style>
</head>

<body>
	<section>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="<?= base_url('assets/img/') ?>cycle.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
					RM SHOP</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav  me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Dropdown
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled">Disabled</a>
						</li>
					</ul>
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-info" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
	</section>
	<section>
		<div class="container overflow-hidden">
			<div class="row border align-items-center">
				<div class="col-md-8">
					<!-- // form cari barang -->
					<div class="container">
						<div class="card">
							<div class="card-body">
								<label for="" class="form-label">Order Barang</label>
								<div class="input-group mb3">
									<span class="input-group-text form-rounded">
										<!-- icon disini -->
										<i class="fas fa-search-dollar"></i>
									</span>
									<input type="text" id="barang" class="form-control form-rounded">
								</div>

							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col-md-3 ">Nama Item</div>
									<div class="col-md-1 ">Qty</div>
									<div class="col-md-2 text-center">Harga <i class="fas fa-dollar-sign"></i>
									</div>
									<div class="col"></div>
									<div class="col-md-1 ">Disc</div>
									<div class="col-md-2 ">Harga Terjual</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-3">Gear Vechicle</div>
									<div class="col-md-1">25</div>
									<div class="col-md-2">Rp. 25.000,00
									</div>
									<div class="col">
										<label for="">Rp. 0</label>
										<div class="input-group mb3 d-none">
											<input type="text" id="barang" class="form-control form-rounded">
										</div>
									</div>
									<div class="col-md-1">15%</div>
									<div class="col-md-2">Rp. 12.0000000,00 </div>
								</div>
							</div>
						</div>
					</div>
					<!-- //end cari barang -->
				</div>
				<div class="col align-self-center">
					<div class="p-3 "><img src="<?= base_url('assets/img/') ?>cycle.png" class="img-fluid" alt=""></div>

				</div>
			</div>
		</div>
	</section>


	<script type="text/javascript" src="<?= base_url('assets/') ?>/bootstrap@5.1.2/dist/js/bootstrap.js"></script>
</body>

</html>
