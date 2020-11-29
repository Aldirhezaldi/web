<!-- main -->
<div class="main-content" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <!-- nav -->
            <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                <div id="logo">
                    <h1><a href="<?= base_url(); ?>home_user">BIMBEl IT USER <br> Hello!</a></h1>
                </div>
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu mt-lg-3 ml-auto">
                    <li class=""><a href="<?= base_url(); ?>home_user">Home </a></li>
                    <li class=""><a href="<?= base_url(); ?>user_profile">Profile </a></li>
                    <li class="active"><a href="<?= base_url(); ?>home_user/pendaftaran">Pendafaran </a></li>
                    <li><a href="<?= base_url(); ?>home_user/about">Contact Us</a></li>
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

<div class="row mt-3">
    <div class="col-md-6">
        <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
        <div class="card">
            <div class="card-header">
                Form Tambah Data Pasien
            </div>
            <div class="card-body">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                <?php endif ?>

                <form action="" method="post">
                    <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="username">Nama Murid</label>
                            <select class="form-control" name="id_user" id="id_user">
                                <option selected="selected">Pilih Nama</option>
                                <?php foreach ($user as $u) : ?>
                                    <option value="<?= $u['id_user'] ?>"><?= $u['username'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nim_murid">NIM</label>
                            <input type="text" class="form-control" id="nim_murid" name="nim_murid">
                        </div>

                        <div class="form-group">
                            <label for="nama_guru">Nama Guru</label>
                            <select class="form-control" name="id_guru" id="id_guru">
                                <option selected="selected">Pilih Guru</option>
                                <?php foreach ($guru as $g) : ?>
                                    <option value="<?= $g['id_guru'] ?>"><?= $g['nama_guru'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama_mapel">Mata Pelajaran</label>
                            <select class="form-control" name="id_mapel" id="id_mapel">
                                <option selected="selected">Pilih Mapel</option>
                                <?php foreach ($mapel as $m) : ?>
                                    <option value="<?= $m['id_mapel'] ?>"><?= $m['nama_mapel'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
            </div>
        </div>
        &nbsp;
    </div>
</div>