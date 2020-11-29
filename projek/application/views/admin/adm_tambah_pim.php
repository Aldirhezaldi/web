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
            <label for="nama_pimpinan">Nama</label>
            <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan">
        </div>
        <div class="form-group">
            <label for="nip_pimpinan">NIP</label>
            <input type="text" class="form-control" id="nip_pimpinan" name="nip_pimpinan">
        </div>
        <div class="form-group">
            <label for="jabatan_pimpinan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan_pimpinan" name="jabatan_pimpinan">
        </div>
        <div class="form-group">
            <label for="email_pimpinan">email</label>
            <input type="text" class="form-control" id="email_pimpinan" name="email_pimpinan">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
    </form>
</div>