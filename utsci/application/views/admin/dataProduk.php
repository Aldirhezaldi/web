<div class="container-fluid">
	<div class="alert alert-info" role="alert">
		<i class="fas fa-fw fa-database"></i> Data Produk
	</div>

	<button class="btn btn-primary mt-3 mb-3" data-toggle="modal" data-target="#tambahBarang"><i class="fas fa-plus fa-sm" aria-hidden="true"></i> Tambah
		Produk</button>

	<table id="example" class="table table-striped table-bordered text-center" style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Kategori</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
            $no = 1;
            foreach ($produk as $p) : ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $p->nama_produk ?></td>
				<td><?= $p->kategori_produk ?></td>
				<td><?= $p->harga_produk ?></td>
				<td><?= $p->stok ?></td>
				<td><img style="height: 100px; width:100px;" src="<?= base_url().'/uploads/'.$p->foto_produk ?>"
						alt="Foto Produk"></td>
				<td>
					<?= anchor('admin/DataProduk/detail/'. $p->id_produk, '<button class="btn btn-success mr-2"><i class="fas fa-search-plus" aria-hidden="true"></i></button>')?>
					<?= anchor('admin/DataProduk/edit/'. $p->id_produk, '<button class="btn btn-primary mr-2"><i class="fas fa-edit" aria-hidden="true"></i></button>')?>
					<?= anchor('admin/DataProduk/hapus/'. $p->id_produk, '<button class="btn btn-danger mr-2"><i class="fas fa-trash" aria-hidden="true"></i></button>') ?>
				</td>
			</tr>
			<?php endforeach ?>
	</table>

	<!-- Modal -->
	<div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url(). 'admin/dataProduk/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="Nama_produk">Nama Produk</label>
							<input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
						</div>

						<div class="form-group">
							<label for="Kategori_produk">Kategori</label>
							<select class="form-control" id="kategori_produk" name="kategori_produk" required>
								<option selected>Pilih Kategori</option>
								<?php foreach($kategori as $key):?>
								<option value="<?= $key->nama_kategori?>"><?= $key->nama_kategori ?></option>
								<?php endforeach ?>
							</select>
						</div>

						<div class="form-group">
							<label for="Harga_produk">Harga</label>
							<input type="number" class="form-control" id="harga_produk" name="harga_produk" required>
						</div>

						<div class="form-group">
							<label for="Stok">Stok</label>
							<input type="number" class="form-control" id="stok" name="stok" required>
						</div>

						<h6>Foto</h6>
						<div class="custom-file mb-2">
							<label class="custom-file-label" for="Foto_produk">Choose File</label>
							<input type="file" class="custom-file-input" id="foto_produk" name="foto_produk">
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><br>
