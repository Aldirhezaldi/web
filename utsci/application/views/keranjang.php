<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
        </tr>

        <?php 
        $no=1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $items['name'] ?></td>
                <td><?= $items['qty'] ?></td>
                <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.')?></td>
                <td align="right">Rp. <?= number_format($items['subtotal'] , 0, ',', '.') ?></td>
            </tr>
        <?php endforeach ?>
            <tr>
            <td align="center" colspan="4"><strong>Total<strong></td>
                <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.')?></td>
            </tr>
    </table>

    <div align="right">
        <a href="<?= base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
        <a href="<?= base_url('base') ?>"><div class="btn btn-sm btn-primary">Lanjut Belanja</div></a>
        <a href="<?= base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success">Pembayaran</div></a>
    </div>
</div>