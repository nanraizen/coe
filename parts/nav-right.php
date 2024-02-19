<!-- NAV RIGHT -->
<nav class="right">
    <ul>
        <?php if (!isLoggedIn()) { ?>

        <div class="sign-inup">
            <li><a href="<?php echo getUrl('signin'); ?>" class="btn btn-transparent btn-pill btn-40 pl-20 pr-20"><span>Masuk</span></a></li>
            <li><a href="<?php echo getUrl('signup'); ?>" class="btn btn-primary btn-pill btn-40 pl-20 pr-20"><span>Mendaftar</span></a></li>
        </div>

        <?php } 
        else { ?>

        <li><a href="<?php echo getUrl('notifications'); ?>"><span class="material-symbols fill new-indicator">notifications</span></a></li>
        <li><a href="<?php echo getUrl('settings'); ?>"><span class="material-symbols fill">settings</span></a></li>
        <li class="dropdown">
            <button type="button" class="btn-img img-ava gap-8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <img src="/assets/img/ava/<?php echo ($role === 'admin') ? 'default-ifik.jpg' : (($role === 'student') ? 'g1.jpg' : 'g2.jpg'); ?>" alt="">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a class="img-ava-24"><img src="/assets/img/ava/<?php echo ($role === 'admin') ? 'default-ifik.jpg' : (($role === 'student') ? 'g1.jpg' : 'g2.jpg'); ?>" alt=""><span><b class="text-ellipsis"><?php echo $name; ?></b><small><?php echo $role; ?></small></span></a></li>
                <li role="separator" class="divider"></li>

                <?php if ($role === 'admin') { ?>

                <li><a href="<?php echo getUrl($role . '/index'); ?>"><span class="material-symbols">dashboard</span>Dashboard</a></li>
                <li><a href="<?php echo getUrl('settings'); ?>"><span class="material-symbols">settings</span>Pengaturan</a></li>

                <?php } elseif ($role === 'student') { ?>

                <li><a href="<?php echo getUrl($role . '/index'); ?>"><span class="material-symbols">dashboard</span>Dashboard</a></li>
                <li><a href="<?php echo getUrl($role . '/orders'); ?>"><span class="material-symbols new-indicator">shopping_basket</span>Riwayat Pembelian</a></li>
                <li><a href="<?php echo getUrl('settings'); ?>"><span class="material-symbols">settings</span>Pengaturan</a></li>

                <?php } elseif ($role === 'mentor') { ?>

                <li><a href="<?php echo getUrl($role . '/index'); ?>"><span class="material-symbols">dashboard</span>Dashboard</a></li>
                <li><a href="<?php echo getUrl('settings'); ?>"><span class="material-symbols">settings</span>Pengaturan</a></li>
                
                <?php } ?>

                <li role="separator" class="divider"></li>
                <li><a href="<?php echo getUrl('signout'); ?>"><span class="material-symbols">logout</span>Keluar</a></li>
            </ul>
        </li>

        <?php } ?>
    </ul>
</nav>