<?= $this->extend('admin/layout')?>
<?= $this->section('content')?>
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

<?=$this->endSection()?>