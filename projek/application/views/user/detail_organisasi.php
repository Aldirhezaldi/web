<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Organisasi
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $organisasi['nama_org']; ?></h5>
                    <p class="card-text">
                        <label for=""><b>Nama : </b></label>
                        <?= $organisasi['nama_pejabat_org']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Email : </b></label>
                        <?= $organisasi['email_org']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Level : </b></label>
                        <?= $organisasi['level']; ?>
                    </p>
                    <a href="<?= base_url(); ?>user_org" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>