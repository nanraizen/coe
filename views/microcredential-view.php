<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar.php'); ?>

<body>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="<?php
                 echo getUrl('/'); ?>">Center of Excellence</a></li>
                <li class="active"><span><a href="#">Micro-credential</a></span></li>
            </ol>

            <h1>Mastering Potrait Photography</h1>

            <p>Panduan praktis buat kamu yang mau bikin foto potret jadi makin keren! Dari trik pencahayaan sampai cara interaksi sama model. Cocok buat pemula atau yang udah mahir, biar potret kamu makin cetar! 📸✨</p>

            <div class="flex gap-24 mt-12">
                <div class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols fill">language</span><span>Bahasa Indonesia</span></div>
                <div class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols fill">book_5</span><span>5 Materi</span></div>
                <div class="btn btn-transparent btn-icon btn-0 noact gap-12"><span class="material-symbols fill">pace</span><span>4j 52m</span></div>
            </div>

        </div>
    </section>

    <!-- WEB CONTENT -->
    <section class="webcontent">
        <div class="container wrapper">

            <section class="wrapper-left wide">
                <div class="img-wrap img-shadow mb-36">
                    <img src="/assets/img/wp/8.jpg" alt="" class="rounded-12">
                </div>
                <div class="formatting text-justify">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, <a href="#">quidem nisi</a> maxime enim dignissimos quae delectus laborum voluptates aliquid ab. Minima, nulla debitis? Dolor dignissimos aut temporibus placeat debitis sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus beatae ipsa adipisci, sed laboriosam laborum cupiditate, suscipit iure dolorem ab facere, quae vel. Earum nesciunt iste ex praesentium, doloremque accusamus.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos iste dolorum nemo, ad temporibus aliquid nesciunt saepe soluta officia blanditiis repellendus libero ab sint. Doloremque harum quos assumenda labore fuga!</p>
                    <ul class="check">
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quae, excepturi vero, vitae exercitationem explicabo.</li>
                        <li>Eos fuga eaque consequuntur cumque nihil laborum tempora architecto velit quam ipsa, nobis itaque ullam?</li>
                        <li>Fuga minus voluptatibus, dolorem explicabo perferendis beatae eum quam corrupti illum aliquam neque. Omnis repellendus maiores vitae nobis.</li>
                    </ul>
                </div>
            </section>

            <!-- ## -->

            <section class="wrapper-right">
                <a href="<?php echo getUrl('registration'); ?>" class="btn btn-primary btn-block btn-icon btn-56"><span><b>Daftar Sekarang</b></span><span class="material-symbols">edit_note</span></a>
                <a class="btn btn-default btn-block btn-icon btn-56 mt-12"><span>Tonton Pratinjau</span><span class="material-symbols">play_circle</span></a>

                <hr class="dash">

                <div class="course-price">
                    <h6 class="mb-20">Biaya Layanan</h6>
                    <p>
                        <del>Rp 300.000</del>
                        <span class="label label-danger"><span>Hemat</span><span>17%</span></span>
                    </p>
                    <h3 class="text-danger text-semibold">Rp 249.000</h3>
                </div>

                <hr class="dash">

                <div class="panel panel-default mt-24 course-rating">
                    <div class="panel-body flex-v gap-20">
                        <div class="rating flex gap12 j-center">
                            <b>4.5</b>
                        </div>
                        <p>Kelas ini mendapatkan nilai <b class="text-semibold">4.5</b> dari <b class="text-semibold">5 ulasan</b>.</p>
                        <a class="btn btn-warning btn-36" data-toggle="modal" data-target="#ulasan"><span>Lihat Ulasan</span></a>
                    </div>
                </div>

                <hr class="dash">

                <div class="course-mentor flex-v gap-24">
                    <h6>Mentor</h6>
                    <a href="#" class="btn-img img-ava-40">
                        <img src="/assets/img/ava/g2.jpg" alt="" class="img-shadow rounded-8">
                        <span><b>Jennifer Martinez</b><small>JMP.jpg Studio</small></span>
                    </a>
                </div>
            </section>

            <!-- ## -->

            <section class="wrapper-full mt-24">
                <div class="mb-12 flex">
                    <p class="ml-auto">2 Chapter &nbsp;•&nbsp; 5 Materi &nbsp;•&nbsp; 39m</p>
                </div>

                <div class="panel-group accordion compact sharp course-chapter text-14 disabled" id="course_chapter">
                    <?php include(getPart() . 'course-chapter.php'); ?>
                </div>
            </section>

        </div>
    </section>

    <!-- MODAL ULASAN -->
    <div class="modal modal-480 right modal-vh" id="ulasan">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <div>
                        <h5>Ulasan</h5>
                        <p class="text-ellipsis">Mastering Potrait Photography</p>
                    </div>
                    <button type="button" class="btn btn-icon btn-28 btn-light btn-default btn-square" data-dismiss="modal"><span class="material-symbols">close</span></button>
                </div>

                <div class="modal-body">
                    <ul class="list-group comment-review">

                        <li class="list-group-item">
                            <div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus perferendis dolorem voluptatum illum! Molestiae, aspernatur! Laboriosam quae placeat in doloribus.
                            </div>
                            <div class="btn-img img-ava-40">
                                <img src="/assets/img/ava/g0.jpg" alt="" class="s40" />
                                <span><b>John Smith</b><small>17 Januari 2024</small></span>
                            </div>
                        </li>

                    </ul>
                    <hr>
                    <div class="btn btn-primary btn-44 btn-block disabled"><span>Tampilkan Lebih Banyak</span></div>
                </div>

            </div>
        </div>
    </div>

    <?php include(getPart() . 'footer.php'); ?>