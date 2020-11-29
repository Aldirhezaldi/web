<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-info">No. Invoice : <?= $invoice->id_invoice ?></div></h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Subtotal</th>
        </tr>

        <?php 
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah_pesanan * $psn->harga;
            $total += $subtotal;
        ?>
        <tr>
            <td><?= $psn->id_produk ?></td>
            <td><?= $psn->nama_produk ?></td>
            <td><?= $psn->jumlah_pesanan ?></td>
            <td><?= number_format($psn->harga, 0,',','.') ?></td>
            <td><?= number_format($subtotal, 0,',','.') ?></td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right">Total</td>
            <td align="right">Rp. <?= number_format($total,0,',','.') ?></td>
        </tr>
    </table>
    <?= anchor('admin/invoice/selesai/'.$invoice->id_invoice, '<div class="btn btn-sm btn-success">Selesai di Proses</div>') ?>
    <a href="<?= base_url() ?>admin/Invoice"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>