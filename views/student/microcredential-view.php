<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    $user = checkRoleSession('student');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar-student.php'); ?>

<body>

    <?php include(getPart() . 'course-title.php'); ?>

    <!-- WEB CONTENT -->
    <section class="webcontent">
        <div class="container wrapper w-1920">

            <div class="wrapper-left w-360">
                <?php include(getPart() . 'course-info.php'); ?>
                <div class="panel-group accordion compact sharp course-chapter text-14" id="course_chapter">
                    <?php include(getPart() . 'course-chapter.php'); ?>
                </div>
            </div>

            <!-- ## -->

            <div class="wrapper-right wide">
                <div class="video-wrap">
                    <video controls>
                        <source src="/assets/img/placeholder/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="formatting mt-48">
                    <h1><small class="text-block text-primary text-16 mb-20">Pengenalan Kelas dan Silabus</small>Pengenalan Silabus</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam autem quis in quo quos aliquam vel dicta mollitia veritatis repellat obcaecati sed id voluptate, explicabo suscipit error ipsum beatae culpa.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam autem quis in quo quos aliquam vel dicta mollitia veritatis repellat obcaecati sed id voluptate, explicabo suscipit error ipsum beatae culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod harum officia eos illo accusamus maiores nihil rem voluptate voluptatibus laboriosam in, consequatur nostrum veniam. Consequatur perferendis ullam molestias laboriosam eaque!</p>
                    <p class="flex gap-12">
                        <a href="#" class="btn btn-light btn-default btn-icon btn-0 p-16 w-280 w-100"><span class="material-symbols">download</span><span><b>Bahan Ajar.zip</b><small>74.2 MB</small></span></a>
                        <a href="#" class="btn btn-light btn-default btn-icon btn-0 p-16 w-280 w-100"><span class="material-symbols">download</span><span><b>Materi.pdf</b><small>4.9 MB</small></span></a>
                    </p>
                </div>
                <form action="#" class="mt-36">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" placeholder="Judul">
                    </div>
                    <div class="form-group input-file mt-24">
                        <label>Pilih Gambar</label>
                        <div class="input-group">
                            <a class="input-group-btn btn btn-outline btn-default btn-icon browse_file"><span class="material-symbols">upload</span><span>Browse File </span></a>
                            <input type="file" />
                            <div class="form-control placeholder">
                                <span>No file chosen ...</span>
                                <a class="btn btn-transparent btn-24 btn-square text-danger remove_file hidden"><span class="material-symbols">close</span></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group flex-h">
                        <!-- <button type="submit" class="btn btn-primary btn-icon" style="width:160px"><span>Submit</span><span class="material-symbols fill">send</span></button> -->
                        <div class="btn btn-primary btn-icon" style="width:160px"><span>Submit</span><span class="material-symbols fill">send</span></div>
                    </div>
                </form>
                <div class="flex j-fluid gap-24 mt-48">
                    <a href="#" class="btn btn-outline btn-default btn-icon btn-0 gap-24 p-24"><span class="material-symbols flip-h">arrow_right_alt</span><span><small>sebelumnya</small><b>Selamat datang di Mastering Potrait Photography</b></span></a>
                    <a href="#" class="btn btn-outline btn-default btn-icon btn-0 gap-24 p-24 text-right"><span class="mr-0"><small>selanjutnya</small><b>e-Book Materi</b></span><span class="material-symbols">arrow_right_alt</span></a>
                </div>
            </div>

        </div>
    </section>

    <?php include(getPart() . 'footer.php'); ?>