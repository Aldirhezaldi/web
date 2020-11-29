<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                    $grand_total = 0;
                    if ($keranjang = $this->cart->contents()) {
                        foreach ($keranjang as $item) {
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                        echo "<h4>Total Belanja : Rp. ".number_format($grand_total,0,',','.');
                    
                ?>
            </div><br><br>

            <h3>Input ID Game dan Pemabayaran</h3>
            
            <form action="<?= base_url() ?>dashboard/proses_pesanan" method="post">
                <div class="form-group">
                    <label for="Id_mlbb">Masukkan User ID MLBB</label>
                    <input type="text" name="id_mlbb" id="id_mlbb" class="form-control" placeholder="Contoh : 12345678(1234)" required>
                </div>

                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Contoh : nafis@gmail.com" required>
                </div>

                <div class="form-group">
					<label for="Bank">Pembayaran</label>
					<select class="form-control" id="bank" name="bank" required>
						<option selected>Pilih Bank</option>
						<?php foreach($bank as $key):?>
						<option value="<?= $key->id_bank?>"><?= $key->nama_bank ?> - <?= $key->nomer_rekening ?></option>
						<?php endforeach ?>
					</select>
				</div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>
            
            <?php 
                    }else {
                        echo "<h5>Keranjang Belanja Anda Masih Kosong";
                    }
            ?>
        </div>

        <div class="col-md-2">
        </div>
    </div>
</div>