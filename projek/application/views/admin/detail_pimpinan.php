<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Pimpinan Polinema
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pimpinan_polinema['nama_pimpinan']; ?></h5>
                    <p class="card-text">
                        <label for=""><b>NIP Pimpinan : </b></label>
                        <?= $pimpinan_polinema['nip_pimpinan']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Jabatan : </b></label>
                        <?= $pimpinan_polinema['jabatan_pimpinan']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Email : </b></label>
                        <?= $pimpinan_polinema['email_pimpinan']; ?>
                    </p>
                    <a href="<?= base_url(); ?>adm_users_pim" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>