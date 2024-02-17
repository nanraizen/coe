<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    $user = checkRoleSession('student');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar-student.php'); ?>

<body>

    <?php include(getPart() . 'course-title.php'); ?>

    <!-- WEB CONTENT -->
    <section class="webcontent">
        <div class="container wrapper w-1920">

            <div class="wrapper-left flex-v gap-24 w-360">
                <h6>Certificate of Completion</h6>
                <a href="#" class="btn-img img-ava-44">
                    <img src="/assets/img/ava/g1.jpg" alt="">
                    <span><small>Diberikan Kepana</small><b>John Smith</b></span>
                </a>
                <a href="#" class="btn-img img-ava-44">
                    <img src="/assets/img/ava/g2.jpg" alt="">
                    <span><small>Penanggung Jawab</small><b>Jennifer Martinez</b></span>
                </a>
                <hr>
                <div class="flex-v gap-24">
                    <a class="btn btn-transparent btn-icon btn-0 noact gap-16"><span class="material-symbols">category</span><span><small>Bidang</small><b>Mastering Potrait Photography</b></span></a>
                    <a class="btn btn-transparent btn-icon btn-0 noact gap-16"><span class="material-symbols">license</span><span><small>Nomor Sertifikat</small><b>MCRD-27A55T19R3-AB</b></span></a>
                    <a class="btn btn-transparent btn-icon btn-0 noact gap-16"><span class="material-symbols">new_releases</span><span><small>Diterbitkan pada</small><b>24 Jan 2024</b></span></a>
                </div>
                <hr>
                <div class="flex-v gap-12">

                    <a href="#" class="btn btn-primary btn-block btn-icon"><span class="material-symbols fill">download</span><span>Download PDF</span></a>
                    <a href="<?php echo getUrl('verification') ?>" class="btn btn-default btn-light btn-block btn-icon"><span class="material-symbols fill">find_in_page</span><span>Periksa Kredensial</span></a>
                </div>
            </div>

            <!-- ## -->

            <div class="wrapper-right wide">
                <div class="course-cert img-shadow">
                    <img src="/assets/img/placeholder/cert.jpg" alt="" class="w-900 w-100">
                </div>
            </div>

        </div>
    </section>

    <?php include(getPart() . 'footer.php'); ?>