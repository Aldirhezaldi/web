<!-- main -->
<div class="main-content" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <!-- nav -->
            <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                <div id="logo">
                    <h1><a href="<?= base_url(); ?>home">BIMBEl IT <br> Hello!</a></h1>
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

<section class="banner-bottom py-5" id="exp">
    <div class="container py-md-4">
        <h3 class="tittle-w3layouts two text-center">Detail Data Guru</h3>
        <div class="row mid-grids mt-5">
            <div class="col-md-5 content-w3pvt-img">
                <img src="<?= base_url() . '/assets/images/' . $guru->images ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                <a>Nama Guru : <?= $guru->nama_guru ?></a>
                <br><br>
                <a>NIP Guru : <?= $guru->nip_guru ?></a>
                <br><br>
                <br><br><br><br>
                <a href="<?= base_url(); ?>home/data_guru" class="btn btn-primary">Kembali</a>
            </div>

        </div>
    </div>
</section>