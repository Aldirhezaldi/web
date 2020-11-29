        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        </div>
        <div class="container px-lg-5">

            <div class="row mt-4">
                <div class="col-md-6">
                    <a class="btn btn-primary" href="<?= base_url(); ?>user_org/tambah">Tambah Data</a>
                    <a class="btn btn-primary" href="<?= base_url(); ?>adm_users_org/laporan_pdf">Cetak Laporan</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <h2>Daftar Organisasi</h2>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Organisasi</th>
                        <th scope="col">Nama Ketua Umum</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($organisasi as $org) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $org->nama_org ?></td>
                            <td><?= $org->nama_pejabat_org ?></td>
                            <td><?= $org->email_org ?></td>
                            <td> <a href="<?= base_url(); ?>user_org/detail/<?= $org->id_organisasi ?>" class="fas fa-info-circle">Detail</a>
                                <a href="<?= base_url(); ?>user_org/edit/<?= $org->id_organisasi; ?>" class="fas fa-edit">Edit</a>
                                <a href="<?= base_url(); ?>user_org/delete/<?= $org->id_organisasi; ?>" class="fas fa-trash" onclick="return confirm('Yakin Hapus Data ini ?');">Delete</a> </td>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
        <!-- End of Main Content -->