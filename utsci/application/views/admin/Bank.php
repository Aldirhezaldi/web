<div class="container-fluid">
    <div class="alert alert-info" role="alert">
        <i class="fas fa-fw fa-database"></i> Data Bank
    </div>

    <button class="btn btn-primary mt-3 mb-3" data-toggle="modal" data-target="#tambahBarang"><i class="fas fa-plus fa-sm" aria-hidden="true"></i> Tambah
        Bank</button>

    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bank</th>
                <th>Nomer Rekening</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($bank as $b) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $b->nama_bank ?></td>
                    <td><?= $b->nomer_rekening ?></td>
                    <!-- <td>
                        <?= anchor('admin/DataProduk/detail/' . $p->id_produk, '<button class="btn btn-success mr-2"><i class="fas fa-search-plus" aria-hidden="true"></i></button>') ?>
                        <?= anchor('admin/DataProduk/edit/' . $p->id_produk, '<button class="btn btn-primary mr-2"><i class="fas fa-edit" aria-hidden="true"></i></button>') ?>
                        <?= anchor('admin/DataProduk/hapus/' . $p->id_produk, '<button class="btn btn-danger mr-2"><i class="fas fa-trash" aria-hidden="true"></i></button>') ?>
                    </td> -->
                </tr>
            <?php endforeach ?>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Bank</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() . 'admin/Bank/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="Nama_bank">Nama Bank</label>
                            <input type="text" class="form-control" id="nama_bank" name="nama_bank" required>
                        </div>

                        <div class="form-group">
                            <label for="Nomer_rekening">Nomer Rekening</label>
                            <input type="text" class="form-control" id="nomer_rekening" name="nomer_rekening" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br>