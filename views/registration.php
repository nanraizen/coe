<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar.php'); ?>

<body>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo getUrl('/'); ?>">Center of Excellence</a></li>
                <li class="active"><span>Pendaftaran Peserta</span></li>
            </ol>
            <h1>Pendaftaran Peserta</h1>
            <?php if (!isLoggedIn()) { echo '<p>Sudah punya akun? <a href="#">Masuk</a> dulu, yuk!</p>'; } ?>
        </div>
    </section>

    <!-- WEB CONTENT -->
    <section class="webcontent">
        <div class="container wrapper">

            <div class="wrapper-left wide">
                <div class="alert alert-warning">
                    <p>Hanya bisa memproses 1 layanan per transaksi.</p>
                </div>
                <div class="alert alert-info">
                    <p>Form pendaftaran (data diri dan akun untuk login).</p>
                </div>
            </div>

            <!-- ## -->
            
            <div class="wrapper-right text-16">
                <a href="<?php echo getUrl('microcredential-view'); ?>" class="btn btn-default btn-outline btn-icon btn-block btn-0 p-16 gap-16">
                    <span class="material-symbols fill">school</span>
                    <span>
                        <small>Micro-credential</small>
                        <b>Mastering Potrait Photography</b>
                    </span>
                </a>
                <div class="flex gap-12 mt-24"><span style="color:var(--g4x)">Subtotal</span><b class="ml-auto">Rp 149.000</b></div>
                <div class="flex gap-12 mt-12"><span style="color:var(--g4x)">Kode Unik</span><b class="ml-auto">Rp 649</b></div>
                <hr class="dash">
                <h5 class="flex gap-12 text-primary mb-24"><span class="ml-auto">Rp 149.649</span></h5>
                <a href="<?php echo getUrl($role . '/orders'); ?>" class="btn btn-primary btn-block btn-icon btn-56"><span><b>Lanjutkan Pembayaran</b></span><span class="material-symbols">payments</span></a>
            </div>

        </div>
    </section>

    <?php include(getPart() . 'footer.php'); ?>