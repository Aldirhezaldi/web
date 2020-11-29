        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        </div>
        <div class="container px-lg-5">

            <div class="row mt-4">
                <div class="col-md-6">
                    <a class="btn btn-primary" href="<?= base_url(); ?>home_pim/laporan_pdf">Cetak Laporan</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <h2>Daftar Pimpinan Polinema</h2>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pimpinan_polinema as $pimpol) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $pimpol->nama_pimpinan ?></td>
                            <td><?= $pimpol->jabatan_pimpinan ?></td>
                            <td><?= $pimpol->email_pimpinan ?></td>
                            <!-- <td> <a href="<?= base_url(); ?>adm_users_pim/detail/<?= $pimpol->id_pimpinan ?>" class="fas fa-info-circle">Detail</a>
                                <a href="<?= base_url(); ?>adm_edit_pim/edit/<?= $pimpol->id_pimpinan ?>" class="fas fa-edit">Edit</a>
                                <a href="<?= base_url(); ?>adm_del_pim/delete/<?= $pimpol->id_pimpinan; ?>" class="fas fa-trash" onclick="return confirm('Yakin Hapus Data ini ?');">Delete</a> </<a> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
        <!-- End of Main Content -->