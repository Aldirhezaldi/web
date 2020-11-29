<div class="container-fluid">
    <div class="alert alert-info mb-4" role="alert">
		<i class="fas fa-edit"></i> Edit Data Produk
	</div>

    <?php foreach ($produk as $p) : ?>
        <form method="POST" action="<?= base_url(). 'admin/DataProduk/update' ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Nama_produk">Nama Produk</label>
                <input type="hidden" name="id_produk" id="id_produk" class="form-control" value="<?= $p->id_produk ?>">
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $p->nama_produk ?>" required>
            </div>

            <div class="form-group">
				<label for="Kategori_produk">Kategori</label>
				<select class="form-control" id="kategori_produk" name="kategori_produk" required>
					<?php foreach($kategori as $key):?>
                        <?php if($key->nama_kategori == $p->kategori_produk) : ?></option>
                        <option value="<?= $key->nama_kategori?>" selected><?= $key->nama_kategori ?></option>
                        <?php else :?>
                        <option value="<?= $key->nama_kategori?>"><?= $key->nama_kategori ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
				</select>
			</div>

            <div class="form-group">
                <label for="Harga_produk">Harga</label>
                <input type="number" name="harga_produk" id="harga_produk" class="form-control" value="<?= $p->harga_produk ?>" required>
            </div>

            <div class="form-group">
                <label for="Stok">stok</label>
                <input type="number" name="stok" id="stok" class="form-control" value="<?= $p->stok ?>" required>
            </div>

            <h6>Foto</h6>
            <img style="height: 100px; width: 100px;" src="<?= base_url().'/uploads/'.$p->foto_produk ?>" alt="Foto Produk"><br><br>
			<div class="custom-file mb-2">
				<label class="custom-file-label" for="Foto_produk">Choose File</label>
				<input type="file" class="custom-file-input" id="foto_produk" name="foto_produk">
			</div>

            <button type="submit" class="btn btn-primary mt-3 float-right">Simpan</button>
        </form>
    <?php endforeach ?>