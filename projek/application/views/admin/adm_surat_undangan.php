        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


          <div class="container px-lg-5">
            <div class="row mx-lg-n5">
              <div class="col py-3 px-lg-5 border bg-light">
                <div class="card">

                  <form action="" method="post">
                    <div class="form-group">
                      <label for="no_surat_und">No Surat Undangan</label>
                      <input type="text" class="form-control" id="no_surat_und" name="no_surat_und">
                    </div>
                    <div class="form-group">
                      <label for="tgl_buat_srt_und">Tanggal Membuat Surat</label>
                      <input type="text" class="form-control" id="tgl_buat_srt_und" name="tgl_buat_srt_und">
                    </div>
                    <div class="form-group">
                      <label for="lampiran_und">Lampiran Undangan</label>
                      <input type="text" class="form-control" id="lampiran_und" name="lampiran_und">
                    </div>
                </div>
                <div class="col py-3 px-lg-5 border bg-light">
                  <div class="card">
                    <div class="card-header">
                      Undangan
                    </div>
                    <div class="form-group">
                      <label for="kepada_und">Kepada</label>
                      <input type="text" class="form-control" id="kepada_und" name="kepada_und" name="kepada_und">
                      </input>
                    </div>
                    <form action="" method="post">
                      <div class="form-group">
                        <label for="kegiatan_und">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="kegiatan_und" name="kegiatan_und">
                      </div>
                      <div class="form-group">
                        <label for="tema_und">Tema Kegiatan</label>
                        <input type="text" class="form-control" id="tema_und" name="tema_und">
                      </div>
                      <div class="form-group">
                        <label for="hari_und">Hari Undangan</label>
                        <input type="text" class="form-control" id="hari_und" name="hari_und">
                      </div>
                      <div class="form-group">
                        <label for="pukul_und">Pukul Undangan</label>
                        <input type="text" class="form-control" id="pukul_und" name="pukul_und">
                      </div>
                      <div class="form-group">
                        <label for="tanggal_und">Tanggal Undangan</label>
                        <input type="text" class="form-control" id="tanggal_und" name="tanggal_und">
                      </div>
                      <div class="form-group">
                        <label for="tempat_und">Tempat Undangan</label>
                        <input type="text" class="form-control" id="tempat_und" name="tempat_und">
                      </div>
                      <div class="form-group">
                        <label for="kapel_und">Ketua Pelaksana</label>
                        <input type="text" class="form-control" id="kapel_und" name="kapel_und">
                      </div>
                      <div class="form-group">
                        <label for="nim_und">NIM Ketua Pelaksana</label>
                        <input type="text" class="form-control" id="nim_und" name="nim_und">
                      </div>


                  </div>
                </div>
              </div>


            </div>
            <button type="button" class="btn btn-primary">Save Data</button>
            <a class="btn btn-primary" href="<?= base_url(); ?>adm_det_undangan">Back</a>
            <!-- /.container-fluid -->

          </div>
        </div>
        <!-- End of Main Content -->