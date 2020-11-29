<!-- main -->
<div class="main-content" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <!-- nav -->
            <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                <div id="logo">
                    <h1><a href="<?= base_url(); ?>home">BIMBEl IT <br> Hello, <?= $user['username']; ?>!</a></h1>
                </div>
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu mt-lg-3 ml-auto">
                    <li class=""><a href="<?= base_url(); ?>home">Home </a></li>
                    <li class=""><a href="<?= base_url(); ?>admin_profile">Profile </a></li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a class="active" href="#">Data <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href="<?= base_url(); ?>home/data_guru" class="drop-text">Data Guru</a></li>
                            <li><a href="<?= base_url(); ?>home/data_mapel" class="drop-text">Data Mapel</a></li>
                            <li><a href="<?= base_url(); ?>home/data_murid" class="drop-text">Data Murid</a></li>

                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="<?= base_url(); ?>login/logout">Logout</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
    <div class="banner-content-w3pvt">
        <div class="banner-w3layouts-info text-center">
            <h3>Any successful career starts with a good Education</h3>
        </div>
    </div>

    <!-- //banner -->
</div>

<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px"> Data Murid</h1>
    </div>
    <table class="table table-striped table-bordered" id="list_mhs">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nama Guru</th>
                <th>Nama Mapel</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody id="show_data">
            <?php
            $no = 1;
            foreach ($murid as $mrd) { ?>
                <tr>
                    <td> <?= $no++; ?></td>
                    <td> <?= $mrd['username']; ?></td>
                    <td> <?= $mrd['nim_murid']; ?></td>
                    <td> <?= $mrd['nama_guru']; ?></td>
                    <td> <?= $mrd['nama_mapel']; ?></td>
                    <td> <a href="<?= base_url(); ?>home/hapusmurid/<?= $mrd['id_murid']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a>
                        <a href="<?= base_url(); ?>home/edit_murid/<?= $mrd['id_murid']; ?>" class="badge badge-success">Edit</a>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>