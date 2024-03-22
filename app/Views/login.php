
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="<?=base_url('template/static')?>/https://fonts.gstatic.com">
	<link rel="shortcut icon" href="<?=base_url('template/src')?>/img/icons/favicon.ico" />

	<link rel="canonical" href="<?=base_url('template/static')?>/https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Login</title>

	<link href="<?=base_url('template/static')?>/css/app.css" rel="stylesheet">
	<link href="<?=base_url('template/static')?>/https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<p class="lead">
								Masuk Akun Untuk Melanjutkan
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									
								
								
									<form action="<?=base_url('/login')?>" method="post">
									<?php if (session()->has('error')) : ?>
									
									<div class="bg-danger d-flex justify-content-center align-items-center rounded" role="alert">
										<?= session('error') ?>
									</div>
								<?php endif; ?>
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Username" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="password" />
										</div>
										<div>
											<div class="form-check align-items-center">
												<input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" >
												<label class="form-check-label text-small" for="customControlInline">Ingatkan Saya</label>
											</div>
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Masuk</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="<?=base_url('template/static')?>/js/app.js"></script>

</body>

</html>