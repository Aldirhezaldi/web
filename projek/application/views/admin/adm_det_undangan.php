        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        </div>

        <div class="container px-lg-5">

            <div class="row mt-4">
                <div class="col-md-6">
                    <a class="btn btn-primary" href="adm_surat_undangan/tambah">Tambah Data</a>
                    <a class="btn btn-primary" href="<?= base_url(); ?>adm_det_undangan/laporan_pdf">Cetak Laporan</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <h2>Data Surat Undangan</h2>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Surat</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Acara</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($surat_undangan as $su) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $su->no_surat_und ?></td>
                            <td><?= $su->tgl_buat_srt_und ?></td>
                            <td><?= $su->tema_und ?></td>
                            <td><?= $su->tanggal_und ?></td>
                            <td> <a href="<?= base_url(); ?>adm_det_undangan/detail/<?= $su->id_undang ?>" class="fas fa-info-circle">Detail</a>
                                <a href="" class="fas fa-edit">Edit</a>
                                <a href="<?= base_url(); ?>adm_det_undangan/surat_pdf/<?= $su->id_undang ?>" class="fas fa-print">Cetak</a>
                                <a href="<?= base_url(); ?>adm_det_undangan/delete/<?= $su->id_undang ?>" class="fas fa-trash" onclick="return confirm('Yakin Hapus Data ini ?');">Delete</a> </>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
        <!-- End of Main Content -->