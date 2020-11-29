<div class="container-fluid">
    <div class="alert alert-info" role="alert">
		<i class="fas fa-file-invoice"></i> Invoice Pemesanan Produk
	</div>

	<table id="example" class="table table-striped table-bordered text-center" style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>ID Invoice</th>
				<th>ID MLBB Pemesan</th>
                <th>Tanggal Pemesanan</th>
				<th>Batas Pembayaran</th>
                <th>Email Pemesan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
            $no = 1;
            foreach ($invoice as $inv) : ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $inv->id_invoice?></td>
				<td><?= $inv->id_mlbb?></td>
				<td><?= $inv->tanggal_pemesanan?></td>
				<td><?= $inv->batas_bayar?></td>
				<td><?= $inv->email?></td>
				<td>
					<?= anchor('admin/invoice/detail/'.$inv->id_invoice, '<button type="button" class="btn btn-sm btn-primary">Detail</button>') ?>	
				</td>
			</tr>
			<?php endforeach ?>
	</table>
</div>