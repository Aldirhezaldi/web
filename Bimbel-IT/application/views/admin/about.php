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
                        <li><a href="#exp">Experience</a></li>
                        <li><a href="#team">Professors</a></li>
                        <li><a href="#course">Courses</a></li>
                        <li><a href="#test">Reviews</a></li>
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
                        <li class="active"><a href="<?= base_url(); ?>home/about">Contact Us</a></li>
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
    <section class="banner-bottom py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">About Us</h3><br>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="img-fluid" src="<?= base_url('assets/'); ?>images/profile.jpg" alt="">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="card-title">Rhezaldi Irnantyo Irawan</h5>
                            <p class="card-text">Disini saya membuat Sistem Informasi Pendaftaran Bimbel IT.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>