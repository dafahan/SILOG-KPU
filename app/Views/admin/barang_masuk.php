<?= $this->extend('admin/layout')?>
<?= $this->section('content')?>
<main class="content">
				<div class="container-fluid p-0">
				<a href="#" class="btn btn-primary my-2" onclick="show('add-modal')" >
					<span data-feather="plus"></span> Tambah Barang
					</a>
					<div class="d-flex z-3 flex-column bg-white invisible opacity-0 modal position-fixed p-4 " id="add-modal" style=" top:20%;">
							<h1>Tambah Barang</h1>
					<form action="<?=base_url('barang/store')?>" method="post">

						<div class="mb-3 row">
							<label for="exampleInputEmail1" class="form-label">Nama Barang</label>
							<input type="text" name="nama" class="form-control" id="exampleInputEmail1" required>
						</div>
						<div class="mb-3 row ">
							<label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
							<input type="number" min="1" name="kuantitas" class="form-control" id="exampleInputPassword1" required>
						</div>
						<div class="mb-3 row ">
							<label for="exampleInputPassword1" class="form-label">Tanggal Keluar</label>
							<input type="date" name="masuk" class="form-control" id="exampleInputPassword1" required>
						</div>
						<div class="mb-3 row">
							<label for="exampleInputEmail1" class="form-label">Status Barang</label>
							<input type="text" name="status" class="form-control" id="exampleInputEmail1" required>
						</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					</form>
							<button class="btn btn-primary my-2 position-absolute top-0 end-0 m-2" onclick="closeModal('add-modal')">Close</button>
					</div>
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Barang Masuk</h1>
                        <table class="table table-stripped" style='word-wrap: break-word; table-layout: fixed;'>
							<thead>
								<tr>
									<th scope="col" style="width:10%">No. </th>
									<th scope="col" style="width:15%">Nama Barang</th>
									<th scope="col">Jumlah Barang</th>
									<th scope="col" style="width:15%">Tanggal Masuk</th>
									<th scope="col">Status Barang</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								
								<?php $no=1; foreach($barang_masuk as $barang):?>
									<tr>
									<td><?= $no++?></td>
									<td><?= $barang['nama']?></td>
									<td><?= $barang['kuantitas']?></td>
									<td><?= ($barang['masuk']=="0000-00-00")?"Belum di atur" : $barang['masuk'] ?></td>
									<td><?= $barang['status']?></td>
									<td colspan="2"><div class="inline-flex "><button class="btn btn-primary w-50 " onclick="show('edit-modal<?=$barang['id']?>')">EDIT</button><a href="<?=base_url('barang/delete/'.$barang['id'])?>" class="btn btn-danger w-50">DELETE</a></div></td>
									<div class="d-flex z-3 flex-column bg-white invisible opacity-0 modal position-fixed p-4 " id="edit-modal<?=$barang['id']?>" style=" top:20%;">
									<h1>Edit Barang</h1>
									<form action="<?=base_url('barang/store')?>" method="post">
										<input type="hidden" name="id" value="<?=$barang['id']?>">
										<div class="mb-3 row">
											<label for="exampleInputEmail1" class="form-label">Nama Barang</label>
											<input type="text" value="<?= $barang['nama']?>" name="nama" class="form-control" id="exampleInputEmail1" required>
										</div>
										<div class="mb-3 row ">
											<label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
											<input type="number" value="<?= $barang['kuantitas']?>" min="1" name="kuantitas" class="form-control" id="exampleInputPassword1" required>
										</div>
										<div class="mb-3 row ">
											<label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
											<input type="date" value="<?= $barang['masuk']?>" name="masuk" class="form-control" id="exampleInputPassword1" required>
										</div>
										<div class="mb-3 row">
											<label for="exampleInputEmail1" class="form-label">Status Barang</label>
											<input type="text" value="<?= $barang['status']?>" name="status" class="form-control" id="exampleInputEmail1" required>
										</div>
									<button type="submit" class="btn btn-primary">Submit</button>
									</form>
											<button class="btn btn-primary my-2 position-absolute top-0 end-0 m-2" onclick="closeModal('edit-modal<?=$barang['id']?>')">Close</button>
									</div>
									
									<?php endforeach?>
									</tr>
							</tbody>
						</table>
		
  </a>
			</main>

            <?=$this->endSection()?>