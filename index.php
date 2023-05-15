<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Anisa FGS Store</title>
		<!-- Favicon-->
		<link rel="icon" type="image/x-icon" href="frontend/assets/favicon.ico" />
		<!-- Bootstrap icons-->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
			rel="stylesheet"
		/>
		<!-- Core theme CSS (includes Bootstrap)-->
		<link href="frontend/css/styles.css" rel="stylesheet" />
	</head>
	<body>
		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container px-4 px-lg-5">
				<a class="navbar-brand" href="#!">Anisa FGS Store</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a
								class="nav-link dropdown-toggle"
								id="navbarDropdown"
								href="#"
								role="button"
								data-bs-toggle="dropdown"
								aria-expanded="false"
								>Order List</a
							>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="backend/index.php">List Pakaian</a></li>
								<li><hr class="dropdown-divider" /></li>
								<li><a class="dropdown-item" href="backend/pesanan/list_pesanan.php">List Pesanan</a></li>
								<li><a class="dropdown-item" href="backend/tipe/list_tipe">List Tipe Pakaian</a></li>
							</ul>
						</li>
					</ul>
					<form class="d-flex">
						<button class="btn btn-outline-dark" type="submit">
							<i class="bi-cart-fill me-1"></i>
							Cart
							<span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
						</button>
					</form>
				</div>
			</div>
		</nav>
		<!-- Header-->
		<header class="bg-dark py-5">
			<div class="container px-4 px-lg-5 my-5">
				<div class="text-center text-white">
					<h1 class="display-4 fw-bolder">Anisa FGS Store</h1>
					<p class="lead fw-normal text-white-50 mb-0">Anisa FGS Store adalah toko terbaik dan berkualitas untuk fashion Anda, kami menyediakan berbagai tren pakaian untuk wanita dan pria dengan harga yang terjangkau. Jika kamu mencari pakaian untuk semua kegiatanmu, seperti hari-hari santai, kerja, hangout, atau pesta – Anisa FGS adalah pilihan yang tepat. </p>
				</div>
			</div>
		</header>
		<!-- Section-->
		<section class="py-5">
			<div class="container px-4 px-lg-5 mt-5">
				<div
					class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
				>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Sale
							</div>
							<!-- Product image-->
							<img
								
								class="card-img-top"
								src="https://i.pinimg.com/564x/ef/ee/0e/efee0ef00ed764fbb3baa087bd6b41cf.jpg"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4" >
								<div class="text-center">
									<!-- Product name-->
									<h5 class="fw-bolder">Sale Item</h5>
									<!-- Product price-->
									<span class="text-muted text-decoration-line-through"
										>$500.000</span
									>
									$350.000
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Sale
							</div>
							<!-- Product image-->
							<img
								class="card-img-top"
								src="https://i.pinimg.com/564x/3b/2d/ff/3b2dff16f6ea0550ecd69723a3480464.jpg"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<h5 class="fw-bolder">Sale Item</h5>
									<!-- Product price-->
									<span class="text-muted text-decoration-line-through"
										>$450.000</span
									>
									$235.000
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Sale
							</div>
							<!-- Product image-->
							<img
								class="card-img-top"
								src="https://i.pinimg.com/564x/aa/b9/84/aab9845f0b0345bc4b1870a60d65ae97.jpg"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<h5 class="fw-bolder">Sale Item</h5>
									<!-- Product price-->
									<span class="text-muted text-decoration-line-through"
										>$340.000</span
									>
									$160.000
								</div>
							</div>
						</div>
					</div>
					<div class="col mb-5">
						<div class="card">
							<!-- Sale badge-->
							<div
								class="badge bg-dark text-white position-absolute"
								style="top: 0.5rem; right: 0.5rem"
							>
								Sale
							</div>
							<!-- Product image-->
							<img
								class="card-img-top"
								src="https://i.pinimg.com/564x/65/7b/e7/657be7ae1c86f2faabf76da59ce2ab08.jpg"
								alt="..."
							/>
							<!-- Product details-->
							<div class="card-body p-4">
								<div class="text-center">
									<!-- Product name-->
									<h5 class="fw-bolder">Sale Item</h5>
									<!-- Product price-->
									<span class="text-muted text-decoration-line-through"
										>$500.000</span
									>
									$250.000
								</div>
							</div>
						</div>
					</div>
					<a class="btn btn-primary mb-3" href="backend/pesanan/form_pesanan.php" role="button">Create pesanan</a>
				</div>
			</div>
		</section>
		<!-- Footer-->
		<footer class="py-5 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">
					Anisa Faronati &copy; Anisa FGS Store
				</p>
			</div>
		</footer>
		<!-- Bootstrap core JS-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script src="frontend/js/scripts.js"></script>
	</body>
</html>
