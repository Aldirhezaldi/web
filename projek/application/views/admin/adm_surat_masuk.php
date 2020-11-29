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
    <form action="" method="post">
        <div class="form-group">
            <label for="nomor_surat_sm">Nomor Surat</label>
            <input type="text" class="form-control" id="nomor_surat_sm" name="nomor_surat_sm">
</div>
<div class="form-group">
            <label for="tgl_surat_sm">Tanggal Surat</label>
            <input type="text" class="form-control" id="tgl_surat_sm" name="tgl_surat_sm">
</div>
<div class="form-group">
            <label for="tgl_masuk">Tanggal Surat Masuk</label>
            <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk">
</div>
<div class="col py-3 px-lg-5 border bg-light">
<div class="form-group">
            <label for="perihal_sm">Perihal Surat</label>
            <select class="form-control" id="perihal_sm" name="perihal_sm" name="perihal_sm">
                <?php foreach($perihal_sm as $key):?>
                    <option value="<?php echo $key ?>" selected><?php echo $key ?></option>
                <?php endforeach ?>
        </select>
</div>
<div class="form-group">
            <label for="dari">Dari</label>
            <select class="form-control" id="dari" name="dari" name="dari">
                <?php foreach($dari as $key):?>
                    <option value="<?php echo $key ?>" selected><?php echo $key ?></option>
                <?php endforeach ?>
        </select>
</div>
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