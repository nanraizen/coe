<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    $user = checkRoleSession('student');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar-student.php'); ?>

<body>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="<?php echo getUrl($role . '/index'); ?>">Dashboard</a></li>
                <li class="active"><span>Micro-credential</span></li>
            </ol>

            <h1>Micro-credential</h1>

            <div class="flex gap-24 mt-12">
                <div class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols fill">book_5</span><span><b>2</b> Kelas Aktif</span></div>
                <div class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols fill">schedule</span><span><b>15j 28m</b> Total Belajar</span></div>
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
                        <li><a href="#"><span class="material-symbols">done_all</span><span>Selesai</span></a></li>
                        <li><a href="#"><span class="material-symbols">flag</span><span>Berlangsung</span></a></li>
                    </ul>
                </div>
                <div class="dropdown sort">
                    <a class="btn btn-transparent btn-icon pl-0 pr-0" data-toggle="dropdown"><span><span>Urutkan Berdasarkan</span><b>A-Z</b></span><span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="active"><a href="#"><span>A-Z</span></a></li>
                        <li><a href="#"><span>Terbaru</span></a></li>
                        <li><a href="#"><span>Aktivitas Terakhir</span></a></li>
                    </ul>
                </div>
            </div>

            <!-- ## -->

            <div class="list-group grid hover ft-courses">
                <div class="list-group-item">
                    <a href="<?php echo getUrl($role . '/microcredential-view'); ?>" class="img-wrap img-hover rounded-8"><img src="/assets/img/wp/8.jpg" alt=""></a>
                    <h5><a href="<?php echo getUrl($role . '/microcredential-view'); ?>">Mastering Potrait Photography</a></h5>
                    <p>Mentor : <b>Jennifer Martinez</b></p>
                    <div class="flex gap-36 vgap-12">
                        <a class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols">flag</span><span><small>aktivitas terakhir</small><b>20 Jan 2024</b></span></a>
                        <a class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols">schedule</span><span><small>total belajar</small><b>3j 34m</b></span></a>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow=50" aria-valuemin="0" aria-valuemax="50" style="width:50%"></div>
                    </div>
                </div>
                <div class="list-group-item">
                    <a href="<?php echo getUrl($role . '/microcredential-view'); ?>" class="img-wrap img-hover rounded-8"><img src="/assets/img/wp/3.jpg" alt=""></a>
                    <h5><a href="<?php echo getUrl($role . '/microcredential-view'); ?>">HTML: Learn How Websites are Made</a></h5>
                    <p>Mentor : <b>Sarah Emily</b></p>
                    <div class="flex gap-36 vgap-12">
                        <a class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols">done_all</span><span><small>selesai</small><b>25 Jan 2024</b></span></a>
                        <a class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols">schedule</span><span><small>total belajar</small><b>11j 52m</b></span></a>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow=100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include(getPart() . 'footer.php'); ?>