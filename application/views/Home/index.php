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

		.form-circle {
			border-radius: 3rem;
		}

		.navbar-order {
			padding-bottom: 1rem;
		}
	</style>
</head>

<body>
	<section class="navbar-order ">
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


	<section class="body-order ">
		<div class="container ">

			<div class="row border form-rounded align-items-center">
				<div class="col-md-8">
					<!-- // form cari barang -->
					<div class="container">
						<!-- menu options -->
						<div class="row">
							<div class="col-md-8 mt-4 mb-4 ">
								<a href="#" class="btn position-relative form-circle">
									<div class="card bg-info form-circle overflow-hidden">
										<div class="card-body ">
											<img src="<?= base_url('assets/img/') ?>cycle.png" alt="" width="50" height="44" class="d-inline-block align-text-top">
										</div>
									</div>

								</a>
								<a href="#" class="btn position-relative form-circle">
									<div class="card bg-info form-circle overflow-hidden">
										<div class="card-body ">
											<img src="<?= base_url('assets/img/') ?>cycle.png" alt="" width="50" height="44" class="d-inline-block align-text-top">
										</div>
									</div>

								</a>
								<a href="#" class="btn position-relative form-circle">
									<div class="card bg-info form-circle overflow-hidden">
										<div class="card-body ">
											<img src="<?= base_url('assets/img/') ?>cycle.png" alt="" width="50" height="44" class="d-inline-block align-text-top">
										</div>
									</div>

								</a>
							</div>
						</div>
						<!-- end menu options -->
						<div class="card ">
							<div class="card-body">
								<label for="" class="form-label">Order Barang</label>
								<div class="input-group mb3">
									<span class="input-group-text form-rounded">
										<!-- icon disini -->
										<i class="fas fa-search-dollar"></i>
									</span>
									<input type="text" id="barang" class="form-control form-rounded is-invalid	">
								</div>

							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col-md-2 ">Nama Item</div>
									<div class="col-md-1 ">Qty</div>
									<div class="col-md-2 text-center">Harga <i class="fas fa-dollar-sign"></i>
									</div>
									<div class="col">Potongan</div>
									<div class="col-md-1 ">Disc</div>
									<div class="col-md-2 ">Harga Terjual</div>
									<div class="col-md-1 "></div>
								</div>
							</div>
							<div class="card-body">
								<div class="row mb-2 rowtable" id="rowtable" onclick="clickRow(this)">
									<div class="col-md-2">Gear Vechicle</div>
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
									<div class="col-md-2">Rp. 12.000,00 </div>
									<div class="col-md-1">
										<a href="#" class="btn btn-outline-info form-rounded">
											<i class="fas fa-minus"></i>
										</a>
									</div>
								</div>
								<div class="row mb-2 rowtable" id="rowtable" onclick="clickRow(this)">
									<div class="col-md-2">Gear Vechicle</div>
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
									<div class="col-md-2">Rp. 12.000,00 </div>
									<div class="col-md-1">
										<a href="#" class="btn btn-outline-info form-rounded">
											<i class="fas fa-minus"></i>
										</a>
									</div>
								</div>
								<div class="row mb-2 rowtable" id="rowtable" onclick="clickRow(this)">
									<div class="col-md-2">Gear Vechicle</div>
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
									<div class="col-md-2">Rp. 12.000,00 </div>
									<div class="col-md-1">
										<a href="#" class="btn btn-outline-info form-rounded">
											<i class="fas fa-minus"></i>
										</a>
									</div>
								</div>
								<div class="row mb-2 rowtable" id="rowtable" onclick="clickRow(this)">
									<div class="col-md-2">Gear Vechicle</div>
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
									<div class="col-md-2">Rp. 12.000,00 </div>
									<div class="col-md-1">
										<a href="#" class="btn btn-outline-info form-rounded">
											<i class="fas fa-minus"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card-header">
								<div class="row">
									<div class="col"></div>
									<div class="col-md-3 ">
										<ul class="list-group list-group-flush">
											<li class="list-group-item disabled">Total Belanja</li>
											<li class="list-group-item disabled">Total Potongan</li>
											<li class="list-group-item disabled">Qty</li>
										</ul>
									</div>
									<div class="col-md-6 ">
										<ul class="list-group list-group-flush">
											<li class="list-group-item">Rp. 12.000,00</li>
											<li class="list-group-item">Rp. 0</li>
											<li class="list-group-item">25 item</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 text-end align-items-center">

									</div>
									<div class="col-md-6">
										<form class="form-floating mb-1 mt-1">
											<input value="0" type="text" class="form-control " id="floatingInputInvalid" placeholder="Rp. 0.000.000">
											<label for="floatingInputInvalid">Total Bayar (Rp. )</label>
										</form>
										<form class="form-floating mb-1 mt-1">
											<input type="text" class="form-control bg-warning" readonly id="floatingInputInvalid" placeholder="Rp. 0.000.000">
											<label for="floatingInputInvalid">Kembalian (Rp. )</label>
										</form>
									</div>
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
	<script>
		clickRow = async (a) => {

			if (!a.classList.contains("bg-info")) {
				var items = document.getElementsByClassName("rowtable");
				for (var i = 0; i < items.length; i++) {
					items[i].classList.remove("bg-info");
				}
				a.classList.add("bg-info");

			}
		}
	</script>
</body>

</html>
