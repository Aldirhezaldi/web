        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        </div>
        <div class="container px-lg-5">
  <div class="row mx-lg-n5">
    <div class="col py-3 px-lg-5 border bg-light">
            <div class="card">
            <div class="card-header">
            <?= $user['name']; ?>
</div>
<div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori" name="kategori">
                <?php foreach($kategori as $key):?>
                    <option value="<?php echo $key ?>" selected><?php echo $key ?></option>
                <?php endforeach ?>
        </select>
</div>
    <form action="" method="post">
        <div class="form-group">
            <label for="nama">No Surat Peminjaman</label>
            <input type="text" class="form-control" id="nama" name="nama">
</div>
<div class="form-group">
            <label for="nim">Tanggal Membuat Surat</label>
            <input type="number" class="form-control" id="nim" name="nim">
</div>
<div class="form-group">
            <label for="email">Laporan</label>
            <input type="email" class="form-control" id="email" name="email">
</div>
</div>
<h3>Tembusan</h3>
<hr>
<h4>1. Koor Pamdal</h4>
<h4>2. Ka UPT PP</h4>
<h4>3. Ketua Jurusan</h4>
    </div>
    <div class="col py-3 px-lg-5 border bg-light">
    <div class="card">
            <div class="card-header">
                Peminjaman
</div>
<div class="form-group">
            <label for="kepada">Kepada</label>
            <select class="form-control" id="kepada" name="kepada" name="kepada">
                <?php foreach($kepada as $key):?>
                    <option value="<?php echo $key ?>" selected><?php echo $key ?></option>
                <?php endforeach ?>
        </select>
</div>
    <form action="" method="post">
        <div class="form-group">
            <label for="kegiatan_pjm">Nama Kegiatan</label>
            <input type="text" class="form-control" id="kegiatan_pjm" name="kegiatan_pjm">
</div>
<div class="form-group">
            <label for="tema_pjm">Tema Peminjaman</label>
            <input type="text" class="form-control" id="tema_pjm" name="tema_pjm">
</div>
<div class="form-group">
            <label for="kpd_pjm">Nama Peminjaman</label>
            <input type="text" class="form-control" id="kpd_pjm" name="kpd_pjm">
</div>
<div class="form-group">
            <label for="hari_pjm">Hari Pinjam</label>
            <input type="text" class="form-control" id="hari_pjm" name="hari_pjm">
</div>
<div class="form-group">
            <label for="tgl_pjm">Tanggal Pinjam</label>
            <input type="text" class="form-control" id="tgl_pjm" name="tgl_pjm">
</div>
<div class="form-group">
            <label for="pkl_pjm">Pukul Pinjam</label>
            <input type="text" class="form-control" id="pkl_pjm" name="pkl_pjm">
</div>
<div class="form-group">
            <label for="kapel_pjm">Ketua Pelaksana</label>
            <input type="text" class="form-control" id="kapel_pjm" name="kapel_pjm">
</div>
<div class="form-group">
            <label for="kapel_pjm">Ketua Pelaksana</label>
            <input type="text" class="form-control" id="kapel_pjm" name="kapel_pjm">
</div>
<div class="form-group">
            <label for="nim_pjm">NIM Ketua Pelaksana</label>
            <input type="text" class="form-control" id="nim_pjm" name="nim_pjm">
</div>
</div>
    </div>
  </div>
  <button type="button" class="btn btn-primary">Save Data</button>
  <button type="button" class="btn btn-primary">Back</button>

</div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->