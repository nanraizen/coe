<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar.php'); ?>

<body>

    <section class="notfound">
        <div class="panel w-480">

            <div class="cover-wrap"><img src="/assets/img/wp/1.jpg" alt=""></div>

            <span class="material-symbols mt-36 mb-28 text-danger">sentiment_dissatisfied</span>
            <h1>Tidak Ditemukan</h1>
            <p class="mt-24 mb-24">halaman mungkin belum siap atau telah dihapus atau dipindahkan atau diganti atau tidak pernah ada.</p>

            <div class="flex gap-12 j-center">
                <a href="javascript:history.back()" class="btn btn-transparent btn-40 btn-icon btn-square"><span class="material-symbols flip-h">arrow_right_alt</span></a>
                <a href="<?php echo getUrl('/'); ?>" class="btn btn-transparent btn-40 btn-icon btn-square"><span class="material-symbols">home</span></a>
            </div>

        </div>
    </section>

    <?php include(getPart() . 'footer.php'); ?>