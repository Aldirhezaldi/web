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
                        <li class="active"><a href="">Profile </a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">Data <span class="fa fa-angle-down" aria-hidden="true"></span></a>
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
    <!-- //main -->
    <!-- /entry -->
    <!-- //entry -->
    <!-- banner-bottom -->
    <!-- //banner-bottom -->
    <!-- /team-content -->

    <!-- //team-content -->
    <!-- banner-bottom -->
    <section class="banner-bottom py-5" id="exp">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">Your Profile</h3>
            <div class="row mid-grids mt-5">
                <div class="col-md-5 content-w3pvt-img">
                    <img src="<?= base_url('assets/'); ?>images/default.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                    <h3>Nama : <?= $user['username']; ?></h3>
                    <br>
                    <h3>Jenis Kelamin : <?= $user['jenis_kelamin']; ?></h3>
                    <br>
                    <h3>email : <?= $user['email']; ?></h3>
                    <br>
                    <h3>Telepon : <?= $user['telepon']; ?></h3>
                    <br>
                    <h3>Alamat : <?= $user['alamat']; ?></h3>
                </div>

            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/last-content-->
    <!--//last-content-->
    <!--//-->
    <!--/testimonials-->
    <!--//testimonials-->