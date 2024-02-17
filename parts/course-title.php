<!-- TITLE -->
<section class="page-title">
    <div class="container w-1920 flex-h pt-24 pb-24">

        <a href="#" class="btn btn-transparent btn-icon btn-0"><span class="material-symbols flip-h">arrow_right_alt</span></a>

        <div>
            <ol class="breadcrumb mb-8">
                <li><a href="<?php echo getUrl($role . '/index'); ?>">Dashboard</a></li>
                <li><a href="<?php echo getUrl($role . '/microcredential'); ?>">Micro-credential</a></li>
                <li class="active"><span>Mastering Potrait Photography</span></li>
            </ol>
            <h5>Mastering Potrait Photography</h5>
        </div>

        <?php if (thisUrl('/student/microcredential-cert')) { ?>
            <a href="<?php echo getUrl($role . '/microcredential-view'); ?>" class="btn btn-primary btn-light btn-icon ml-auto"><span class="material-symbols fill">description</span><span>Kembali ke Materi</span></a>
            <?php } else { ?>
                <a href="<?php echo getUrl($role . '/microcredential-cert'); ?>" class="btn btn-primary btn-icon ml-auto"><span class="material-symbols fill">license</span><span>Lihat Sertifikat</span></a>
        <?php } ?>

    </div>
</section>