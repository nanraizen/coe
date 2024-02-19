<!-- NAVBAR -->
<section class="navbar navbar-fix">
    <div class="container w-1920">

        <div class="navbar-logo">
            <a href="<?php echo getUrl($role . '/index'); ?>" class="btn-img gap-24">
                <img src="/assets/img/logo/ifik.png" alt="">
                <span><b><?php echo $sitename; ?></b><small>Admin Dashboard</small></span>
            </a>
        </div>

        <!-- ## -->

        <?php include(getPart() . 'nav-right.php'); ?>

    </div>
</section>