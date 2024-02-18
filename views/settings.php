<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar.php'); ?>

<body>

    <?php if (isLoggedIn()) { ?>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo getUrl('/'); ?>">Center of Excellence</a></li>
                <li class="active"><span>Pengaturan</span></li>
            </ol>
            <h1>Pengaturan</h1>
        </div>
    </section>

    <!-- WEB CONTENT -->
    <section class="webcontent">
        <div class="container wrapper">

            <div class="wrapper-left flex-v gap-12">
                <a href="<?php echo getUrl('settings'); ?>" class="btn btn-primary btn-block btn-icon"><span class="material-symbols fill">manage_accounts</span><span>Akun</span></a>
                <a href="<?php echo getUrl('settings-identity'); ?>" class="btn btn-transparent btn-block btn-icon"><span class="material-symbols fill">badge</span><span>Identitas</span></a>
                <hr>
                <a href="<?php echo getUrl('settings-session'); ?>" class="btn btn-transparent btn-block btn-icon"><span class="material-symbols fill">devices</span><span>Sesi Aktif</span></a>
            </div>

            <!-- ## -->

            <div class="wrapper-right wide">
                <div class="alert alert-info">
                    <div>
                        <p>Form pengaturan.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php } else { header("location: /"); } ?>

    <?php include(getPart() . 'footer.php'); ?>