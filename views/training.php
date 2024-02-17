<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar.php'); ?>

<body>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="<?php echo getUrl('/'); ?>">Center of Excellence</a></li>
                <li class="active"><span>Pelatihan</span></li>
            </ol>

            <h1>Pelatihan</h1>

            <p>Pelatihan adalah salah satu aspek kunci guna meningkatkan kompetensi UMKM di era globalisasi yang kompetitif. Program Center of Excellence (CoE) adalah mitra untuk pelatihan yang relevan dan bermanfaat bagi pemilik UMKM.</p>

            <div class="title-features flex gap-24 mt-24">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Metode Hybrid</h6>
                        <p>Menggabungkan metode online dan offline untuk akses sumber daya pembelajaran lebih lengkap.</p>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Pengetahuan yang Relevan</h6>
                        <p>Penyesuaian dengan tren pasar yang bisa langsung diterapkan UMKM dalam bisnis yang dinamis.</p>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Pendekatan Praktis</h6>
                        <p>Implementasi studi kasus, simulasi dan proyek praktis dalam pengelolaan sehari-hari.</p>
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
                <a class="btn btn-transparent btn-icon btn-pill highlight" data-toggle="collapse" data-target="#categories"><span class="material-symbols">filter_list</span><span>Filter</span></a>
                <div class="dropdown sort">
                    <a class="btn btn-transparent btn-icon pl-0 pr-0" data-toggle="dropdown"><span><span>Urutkan Berdasarkan</span><b>A-Z</b></span><span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="active"><a href="#"><span>A-Z</span></a></li>
                        <li><a href="#"><span>Populer</span></a></li>
                    </ul>
                </div>
                <div class="collapse filter" id="categories">
                    <div class="flex gap-12">
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="label label-outline label-dkv">DKV</span><span>Desain Komunikasi Visual</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="label label-outline label-di">DI</span><span>Desain Interior</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="label label-outline label-dp">DP</span><span>Desain Produk</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="label label-outline label-kt">KT</span><span>Kriya Tekstil</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="label label-outline label-sr">SR</span><span>Seni Rupa</span></a>
                    </div>
                </div>
            </div>

            <!-- ## -->

            <div class="wrapper">
                <div class="wrapper-full">

                    <div class="list-group grid hover gap-24 ft-trng">
                        <div class="list-group-item">
                            <a href="<?php echo getUrl('training-view'); ?>" class="img-wrap img-shadow img-hover"><img src="/assets/img/wp/1.jpg" alt=""></a>
                            <h5><a href="<?php echo getUrl('training-view'); ?>">Pelatihan 3D Printing</a></h5>
                            <p><b>Batch 2</b> / 5 Jan 2024 - 5 Feb 2024</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente magni accusantium neque blanditiis? Quibusdam libero.</p>
                            <a href="<?php echo getUrl('training-view'); ?>" class="btn btn-primary btn-block"><span>Selengkapnya</span></a>
                        </div>
                        <div class="list-group-item">
                            <a href="<?php echo getUrl('training-view'); ?>" class="img-wrap img-shadow img-hover"><img src="/assets/img/wp/2.jpg" alt=""></a>
                            <h5><a href="<?php echo getUrl('training-view'); ?>">Pelatihan Pembuatan Kemasan Produk</a></h5>
                            <p><b>Batch 2</b> / 5 Jan 2024 - 5 Feb 2024</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente magni accusantium neque blanditiis.</p>
                            <a href="<?php echo getUrl('training-view'); ?>" class="btn btn-primary"><span>Selengkapnya</span></a>
                        </div>
                    </div>

                    <!-- ### -->

                    <?php include(getPart() . 'pagination.php'); ?>

                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <?php include(getPart() . 'footer.php'); ?>