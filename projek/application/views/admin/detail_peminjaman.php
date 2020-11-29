<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Surat Peminjaman
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $surat_peminjaman['perihal_pjm']; ?></h5>
                    <p class="card-text">
                        <label for=""><b>No Surat Pinjam : </b></label>
                        <?= $surat_peminjaman['no_surat_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Tanggal Buat Surat : </b></label>
                        <?= $surat_peminjaman['tgl_buat_srt_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Lampiran : </b></label>
                        <?= $surat_peminjaman['lampiran_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Kepada : </b></label>
                        <?= $surat_peminjaman['kepada_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Kegiatan : </b></label>
                        <?= $surat_peminjaman['kegiatan_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Tema : </b></label>
                        <?= $surat_peminjaman['tema_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Pinjam : </b></label>
                        <?= $surat_peminjaman['pinjam']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Hari Pinjam : </b></label>
                        <?= $surat_peminjaman['hari_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Tanggal Pinjam : </b></label>
                        <?= $surat_peminjaman['tgl_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Pukul Pinjam : </b></label>
                        <?= $surat_peminjaman['pukul_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Ketua Pelaksana : </b></label>
                        <?= $surat_peminjaman['kapel_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>NIM Peminjam : </b></label>
                        <?= $surat_peminjaman['nim_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>NIP Ketua Jurusan : </b></label>
                        <?= $surat_peminjaman['nip_kajur_pjm']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Tembusan : </b></label>
                        <?= $surat_peminjaman['tembusan_pjm']; ?>
                    </p>
                    <a href="<?= base_url(); ?>adm_detail_pjm" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>