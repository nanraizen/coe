<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar.php'); ?>

<body>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="<?php echo getUrl('/'); ?>">Center of Excellence</a></li>
                <li class="active"><span>Sertifikasi</span></li>
            </ol>

            <h1>Sertifikasi</h1>

            <p>Sertifikasi mengakui kemampuan di bidang tertentu, membantu mahasiswa membuktikan keterampilan dan pengetahuan untuk dunia kerja. Program sertifikasi dari Center of Excellence meningkatkan kompetensi mahasiswa.</p>

            <div class="title-features flex gap-24 mt-24">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Metode Hybrid</h6>
                        <p>Menggabungkan metode online dan offline untuk akses sumber daya pembelajaran lebih lengkap.</p>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Sertifikasi Resmi</h6>
                        <p>Kolaborasi dengan lembaga sertifikasi industri untuk pengakuan resmi keterampilan.</p>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <h6 class="text-primary">Fasilitas yang Mumpuni</h6>
                        <p>Fasilitas laboratorium modern dengan perangkat lunak dan keras terkini.</p>
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
                        <li class="active"><a href="#"><span class="material-symbols">clear_all</span><span>Semua</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#"><img src="/assets/img/icon/id.png" alt="" style="width:24px"><span>Nasional</span></a></li>
                        <li><a href="#"><span class="material-symbols color-twitter">public</span><span>Internasional</span></a></li>
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

            <div class="wrapper">
                <div class="wrapper-full">

                    <div class="list-group grid hover gap-24 ft-cert">
                        <div class="list-group-item">
                            <a href="<?php echo getUrl('certification-view'); ?>" class="img-wrap"><img src="/assets/img/icon/adobe_bg.jpg" alt=""></a>
                            <h5>
                                <a href="<?php echo getUrl('certification-view'); ?>">Sertifikasi Adobe</a>
                                <span class="material-symbols color-twitter skala" data-toggle="tooltip" data-placement="left" title="Internasional">public</span>
                            </h5>
                            <p><b>Adobe</b></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente magni accusantium neque blanditiis? Quibusdam libero.</p>
                            <a href="<?php echo getUrl('certification-view'); ?>" class="btn btn-primary"><span>Selengkapnya</span></a>
                        </div>
                        <div class="list-group-item">
                            <a href="<?php echo getUrl('certification-view'); ?>" class="img-wrap"><img src="/assets/img/icon/leskofi_bg.jpg" alt=""></a>
                            <h5>
                                <a href="<?php echo getUrl('certification-view'); ?>">Sertifikasi Fotografi</a>
                                <span class="skala" data-toggle="tooltip" data-placement="left" title="Nasional"><img src="/assets/img/icon/id.png" alt="" style="width:24px"></span>
                            </h5>
                            <p><b>Leskofi</b></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sapiente magni accusantium neque blanditiis? Quibusdam libero.</p>
                            <a href="<?php echo getUrl('certification-view'); ?>" class="btn btn-primary"><span>Selengkapnya</span></a>
                        </div>
                    </div>

                    <!-- ### -->

                    <?php include(getPart() . 'pagination.php'); ?>

                </div>
            </div>

        </div>
    </section>

    <?php include(getPart() . 'footer.php'); ?>