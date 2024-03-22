
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

	<link rel="canonical" href="<?=base_url('template/static')?>/https://demo-basic.adminkit.io/profile" />

	<title>Profile</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link href="<?=base_url('template/static')?>/css/app.css" rel="stylesheet">
	<link href="<?=base_url('template/static')?>/https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	
</head>

<body>
<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">SILOG </span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Halaman Utama
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="dashboard">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="profile">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-header">
						Menu Utama
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="info_kebutuhan">
              <i class="align-middle" data-feather="folder"></i> <span class="align-middle">Info Kebutuhan</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="hasil_sortir">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Hasil Sortir</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="barang_masuk">
              <i class="align-middle" data-feather="file-plus"></i> <span class="align-middle">Barang Masuk</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="barang_keluar">
              <i class="align-middle" data-feather="file-minus"></i> <span class="align-middle">Barang Keluar</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="total_barang">
              <i class="align-middle" data-feather="file"></i> <span class="align-middle">Total Barang</span>
            </a>
					</li>

				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="<?= base_url('assets/images/profiles/'.$foto)?>" class="avatar img-fluid rounded me-1" alt="profiles" /> <span class="text-dark"><?= $username ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="profile"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
		
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Profile</h1>
  
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Detail</h5>
								</div>
								<form action="<?=base_url('/changephoto')?>" method="post" enctype="multipart/form-data">
								<div class="card-body text-center">
								<div class="picture position-relative text-center w-auto">
            <img src="<?= base_url('assets/images/profiles/'.$foto)?>" class="picture-src rounded-circle overflow-hidden mb-2" id="wizardPicturePreview" title="" width="128" height="128">
            <input type="file" name="foto" id="wizard-picture" accept="image/*" class="position-absolute opacity-0 top-0 d-block h-100 rounded-circle" style="left: 35%;" required>
        </div>
									
									<h5 class="card-title mb-0"><?= $nama ?></h5>
									<div class="text-muted mb-2"><?= $jabatan ?></div>

									<div>
										<button type="submit" class="btn btn-primary btn-sm" >Ganti Foto Profile</button>
									</div>
									</form>
								</div>
								<script>
									document.addEventListener("DOMContentLoaded", function() {
									const wizardPictureInput = document.getElementById('wizard-picture');
									const wizardPicturePreview = document.getElementById('wizardPicturePreview');
									wizardPictureInput.addEventListener('mouseover', function() {
										wizardPicturePreview.style.border = '2px solid blue';
									});

									wizardPictureInput.addEventListener('mouseout', function() {
										wizardPicturePreview.style.border = 'none';
									});
								});

									$(document).ready(function(){

										$("#wizard-picture").change(function(){
											readURL(this);
										});
									});
									function readURL(input) {
										if (input.files && input.files[0]) {
											var reader = new FileReader();

											reader.onload = function (e) {
												$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
											}
											reader.readAsDataURL(input.files[0]);
										}
									}
								</script>
								<div class="card-body">
									<h5 class="h6 card-title">Tentang</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Alamat <a href="#"><?= $alamat ?></a></li>

										<li class="mb-1"><span data-feather="check-circle" class="feather-sm me-1"></span> NIP <a href="#"><?= $nip ?></a></li>
										</ul>
								</div>
								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Biography</h5>
									<p contenteditable="true" id="bio">
									<?= $biografi ?></p>
								</div>

								<div class="card-body">
									<form id="passwordForm" class="col-4">
									<div id="passwordAlert" class="alert alert-danger d-none bg-danger rounded d-flex w-100 justify-content-center mb-2" role="alert">Passwords do not match!</div>
									<div id="passwordSuccess" class="alert alert-success d-none bg-success rounded d-flex w-100 justify-content-center mb-2" role="alert">Changes saved!</div>
										<h5 class="h6 card-title">Change Password</h5>
										<input id="passwordInput" class="form-control mb-2" name="password" type="password" placeholder="New Password"/>
										<h5 class="h6 card-title">Confirm Password</h5>
										<input id="confirmPasswordInput" class="form-control mb-2" type="password" placeholder="Confirm Password"/>
										<button type="submit" class="btn btn-primary rounded">Confirm Changes</button>
									</form>
								</div>
								<script>document.addEventListener("DOMContentLoaded", function () {
									const passwordForm = document.getElementById("passwordForm");
									const passwordInput = document.getElementById("passwordInput");
									const confirmPasswordInput = document.getElementById("confirmPasswordInput");
									const passwordAlert = document.getElementById("passwordAlert");
									const passwordSuccess = document.getElementById("passwordSuccess");
									passwordForm.addEventListener("submit", function (event) {
										event.preventDefault();
										const bioElement = document.getElementById('bio');
										const bioContent = bioElement.innerHTML;
										const password = passwordInput.value;
										const confirmPassword = confirmPasswordInput.value;

										const formData = new FormData();  
    									formData.append('password', passwordInput.value);
										formData.append('biografi',bioContent)
										if (password !== confirmPassword) {
										passwordAlert.classList.remove("d-none");
										setTimeout(function () {
											passwordAlert.classList.add("d-none");
										}, 3000);
										} else {
					
											fetch('<?= base_url('/changepassword') ?>', {
												method: 'POST',
												body: formData
											})
											.then(response => {
												if (response.ok) {
													passwordInput.value = '';
													confirmPasswordInput.value = '';
													passwordSuccess.classList.remove("d-none");
													setTimeout(function () {
														passwordSuccess.classList.add("d-none");
													}, 3000);
												} else {
													console.error('Error changing password:', response.statusText);
												}
											})
											.catch(error => {
												console.error('Error changing password:', error);
											});

										}
									});
									});
									</script>
							</div>
						</div>
				</div>
			</main>
		</div>
	</div>

	<script src="<?=base_url('template/static')?>/js/app.js"></script>

</body>

</html>