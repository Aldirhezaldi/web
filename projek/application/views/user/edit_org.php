<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form action="<?= base_url('user_org/edit_org'); ?>" method="post">
        <!-- <div class="form-group">
            <label for="nama">ID User</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="" readonly>
</div> -->


        <div class="form-group">
            <label for="no_induk_pejabat">No Induk</label>
            <input type="text" name="no_induk_pejabat" value="<?= $organisasi['no_induk_pejabat']; ?>">
        </div>
        <div class="form-group">
            <label for="nama_org">Nama Organisasi</label>
            <input type="text" class="form-control" id="nama_org" name="nama_org" value="<?= $organisasi['nama_org']; ?>">
        </div>
        <div class="form-group">
            <label for="jabatan_org">Jabatan</label>
            <input type="text" class="form-control" id="jabatan_org" name="jabatan_org" value="<?= $organisasi['jabatan_org']; ?>">
        </div>
        <div class="form-group">
            <label for="nama_pejabat_org">Nama Jabatan</label>
            <input type="text" class="form-control" id="nama_pejabat_org" name="nama_pejabat_org" value="<?= $organisasi['nama_pejabat_org']; ?>">
        </div>
        <div class="form-group">
            <label for="email_org">email</label>
            <input type="text" class="form-control" id="email_org" name="email_org" value="<?= $organisasi['email_org']; ?>">
        </div>
        <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
    </form>
</div>