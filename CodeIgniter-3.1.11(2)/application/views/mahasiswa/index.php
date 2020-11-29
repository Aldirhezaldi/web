<div class="container">
	<?php if ($this->session->flashdata('flash-data')): ?>
	<div class="row mt-4">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Mahasiswa <strong> berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>

				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="row mt-4">
		<div class="col-md-6">
			<a class="btn btn-primary" href="<?= base_url(); ?>mahasiswa/tambah">Tambah Data</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword">

					<div class="input-group-append">
						<button type="submit" class="btn btn-primary">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-8">
			<h2>Daftar Mahasiswa</h2>

			<!-- alert -->
			<?php if (empty($mahasiswa)): ?>
			<div class="alert alert-danger" role="alert">
				Data Mahasiswa Tidak Ditemukan
			</div>
			<?php endif; ?>

			<table class="table" style="text-align: center;">
				<thead class="thead-dark" style="text-align: center;">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nim</th>
						<th scope="col">Nama</th>
						<th scope="col">Matkul</th>
						<th scope="col">Kelas</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
                <?php $no=0;
                foreach ($mahasiswa as $mhs) :
                    $no++;?>
				<tbody>
					<tr>
						<th scope="row"><?php echo $no; ?></th>
						<td><?= $mhs['nim'];?></td>
						<td><?= $mhs['nama'];?></td>
						<td><?= $mhs['nama_matkul'];?></td>
						<td><?= $mhs['nama_kelas'];?></td>
						<td>
							<ul class="list-group">
								
								<li class="list-group-item" style="border: 0px; margin-top: -9px;">
									<a href="<?= base_url();?>mahasiswa/hapus/<?= $mhs['id_mengampu'];?>/<?= $mhs['id'];?>"
										class="badge badge-danger float-right"
										onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a>
									<a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'];?>"
										class="badge badge-success float-right">Edit</a>
									<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id'];?>/<?= $mhs['nama_matkul'];?>/<?= $mhs['nama_kelas'];?>"
										class="badge badge-primary float-right">Detail</a>
								</li>
								
							</ul>
						</td>
					</tr>
				</tbody>
				<?php endforeach; ?>
			</table>
			<!--<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs) :?>
				<li class="list-group-item">
					<?= $mhs['nama'];?>
					<a href="<?= base_url();?>mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right"
						onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a>
					<a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'];?>"
						class="badge badge-success float-right">Edit</a>
					<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id'];?>"
						class="badge badge-primary float-right">Detail</a>
				</li>
				<?php endforeach; ?>
			</ul>-->
		</div>
	</div>
</div>