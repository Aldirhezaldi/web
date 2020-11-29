<div class="container-fluid">

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img style="height: 400px;" src="<?= base_url('assets/img/slider3.jpg') ?>" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img style="height: 400px;" src="<?= base_url('assets/img/slider4.jpg') ?>" class="d-block w-100" alt="...">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="row text-center mt-4">
		<?php foreach ($produk as $p) : ?>
		<div class="card ml-5 mb-4" style="width: 16rem;">
			<img style="height: 200px; widht: 200px;" src="<?= base_url(). '/uploads/'.$p->foto_produk ?>"
				class="card-img-top" alt="Foto Produk">
			<div class="card-body">
				<h5 class="card-title mb-3"><?= $p->nama_produk ?></h5>
				<span class="badge badge-pill badge-success mb-3">Rp. <?= number_format($p->harga_produk, 0, ',', '.')?></span><br>
                <?= anchor('dashboard/tambah_ke_keranjang/'. $p->id_produk, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                <?= anchor('dashboard/detail/'. $p->id_produk, '<div class="btn btn-sm btn-success">Detail</div>') ?>
			</div>
		</div>
		<?php endforeach ?>
	</div><br>
</div>


