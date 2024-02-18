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
                <li class="active"><span>Notifikasi</span></li>
            </ol>
            <h1>Notifikasi</h1>
        </div>
    </section>

    <!-- WEB CONTENT -->
    <section class="webcontent notif">
        <div class="container">

            <div class="mb-16 pl-24" style="color:Var(--g4x)">12 Februari 2024</div>
            <ul class="list-group separated hover icons mb-24">
                <li class="list-group-item pl-24 pr-24 gap-24">
                    <span class="material-symbols color-stripe">payments</span>
                    <div class="mt-0"><b>Sistem</b> - ac facilisis in Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quam veritatis odio sequi nobis tempore. Voluptatem, magni animi tempora alias eius quae non illum autem nobis cumque tenetur, corporis officia.</div>
                    <span class="mt-0">21:30</span>
                </li>
                <li class="list-group-item pl-24 pr-24 gap-24">
                    <span class="material-symbols color-facebook-msg">inbox</span>
                    <div class="mt-0"><b>Micro-credential</b> membalas <a href="#">komentar</a> anda.</div>
                    <span class="mt-0">21:30</span>
                </li>
            </ul>

            <div class="mb-16 pl-24" style="color:Var(--g4x)">12 Februari 2024</div>
            <ul class="list-group separated hover icons mb-24">
                <li class="list-group-item pl-24 pr-24 gap-24">
                    <span class="material-symbols text-primary">notifications</span>
                    <div class="mt-0">Dapibus ac facilisis in</div>
                    <span class="mt-0">21:30</span>
                </li>
            </ul>

            <!-- ## -->

            <div class="flex mt-48">
                <a href="#" class="btn btn-default ml-auto"><span>Tampilkan Lebih Banyak</span></a>
            </div>

        </div>
    </section>

    <?php } else { header("location: /"); } ?>

    <?php include(getPart() . 'footer.php'); ?>