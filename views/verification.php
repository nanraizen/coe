<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar.php'); ?>

<body>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo getUrl('/'); ?>">Center of Excellence</a></li>
                <li class="active"><span>Verifikasi Kredensial</span></li>
            </ol>
            <h1>Verifikasi Kredensial</h1>
            <p>Verifikasi Kredensial Sertifikat, adalah sistem pencegahan penipuan yang digunakan untuk memverifikasi kredensial/keaslian dari sertifikat yang diterbitkan oleh Central of Excellence IFIK yang dimiliki oleh seluruh peserta yang telah hasil dalam menyelesaikan kelas/program.</p>
        </div>
    </section>

    <!-- WEB CONTENT -->
    <section class="webcontent">
        <div class="container">

            <form action="#" class="credential-form form-horizontal w-576">
                <div class="form-group">
                    <label class="w-30 control-label text-left">Nomor Sertifikat<abbr>*</abbr></label>
                    <div class="w-70">
                        <div class="input-group separated borderless">
                            <input type="text" class="form-control text-center flex-unset w-25" value="MCRD">
                            <span class="input-group-addon borderless pl-0 pr-0"><span>-</span></span>
                            <input type="text" class="form-control text-center" value="27A55T19R3">
                            <span class="input-group-addon borderless pl-0 pr-0"><span>-</span></span>
                            <input type="text" class="form-control text-center flex-unset w-20" value="AB">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="w-30"></label>
                    <div class="w-70">
                        <div class="btn btn-primary btn-icon credential-check"><span>Mulai Verifikasi</span></div>
                        <!-- <button type="submit" class="btn btn-primary btn-icon credential-check"><span>Mulai Verifikasi</span></button> -->
                    </div>
                </div>
            </form>

            <!-- ## -->

            <div class="credential-result panel panel-success mt-48 hidden">
                <div class="panel-header icons">
                    <div>
                        <h6 style="margin-bottom:4px">Verifikasi Berhasil</h6>
                        <span>Data ditemukan, nomor sertifikat valid.</span>
                    </div>
                    <span class="material-symbols ml-auto">done_all</span>
                </div>
                <div class="panel-body table-wrap borderless pt-8 pr-8 pb-8 pl-8">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nomor</td>
                                <td><b>MCRD-27A55T19R3-AB</b></td>
                            </tr>
                            <tr>
                                <td>Pemilik Kredensial</td>
                                <td><b>Adnan Rahmadi</b></td>
                            </tr>
                            <tr>
                                <td>Diterbitkan oleh</td>
                                <td><b>IFIK - Central of Excellence</b></td>
                            </tr>
                            <tr>
                                <td>Diterbitkan pada</td>
                                <td><b>27 April 2023</b></td>
                            </tr>
                            <tr>
                                <td>Sertifikat</td>
                                <td><b>Microcredential - Mastering Potrait Photography</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <!-- VERIF JS DUMMY -->
    <script>
        var nomorValid = {
            'MCRD-27A55T19R3-AB': true,
        };

        $('.credential-check').click(function () {
            event.preventDefault();
            $(this).html('<span>Memproses</span><span class="material-symbols rotate">progress_activity</span>').addClass('disabled');
            setTimeout(function () {
                var nomorPart1 = $('input:nth-child(1)').val();
                var nomorPart2 = $('input:nth-child(3)').val();
                var nomorPart3 = $('input:nth-child(5)').val();

                var nomor = nomorPart1 + '-' + nomorPart2 + '-' + nomorPart3;

                if (nomorValid[nomor]) {
                    $('.credential-result').removeClass('hidden');
                    $('.credential-false').remove();
                } else {
                    if ($('.credential-false').length === 0) {
                        $('.credential-result').addClass('hidden');
                        $('.credential-result').before('<div class="alert alert-danger mt-48 mb-0 credential-false"><p><b>Verifikasi Gagal</b>. Nomor sertifikat tidak valid.</p></div>');
                    }
                }

                $('.credential-check').html('<span>Mulai Verifikasi</span>').removeClass('disabled');
            }, 2000);
        });
    </script>

    <?php include(getPart() . 'footer.php'); ?>