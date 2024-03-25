
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

	<link rel="canonical" href="<?=base_url('template/static')?>/https://demo-basic.adminkit.io/ui-forms.html" />

	<title>Barang Keluar</title>

	<link href="<?=base_url('template/static')?>/css/app.css" rel="stylesheet">
	<link href="<?=base_url('template/static')?>/https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

					<li class="sidebar-item <?= ($title=='admin')? 'active':'' ?>">
						<a class="sidebar-link" href="dashboard">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item <?= ($title=='profile')? 'active':'' ?>">
						<a class="sidebar-link" href="profile">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-header">
						Menu Utama
					</li>

					<li class="sidebar-item <?= ($title=='kebutuhan')? 'active':'' ?>">
						<a class="sidebar-link" href="info_kebutuhan">
              <i class="align-middle" data-feather="folder"></i> <span class="align-middle">Info Kebutuhan</span>
            </a>
					</li>

					<li class="sidebar-item <?= ($title=='sortir')? 'active':'' ?>">
						<a class="sidebar-link" href="hasil_sortir">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Hasil Sortir</span>
            </a>
					</li>

					<li class="sidebar-item <?= ($title=='masuk')? 'active':'' ?>">
						<a class="sidebar-link" href="barang_masuk">
              <i class="align-middle" data-feather="file-plus"></i> <span class="align-middle">Barang Masuk</span>
            </a>
					</li>

					<li class="sidebar-item <?= ($title=='keluar')? 'active':'' ?>">
						<a class="sidebar-link" href="barang_keluar">
              <i class="align-middle" data-feather="file-minus"></i> <span class="align-middle">Barang Keluar</span>
            </a>
					</li>

					<li class="sidebar-item <?= ($title=='total')? 'active':'' ?>">
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
								<a class="dropdown-item" href="<?=base_url('logout')?>">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		

            <?= $this->renderSection('content');?>
		</div>
	</div>

	<script type="text/javascript">
		function show(modalId) {
			var modal = document.getElementById(modalId);
			modal.classList.toggle("invisible");
			modal.classList.toggle("opacity-0");
		}
		function closeModal(modalId) {
			console.log(1);
			var modal = document.getElementById(modalId);
			modal.classList.add("invisible");
			modal.classList.add("opacity-0");
			
    	}
	</script>
	<script src="<?=base_url('template/static')?>/js/app.js"></script>

</body>

</html>