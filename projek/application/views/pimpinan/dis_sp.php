        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        </div>
        <div class="container px-lg-5">

            <div class="row mt-4">
                <div class="col-md-6">
                    <a class="btn btn-primary" href="<?= base_url(); ?>adm_detail_pjm/laporan_pdf">Cetak Laporan</a>
                </div>
            </div>



            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Surat</th>
                        <th scope="col">Tanggal Surat</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Peminjaman</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($surat_peminjaman as $pjm) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $pjm->no_surat_pjm ?></td>
                            <td><?= $pjm->tgl_buat_srt_pjm ?></td>
                            <td><?= $pjm->perihal_pjm ?></td>
                            <td><?= $pjm->pinjam ?></td>
                            <td>
                                <a href="<?= base_url(); ?>home_pim/disposisi_sp/<?= $pjm->id_pinjam ?>" class="fas fa-print">Cetak Disposisi</a>
                                <a href="<?= base_url(); ?>adm_detail_pjm/delete/<?= $pjm->id_pinjam; ?>" class="fas fa-trash" onclick="return confirm('Yakin Hapus Data ini ?');">Delete</a> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
        <!-- End of Main Content -->