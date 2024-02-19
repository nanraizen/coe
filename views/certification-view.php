<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar.php'); ?>

<body>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="<?php echo getUrl('/'); ?>">Center of Excellence</a></li>
                <li class="active"><span>Sertifikasi</span></li>
            </ol>

            <h1>Sertifikasi Adobe</h1>

        </div>
    </section>

    <!-- WEB CONTENT -->
    <section class="webcontent">
        <div class="container wrapper">

            <div class="wrapper-left">
                <img src="/assets/img/icon/adobe_bg.jpg" alt="" class="rounded-8" style="border:1px solid var(--g2x)">
                <div class="flex-v">
                    <div class="btn btn-transparent btn-0 btn-icon noact pl-24 pr-24 mt-24"><span class="material-symbols fill">edit_calendar</span><span><small>Batas Pendaftaran</small><b>29 Februari 2024</b></span></div>
                    <div class="btn btn-transparent btn-0 btn-icon noact pl-24 pr-24 mt-24"><span class="material-symbols fill">group</span><span><small>Gelombang</small><b>Batch 1</b></span></div>
                    <div class="btn btn-transparent btn-0 btn-icon noact pl-24 pr-24 mt-24"><span class="material-symbols fill">calendar_month</span><span><small>Waktu Test</small><b>4 - 10 Maret 2024</b></span></div>
                </div>
                <hr>
                <a href="<?php echo getUrl('registration'); ?>" class="btn btn-primary btn-56 btn-icon btn-block"><span class="material-symbols">edit_note</span><span>Daftar Sekarang</span></a>
            </div>

            <!-- ## -->

            <div class="wrapper-right wide">
                <div class="formatting text-justify">
                    <p>Adobe Certified Associate (ACA) is a certification that has been recognized and recognized by the world of work to demonstrate the level of ability to use Adobe’s visual communication applications, namely Adobe Photoshop, Adobe InDesign, Adobe Illustrator, Adobe Dreamweaver, Adobe Flash and Adobe Premiere Pro.</p>
                    <p>ACA Certification also show the talent a person in communicating his ideas and creativity in the form of videos, multimedia, graphic design and websites using Adobe applications.</p>
                    <p>For those of you who want to take higher education or take special classes in visual communication, having an ACA certification can first give an overview of the education program that will be taken. For those who will enter the world of work, ACA certification provides more value and makes it a superior candidate that deserves to be chosen.</p>
                </div>
                <div class="panel-group accordion rounded-8 mt-24" id="adobe_certype">

                    <div class="panel panel-default">
                        <a class="panel-header icons" data-toggle="collapse" data-parent="#adobe_certype" href="#aca_vds" aria-expanded="false">
                            <div class="flex-1">
                                <b>ACA Visual Design Specialist</b>
                            </div>
                            <span class="material-symbols expand-more">add</span>
                            <span class="material-symbols expand-less">remove</span>
                        </a>
                        <div id="aca_vds" class="collapse">
                            <div class="panel-body bordered">
                                <ul class="list-group borderless">
                                    <li class="list-group-item">Graphic design and illustrations use <b>Adobe Illustrator</b></li>
                                    <li class="list-group-item">Digital and print media publications use <b>Adobe InDesign</b></li>
                                    <li class="list-group-item">Visual Communication use <b>Adobe Photoshop</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <a class="panel-header icons" data-toggle="collapse" data-parent="#adobe_certype" href="#aca_wds" aria-expanded="false">
                            <div class="flex-1">
                                <b>ACA Web Design Specialist</b>
                            </div>
                            <span class="material-symbols expand-more">add</span>
                            <span class="material-symbols expand-less">remove</span>
                        </a>
                        <div id="aca_wds" class="collapse">
                            <div class="panel-body bordered">
                                <ul class="list-group borderless">
                                    <li class="list-group-item">Interactive Media use <b>Adobe Flash</b></li>
                                    <li class="list-group-item">Website maker use <b>Adobe Dreamweaver</b></li>
                                    <li class="list-group-item">Visual Communication use <b>Adobe Photoshop</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <?php include(getPart() . 'footer.php'); ?>