<?= $this->extend('admin/layout')?>
<?= $this->section('content')?>
<main class="content">
				<div class="container-fluid p-0">
				<button class="btn btn-primary my-2" onclick="show('add-modal')" >
					<span data-feather="plus"></span> Tambah Barang
					</button>
					<button class="btn btn-warning my-2"  onclick="printTable()">Print Table <i class="fa fa-print" aria-hidden="true"></i></button>

					<div class="d-flex z-3 flex-column bg-white invisible opacity-0 modal position-fixed p-4 " id="add-modal" style=" top:20%;">
							<h1>Tambah Barang</h1>
					<form action="<?=base_url('barang/store')?>" method="post">

						<div class="mb-3 row">
							<label for="exampleInputEmail1" class="form-label">Nama Barang</label>
							<input type="text" name="nama" class="form-control" id="exampleInputEmail1" required>
						</div>
						<div class="mb-3 row ">
							<label for="exampleInputPassword1" class="form-label">Jumlah Barang Baik</label>
							<input type="number" name="baik" class="form-control" id="exampleInputPassword1" required>
						</div>
						<div class="mb-3 row ">
							<label for="exampleInputPassword1" class="form-label">Jumlah Barang Rusak</label>
							<input type="number" name="rusak" class="form-control" id="exampleInputPassword1" required>
						</div>
						
					<button type="submit" class="btn btn-primary">Submit</button>
					</form>
							<button class="btn btn-primary my-2 position-absolute top-0 end-0 m-2" onclick="closeModal('add-modal')">Close</button>
					</div>
					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Barang Masuk</h1>
                        <table id="table" class="table table-stripped" style='word-wrap: break-word; table-layout: fixed;'>
							<thead>
								<tr>
									<th scope="col" style="width:10%">No. </th>
									<th scope="col" style="width:15%">Nama Barang</th>
									<th scope="col">Jumlah Barang Baik</th>
									<th scope="col" >Jumlah Barang Rusak</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								
								<?php $no=1; foreach($barang_masuk as $barang):?>
									<tr>
									<td><?= $no++?></td>
									<td><?= $barang['nama']?></td>
									<td><?= $barang['baik']?></td>
									<td><?= $barang['rusak']?></td>
									<td><div class="inline-flex "><button class="btn btn-primary w-50 " onclick="show('edit-modal<?=$barang['id']?>')">EDIT</button><a href="<?=base_url('barang/delete/'.$barang['id'])?>" class="btn btn-danger w-50">DELETE</a></div></td>
									<div class="d-flex z-3 flex-column bg-white invisible opacity-0 modal position-fixed p-4 " id="edit-modal<?=$barang['id']?>" style=" top:20%;">
									<h1>Edit Barang</h1>
									<form action="<?=base_url('barang/store')?>" method="post">
										<input type="hidden" name="id" value="<?=$barang['id']?>">
										<div class="mb-3 row">
											<label for="exampleInputEmail1" class="form-label">Nama Barang</label>
											<input type="text" value="<?= $barang['nama']?>" name="nama" class="form-control" id="exampleInputEmail1" required>
										</div>
										<div class="mb-3 row ">
											<label for="exampleInputPassword1" class="form-label">Jumlah Barang Baik</label>
											<input type="number" value="<?= $barang['rusak']?>"  name="rusak" class="form-control" id="exampleInputPassword1" required>
										</div>
										<div class="mb-3 row ">
											<label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
											<input type="number" value="<?= $barang['baik']?>" name="baik" class="form-control" id="exampleInputPassword1" required>
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

		<script>

function printTable() {
    var printContent = "<style>@media print {.print-table {border-collapse: collapse;} .print-table th, .print-table td {border: 1px solid black; padding: 8px;}}</style>";
    printContent += "<h2>Hasil Sortir</h2><table class='print-table'><thead><tr><th>No.</th><th>Nama Barang</th><th>Jumlah Barang Baik</th><th>Jumlah Barang Rusak</th></tr></thead><tbody>";

    // Iterate through each row of the table
    var tableRows = document.querySelectorAll("#table tbody tr");
    tableRows.forEach(function(row) {
        var cells = row.querySelectorAll("td"); // Selecting specific columns 1, 2, 3, 4
        printContent += "<tr>";
        for (var i = 0; i < 4; i++) { // Loop through the first 4 cells (columns 1, 2, 3, 4)
            printContent += "<td>" + cells[i].innerHTML + "</td>";
        }
        printContent += "</tr>";
    });

    printContent += "</tbody></table>";

    // Create a new window for printing
    var printWindow = window.open("", "_blank");
    printWindow.document.open();
    printWindow.document.write(printContent);
    printWindow.document.close();

    // Print the window
    printWindow.print();
}

		</script>
            <?=$this->endSection()?>