<div class="container-fluid">


    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($produk as $p) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img style="width:280px; height:200px;" class="card-img-top ml-5" src="<?= base_url() . '/uploads/' . $p->foto_produk ?>" alt="Foto Produk">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?= $p->nama_produk ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $p->kategori_produk ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $p->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">Rp. <?= number_format($p->harga_produk, 0, ',', '.') ?></div>
                                    </strong></td>
                            </tr>
                        </table>
                        <?= anchor('dashboard/tambah_ke_keranjang/' . $p->id_produk, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                        <?= anchor('base', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>