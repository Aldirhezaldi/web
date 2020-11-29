<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="" method="post">
        <!-- <div class="form-group">
            <label for="nama">ID User</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="" readonly>
</div> -->


        <div class="form-group">
            <label for="id_undang">ID</label>
            <input type="hidden" name="id_undang" value="<?= $surat_undangan['id_undang']; ?>">
        </div>
        <div class="form-group">
            <label for="no_surat_und">No Surat Undangan</label>
            <input type="text" class="form-control" id="no_surat_und" name="no_surat_und" value="<?= $surat_undangan['no_surat_und']; ?>">
        </div>
        <div class="form-group">
            <label for="tgl_buat_srt_und">Tanggal Buat</label>
            <input type="text" class="form-control" id="tgl_buat_srt_und" name="tgl_buat_srt_und" value="<?= $surat_undangan['tgl_buat_srt_und']; ?>">
        </div>
        <div class="form-group">
            <label for="lampiran_und">Lampiran Undangan</label>
            <input type="text" class="form-control" id="lampiran_und" name="lampiran_und" value="<?= $surat_undangan['lampiran_und']; ?>">
        </div>
        <div class="form-group">
            <label for="perihal_und">Perihal Undangan</label>
            <input type="text" class="form-control" id="perihal_und" name="perihal_und" value="<?= $surat_undangan['perihal_und']; ?>">
        </div>
        <div class="form-group">
            <label for="kepada_und">Kepada Undangan</label>
            <input type="text" class="form-control" id="kepada_und" name="kepada_und" value="<?= $surat_undangan['kepada_und']; ?>">
        </div>
        <div class="form-group">
            <label for="kegiatan_und">Kegiatan Undangan</label>
            <input type="text" class="form-control" id="kegiatan_und" name="kegiatan_und" value="<?= $surat_undangan['kegiatan_und']; ?>">
        </div>
        <div class="form-group">
            <label for="tema_und">Tema Undangan</label>
            <input type="text" class="form-control" id="tema_und" name="tema_und" value="<?= $surat_undangan['tema_und']; ?>">
        </div>
        <div class="form-group">
            <label for="hari_und">Hari Undangan</label>
            <input type="text" class="form-control" id="hari_und" name="hari_und" value="<?= $surat_undangan['hari_und']; ?>">
        </div>
        <div class="form-group">
            <label for="pukul_und">Pukul Undangan</label>
            <input type="text" class="form-control" id="pukul_und" name="pukul_und" value="<?= $surat_undangan['pukul_und']; ?>">
        </div>
        <div class="form-group">
            <label for="tanggal_und">Tanggal Undangan</label>
            <input type="text" class="form-control" id="tanggal_und" name="tanggal_und" value="<?= $surat_undangan['tanggal_und']; ?>">
        </div>
        <div class="form-group">
            <label for="tempat_und">Tempat Undangan</label>
            <input type="text" class="form-control" id="tempat_und" name="tempat_und" value="<?= $surat_undangan['tempat_und']; ?>">
        </div>
        <div class="form-group">
            <label for="kapel_und">Kapel Undangan</label>
            <input type="text" class="form-control" id="kapel_und" name="kapel_und" value="<?= $surat_undangan['kapel_und']; ?>">
        </div>
        <div class="form-group">
            <label for="nim_und">NIM Undangan</label>
            <input type="text" class="form-control" id="nim_und" name="nim_und" value="<?= $surat_undangan['nim_und']; ?>">
        </div>
        <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
    </form>
</div>