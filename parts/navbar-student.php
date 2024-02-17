<!-- NAVBAR -->
<section class="navbar navbar-fix">
    <div class="container w-1920">

        <div class="navbar-logo">
            <a href="<?php echo getUrl($role . '/index'); ?>" class="btn-img gap-24">
                <img src="/assets/img/logo/ifik.png" alt="">
                <span><b><?php echo $sitename; ?></b><small>Student Dashboard</small></span>
            </a>
        </div>

        <!-- ## -->

        <nav class="center">
            <ul>
                <li class="dropdown">
                    <a data-toggle="dropdown"><span>Dashboard</span><span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-center">
                        <li><a href="<?php echo getUrl($role . '/index'); ?>"><span class="material-symbols">dashboard</span><span>Dashboard Transit</span></a></li>
                        <li class="divider"></li>
                        <li class="title">Layanan</li>
                        <li><a href="<?php echo getUrl($role . '/microcredential'); ?>"><span class="material-symbols">school</span><span>Micro-credential</span></a></li>
                        <li><a href="<?php echo getUrl($role . '/certification'); ?>"><span class="material-symbols">license</span><span>Sertifikasi</span></a></li>
                        <li class="disabled"><a href="<?php echo getUrl($role . '/training'); ?>"><span class="material-symbols">model_training</span><span>Pelatihan</span></a></li>
                        <li class="disabled"><a href="<?php echo getUrl($role . '/workshop'); ?>"><span class="material-symbols">stream</span><span>Workshop</span></a></li>
                    </ul>
                </li>
                <li class="new-indicator"><a href="orders"><span>Riwayat Pembelian</span></a></li>
                <li class="divider ml-0 mr-0"></li>
                <li><a href="<?php echo getUrl('/'); ?>"><span>Homepage</span></a></li>
            </ul>
        </nav>

        <!-- ## -->

        <?php include(getPart() . 'nav-right.php'); ?>

    </div>
</section>