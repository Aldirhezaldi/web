<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Surat Undangan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $surat_undangan['perihal_und']; ?></h5>
                    <p class="card-text">
                        <label for=""><b>No Surat Undangan : </b></label>
                        <?= $surat_undangan['no_surat_und']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Tanggal Buat Surat Undangan : </b></label>
                        <?= $surat_undangan['tgl_buat_srt_und']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Lampiran : </b></label>
                        <?= $surat_undangan['lampiran_und']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Kepada : </b></label>
                        <?= $surat_undangan['kepada_und']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Kegiatan : </b></label>
                        <?= $surat_undangan['kegiatan_und']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Tema : </b></label>
                        <?= $surat_undangan['tema_und']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Hari Undangan : </b></label>
                        <?= $surat_undangan['hari_und']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Tanggal Undangan : </b></label>
                        <?= $surat_undangan['tanggal_und']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Tempat Undangan : </b></label>
                        <?= $surat_undangan['tempat_und']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Ketua Pelaksana : </b></label>
                        <?= $surat_undangan['kapel_und']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>NIM Undangan : </b></label>
                        <?= $surat_undangan['nim_und']; ?>
                    </p>
                    <a href="<?= base_url(); ?>adm_det_undangan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>