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
                <li class="active"><span>Dashboard Transit</span></li>
            </ol>

            <h1>Dashboard Transit</h1>

            <p class="w-720">Selamat datang kembali, <b><?php echo $name; ?></b>! Ini adalah halaman portal untuk semua fitur yang disediakan IFIK Center of Excellence.</p>

        </div>
    </section>

    <!-- WEB CONTENT -->
    <section class="webcontent">
        <div class="container">

            <div class="list-group grid hover ft-transit">
                <div class="list-group-item">
                    <a href="<?php echo getUrl($role . '/microcredential'); ?>" class="thumbnail"><img src="/assets/img/placeholder/placeholder-21by9.png" alt=""><span class="material-symbols">school</span></a>
                    <h5><a href="<?php echo getUrl($role . '/microcredential'); ?>">Micro-credential</a></h5>
                    <div class="flex gap-36 vgap-12">
                        <a class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols fill">book_5</span><span><small>kelas diambil</small><b>2</b></span></a>
                        <a class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols fill">flag</span><span><small>aktivitas terakhir</small><b>20 Jan 2024</b></span></a>
                    </div>
                    <a href="<?php echo getUrl($role . '/microcredential'); ?>" class="btn btn-primary btn-block"><span>Selengkapnya</span></a>
                </div>
                <div class="list-group-item">
                    <a href="<?php echo getUrl($role . '/certification'); ?>" class="thumbnail"><img src="/assets/img/placeholder/placeholder-21by9.png" alt=""><span class="material-symbols">license</span></a>
                    <h5><a href="<?php echo getUrl($role . '/certification'); ?>">Sertifikasi</a></h5>
                    <div class="flex gap-36 vgap-12">
                        <a class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols fill">license</span><span><small>sertifikat</small><b>1/2</b></span></a>
                        <a class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols fill">flag</span><span><small>aktivitas terakhir</small><b>20 Jan 2024</b></span></a>
                    </div>
                    <a href="<?php echo getUrl($role . '/certification'); ?>" class="btn btn-primary btn-block"><span>Selengkapnya</span></a>
                </div>
            </div>

        </div>
    </section>

    <?php include(getPart() . 'footer.php'); ?>