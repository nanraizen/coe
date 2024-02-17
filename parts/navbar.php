<!-- NAVBAR -->
<section class="navbar navbar-fix">
    <div class="fluid">

        <div class="navbar-logo">
            <a href="<?php echo getUrl(); ?>" class="btn-img gap-24">
                <img src="/assets/img/logo/ifik.png" alt="">
                <span><b><?php echo $sitename; ?></b></span>
            </a>
        </div>

        <!-- ## -->

        <nav class="center">
            <ul>
                <li><a href="<?php echo getUrl('microcredential'); ?>"><span>Micro-credential</span></a></li>
                <li><a href="<?php echo getUrl('certification'); ?>"><span>Sertifikasi</span></a></li>
                <li><a href="<?php echo getUrl('training'); ?>"><span>Pelatihan</span></a></li>
                <li><a href="<?php echo getUrl('workshop'); ?>"><span>Workshop</span></a></li>
            </ul>
        </nav>

        <!-- ## -->

        <?php include(getPart() . 'nav-right.php'); ?>

    </div>
</section>