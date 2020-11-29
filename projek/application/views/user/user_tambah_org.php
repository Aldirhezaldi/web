<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="<?= base_url('user_org/insert'); ?>" method="post">
        <!-- <div class="form-group">
            <label for="nama">ID User</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="" readonly>
</div> -->

        <div class="form-group">
            <label for="nama_org">Nama Organisasi</label>
            <input type="text" class="form-control" id="nama_org" name="nama_org">
        </div>
        <div class="form-group">
            <label for="nama_pejabat_org">Nama Ketua</label>
            <input type="text" class="form-control" id="nama_pejabat_org" name="nama_pejabat_org">
        </div>
        <div class="form-group">
            <label for="no_induk_pejabat">NIM Ketua</label>
            <input type="text" class="form-control" id="no_induk_pejabat" name="no_induk_pejabat">
        </div>
        <div class="form-group">
            <label for="jabatan_org">Jabatan Pimpinan</label>
            <input type="text" class="form-control" id="jabatan_org" name="jabatan_org">
        </div>
        <div class="form-group">
            <label for="email_org">Email Organisasi</label>
            <input type="text" class="form-control" id="email_org" name="email_org">
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <input type="text" class="form-control" id="level" name="level">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
    </form>
</div>