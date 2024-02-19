<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar.php'); ?>

<body>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="<?php echo getUrl('/'); ?>">Center of Excellence</a></li>
                <li class="active"><span>Workshop</span></li>
            </ol>

            <h1>Workshop</h1>

            <p>Pelatihan adalah salah satu aspek kunci guna meningkatkan kompetensi UMKM di era globalisasi yang kompetitif. Program Center of Excellence (CoE) adalah mitra untuk pelatihan yang relevan dan bermanfaat bagi pemilik UMKM.</p>

            <div class="title-features flex gap-24 mt-24">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Pembelajaran Interaktif</h6>
                        <p>Workshop dirancang untuk menjadi pengalaman belajar yang melibatkan peserta dalam latihan dan diskusi.</p>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Mentor Ahli</h6>
                        <p>Mentor ahli dan praktisi top, memberikan kesempatan langka untuk belajar langsung dari yang terbaik di industri.</p>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Pengembangan Keterampilan</h6>
                        <p>Workshop difokuskan pada pengembangan keterampilan langsung dapat diterapkan dalam konteks sehari-hari dan karir.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- WEB CONTENT -->
    <section class="webcontent">
        <div class="container">

            <div class="sortfilter">
                <div class="input-icon">
                    <label class="material-symbols fill">search</label>
                    <input type="passw  ord" class="form-control" placeholder="Search here ...">
                </div>
                <div class="dropdown">
                    <a class="btn btn-transparent btn-icon btn-pill" data-toggle="dropdown" aria-expanded="false"><span class="material-symbols">filter_list</span><span>Filter</span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="#"><span>Semua</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sedang Dibuka</span></a></li>
                        <li><a href="#"><span>Kuota Penuh</span></a></li>
                        <li><a href="#"><span>Belum Tersedia</span></a></li>
                    </ul>
                </div>
                <div class="dropdown sort">
                    <a class="btn btn-transparent btn-icon pl-0 pr-0" data-toggle="dropdown"><span><span>Urutkan Berdasarkan</span><b>A-Z</b></span><span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="active"><a href="#"><span>A-Z</span></a></li>
                        <li><a href="#"><span>Populer</span></a></li>
                    </ul>
                </div>
            </div>

            <!-- ## -->

            <div class="list-group grid hover gap-24 ft-wksp">
                <a href="<?php echo getUrl('workshop-view'); ?>" class="list-group-item">
                    <div class="cover-wrap img-hover"><img src="/assets/img/wp/8.jpg" alt=""></div>
                    <div>
                        <h5 class="mb-12">Workshop Fotografi Studio</h5>
                        <span><b>Batch 3</b> / 5 Jan 2024 - 5 Feb 2024</span>
                    </div>
                </a>
                <a href="<?php echo getUrl('workshop-view'); ?>" class="list-group-item">
                    <div class="cover-wrap img-hover"><img src="/assets/img/wp/7.jpg" alt=""></div>
                    <div>
                        <h5 class="mb-12">Workshop Menggambar Tradi</h5>
                        <span><b>Batch 1</b> / 5 Jan 2024 - 5 Feb 2024</span>
                    </div>
                </a>
                <a href="<?php echo getUrl('workshop-view'); ?>" class="list-group-item disabled">
                    <div class="cover-wrap img-hover"><img src="/assets/img/wp/4.jpg" alt=""></div>
                    <div>
                        <h5 class="mb-12">Workshop UI/UX</h5>
                        <span><b>Kuota Penuh</b></span>
                    </div>
                </a>
                <a href="<?php echo getUrl('workshop-view'); ?>" class="list-group-item disabled">
                    <div class="cover-wrap img-hover"><img src="/assets/img/wp/2.jpg" alt=""></div>
                    <div>
                        <h5 class="mb-12">Workshop Digital Marketing</h5>
                        <span><b>Belum Tersedia</b></span>
                    </div>
                </a>
            </div>

            <!-- ### -->

            <?php include(getPart() . 'pagination.php'); ?>

        </div>
    </section>

    <?php include(getPart() . 'footer.php'); ?>