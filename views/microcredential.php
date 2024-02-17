<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar.php'); ?>

<body>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="<?php echo getUrl('/'); ?>">Center of Excellence</a></li>
                <li class="active"><span>Micro-credential</span></li>
            </ol>

            <h1>Micro-credential</h1>

            <p>Micro Credentials adalah sertifikasi individual untuk meningkatkan keterampilan di industri tertentu, dikenal sebagai pengayaan kompetensi. Diberikan kepada individu dengan latar belakang ilmiah kuat, sesuai dengan kebutuhan industri yang dinamis.</p>

            <div class="title-features flex gap-24 mt-24">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Relevansi Industri</h6>
                        <p>Fokus pada pengembangan keterampilan yang sesuai kebutuhan industri saat ini.</p>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Design Thinking</h6>
                        <p>Penerapan metode inovatif Design Thinking untuk menciptakan solusi berfokus pada manusia.</p>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Fasilitas</h6>
                        <p>Laboratorium dan ruang kreatif dengan perangkat terkini untuk eksperimen dan proyek kolaboratif.</p>
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
                    <input type="text" class="form-control" placeholder="Search here ...">
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
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="material-symbols">language</span><span>Web Development</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="material-symbols">photo_camera</span><span>Photography</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="material-symbols">brush</span><span>Art &amp; Design</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="material-symbols">package_2</span><span>Product Design</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="material-symbols">palette</span><span>Illustration</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="material-symbols">ar_stickers</span><span>Visual Effect</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="material-symbols">sound_sampler</span><span>Animation</span></a>
                        <a href="#" class="btn btn-default btn-light btn-icon"><span class="material-symbols">music_cast</span><span>Sound Design</span></a>
                    </div>
                </div>
            </div>

            <!-- ## -->

            <div class="wrapper">
                <div class="wrapper-full">

                    <div class="list-group grid hover gap-24 ft-mcrd">
                        <div class="list-group-item">
                            <a href="<?php echo getUrl('microcredential-view'); ?>" class="cover-wrap img-shadow img-hover"><img src="/assets/img/wp/8.jpg" alt=""></a>
                            <h5><a href="<?php echo getUrl('microcredential-view'); ?>">Mastering Potrait Photography</a></h5>
                            <p><b>Jennifer Martinez</b></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente magni accusantium neque blanditiis? Quibusdam libero.</p>
                            <a href="<?php echo getUrl('microcredential-view'); ?>" class="btn btn-primary btn-block"><span>Selengkapnya</span></a>
                        </div>
                        <div class="list-group-item">
                            <a href="<?php echo getUrl('microcredential-view'); ?>" class="cover-wrap img-shadow img-hover"><img src="/assets/img/wp/4.jpg" alt=""></a>
                            <h5><a href="<?php echo getUrl('microcredential-view'); ?>">Kajian Desain UI/UX</a></h5>
                            <p><b>Dr. Andreas Rio Adriyanto, S.E., M.Eng.</b></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente magni accusantium neque blanditiis.</p>
                            <a href="<?php echo getUrl('microcredential-view'); ?>" class="btn btn-primary"><span>Selengkapnya</span></a>
                        </div>
                    </div>

                    <!-- ### -->

                    <?php include(getPart() . 'pagination.php'); ?>

                </div>
            </div>

        </div>
    </section>

    <?php include(getPart() . 'footer.php'); ?>