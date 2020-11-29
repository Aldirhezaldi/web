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
                        <li class="active"><a href="<?= base_url(); ?>home">Home </a></li>
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
                        <li><a href="<?= base_url(); ?>home/about">Contact Us</a></li>
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
    <div class="entry-w3pvt-main py-5">
        <div class="container px-lg-5 py-md-3">
            <div class="entry-w3layouts-info">
                <h4>Best Online Learning Center</h4>
                <p>Disini kami akan membuat anda nyaman dan akan membuat anda cepat mahir atau profesional dalam bidang yang anda pelajari
            </div>
        </div>
    </div>
    <!-- //entry -->
    <!-- banner-bottom -->
    <section class="banner-bottom py-5" id="about">
        <div class="container py-md-4">
            <div class="row banner-grids">
                <div class="col-lg-6 content-right-bottom text-left">
                    <img src="<?= base_url('assets/'); ?>images/ab.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 content-left-bottom entry-w3layouts-info text-left pl-lg-4">
                    <h5 class="mt-1">Online Education Learn skills online.</h5>
                    <h4>Limitless learning, more possibilities</h4>

                </div>

            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!-- /team-content -->
    <section class="team-content py-5" id="team">
        <div class="container py-md-4 text-center">
            <h3 class="tittle-w3layouts two">Experienced Professors</h3>
            <a href="<?= base_url(); ?>home/tambah_guru" class="btn btn-primary btn-lg">Tambah</a></td>
            <div class="row team-grids text-center mt-md-5 mt-4">
                <?php foreach ($guru as $gr) : ?>
                    <div class="col-lg-4 team-main">

                        <div class="team-img"><img src="<?= base_url() . '/assets/images/' . $gr['images'] ?>" alt="news image" class="img-fluid"> </div>
                        <div class="team-info">

                            <h4><?= $gr['nama_guru'] ?></h4>
                            <small><?= $gr['nama_mapel'] ?></small>
                            <h4><?= $gr['nip_guru'] ?></h4>
                            <p><?= $gr['alamat'] ?></p>
                            <p><?= $gr['deskripsi'] ?></p>
                        </div>


                    </div>
                <?php endforeach; ?>

                <!-------->

            </div>

        </div>
    </section>
    </section>
    <!-- //team-content -->
    <!-- banner-bottom -->
    <section class="banner-bottom py-5" id="exp">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">Live the experience</h3>
            <div class="row mid-grids mt-5">
                <div class="col-md-5 content-w3pvt-img">
                    <img src="<?= base_url('assets/'); ?>images/n1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                    <h5 class="mt-1">You Can Learn Anything</h5>
                    <h4>Learn at your own pace</h4>

                </div>

            </div>
            <div class="row mid-grids my-lg-5 py-lg-5">

                <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                    <h5 class="mt-1">You Can Learn Anything</h5>
                    <h4>Community of opportunities</h4>

                </div>
                <div class="col-md-5 content-w3pvt-img">
                    <img src="<?= base_url('assets/'); ?>images/n2.jpg" alt="" class="img-fluid">
                </div>

            </div>
            <div class="row mid-grids">
                <div class="col-md-5 content-w3pvt-img">
                    <img src="<?= base_url('assets/'); ?>images/n3.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                    <h5 class="mt-1">You Can Learn Anything</h5>
                    <h4>Official certificate</h4>

                </div>

            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/last-content-->
    <!--//last-content-->
    <section class="ab-info-main py-5" id="course">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">Available Courses</h3>
            <a href="<?= base_url(); ?>home/tambah_mapel" class="btn btn-primary btn-lg">Tambah</a></td>
            <div id="products" class="row view-group my-lg-5 my-4">
                <!------------------------------------>
                <?php foreach ($mapel as $mpl) : ?>
                    <div class="item col-lg-4 mt-3">
                        <div class="thumbnail card">
                            <div class="img-event">
                                <img class="group list-group-image img-fluid" src="<?= base_url() . '/assets/images/' . $mpl['image'] ?>" alt="">
                            </div>
                            <div class="caption card-body">
                                <h4 class="group card-title inner list-group-item-heading"><?= $mpl['nama_mapel'] ?></h4>
                                <p class="group inner list-group-item-text">
                                    <?= $mpl['deskripsi'] ?></p><br>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!------------------------------------>
            </div>
        </div>
    </section>
    <!--//-->
    <!--/testimonials-->
    <section class="testimonials py-5" id="test">
        <div class="container py-3">
            <h3 class="tittle-w3layouts text-center mt-3">See what people are saying</h3>
            <div class="testimonials_grid mx-auto text-center row px-lg-5 mt-5">

                <div class="col-md-3 testi_grid text-md-center">
                    <img src="<?= base_url('assets/'); ?>images/profile.jpg" alt=" " class="img-fluid">
                </div>
                <div class="col-md-9 testi_grid text-left">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <p class="sub-test pr-lg-5">Remember, One Thousand Problems, Million Solutions
                        <h5>AldiRhezaldi</h5>
                </div>
            </div>
        </div>
    </section>