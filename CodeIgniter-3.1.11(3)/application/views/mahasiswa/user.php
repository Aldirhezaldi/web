<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px"> Data Mahasiswa , <?= $this->session->userdata('level'); ?></h1>
</div>
    <table class="table table-striped table-bordered" id="list_mhs">
    <thead>
        <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        </tr>
    </thead>
    <tbody id="show_data">
    <!-- <?php
        $no=1;
        foreach($mahasiswa as $mhs){?>
            <tr>
                <td> <?= $no++; ?></td>
                <td> <?= $mhs->nama; ?></td>
                <td> <?= $mhs->email; ?></td>
                <td> <?= $mhs->jurusan; ?></td>
            </tr>
        <?php } ?> -->
        
    </tbody>
    </table>
</div>