<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    $user = checkRoleSession('student');
    include(getPart() . 'header.php');
    include(getPart() . 'navbar-student.php'); ?>

<body>

    <!-- TAGIHAN -->
    <section class="tagihan pt-48">
        <div class="container wrapper j-fluid">

            <div class="wrapper-left">
                <h5>Tagihan Pembayaran</h5>
                <h2><sup>Rp.</sup> 101.091</h2>
                <div class="formatting text-14">
                    <ul class="pl-12">
                        <li>No. Pesanan <b>INV/IFIK/0001234</b></li>
                        <li>Batas pembayaran <b>24 Januari 2024 - 14:32</b>.</li>
                        <li>Pastikan kamu melakukan transfer sebesar <b>Rp 101.091</b>.</li>
                    </ul>
                </div>
            </div>

            <!-- ## -->

            <div class="wrapper-right">
                <h6>Transfer ke Rekening Berikut Sebelum Batas Pembayaran</h6>
                <div href="#" class="btn-img img-shadow mt-20">
                    <img src="/assets/img/icon/bni2.jpg" alt="" class="rounded-8">
                    <span><b><a class="copyBtn copyIcon" data-placement="top">123456789-0</a></b><small>a.n. Fakultas Industri Kreatif</small></span>
                </div>
                <hr>
                <a class="btn btn-primary" data-toggle="modal" data-target="#bukti_bayar"><span>Kirim Bukti Pembayaran</span></a>
                <!-- <div class="alert alert-info"><span>Menunggu Verifikasi Admin.</span></div> -->
            </div>

        </div>
    </section>

    <!-- MODAL -->
    <div class="modal modal-480 modal-vh" id="bukti_bayar">
        <div class="modal-dialog">
            <form class="modal-content">

                <div class="modal-header">
                    <div>
                        <h5>Kirim Bukti Pembayaran</h5>
                    </div>
                    <button type="button" class="btn btn-icon btn-28 btn-light btn-default btn-square" data-dismiss="modal"><span class="material-symbols">close</span></button>
                </div>

                <div class="modal-body">
                    <div class="formatting text-14">
                        <ul class="pl-12">
                            <li>Pastikan bukti transfer memiliki <b>No. Ref.</b></li>
                            <li>Hubungi <b><a href="//wa.me" target="_blanks">admin</a></b> jika kamu melakukan tranfer setelah batas pembayaran habis.</li>
                        </ul>
                    </div>
                    <div class="form-group input-file mt-24">
                        <label>Pilih Gambar</label>
                        <div class="input-group">
                            <a class="input-group-btn btn btn-outline btn-default btn-icon browse_file"><span class="material-symbols">upload</span><span>Browse File </span></a>
                            <input type="file" accept=".png,.jpg,.jpeg" />
                            <div class="form-control placeholder">
                                <span>No file chosen ...</span>
                                <a class="btn btn-transparent btn-24 btn-square text-danger remove_file hidden"><span class="material-symbols">close</span></a>
                            </div>
                        </div>
                        <div class="cover-wrap mt-16 hidden"></div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="flex j-fluid gap-16">
                        <div class="btn btn-default btn-44" data-dismiss="modal"><span>Batalkan</span></div>
                        <div class="btn btn-primary btn-44"><span>Kirim</span></div>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <!-- TITLE -->
    <section class="page-title">
        <div class="container">

            <ol class="breadcrumb">
                <li><a href="<?php echo getUrl($role . '/index'); ?>">Dashboard</a></li>
                <li class="active"><span>Riwayat Pembelian</span></li>
            </ol>

            <h1>Riwayat Pembelian</h1>

        </div>
    </section>

    <!-- WEB CONTENT -->
    <section class="webcontent">
        <div class="container">

            <div class="table-odd tagihan-list">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-left w-30">No. Tagihan</th>
                            <th class="text-left w-20">Tanggal</th>
                            <th class="text-left w-30">Status</th>
                            <th class="text-right w-20">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>INV/IFIK/0001234</b></td>
                            <td>23 Jan 2024</td>
                            <td>Menunggu Verifikasi Admin</td>
                            <td class="text-right"><a class="text-primary text-hline text-semibold" data-toggle="modal" data-target="#detail_tagihan">Lihat Detail</a></td>
                        </tr>
                        <tr>
                            <td><b>INV/IFIK/0001234</b></td>
                            <td>23 Jan 2024</td>
                            <td>Menunggu Verifikasi Admin</td>
                            <td class="text-right"><a class="text-primary text-hline text-semibold" data-toggle="modal" data-target="#detail_tagihan">Lihat Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ## -->

            <?php include(getPart() . 'pagination.php'); ?>

        </div>
    </section>

    <!-- MODAL -->
    <div class="modal modal-480 modal-vh" id="detail_tagihan">
        <div class="modal-dialog">
            <form class="modal-content">

                <div class="modal-header">
                    <div>
                        <h5>INV/IFIK/0001234</h5>
                    </div>
                    <button type="button" class="btn btn-icon btn-28 btn-light btn-default btn-square" data-dismiss="modal"><span class="material-symbols">close</span></button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-info">
                        <p>Placeholder.</p>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="flex j-fluid gap-16">
                        <div class="btn btn-default btn-44" data-dismiss="modal"><span>Tutup</span></div>
                        <!-- <div class="btn btn-primary btn-44"><span>Lihat Selengkapnya</span></div> -->
                    </div>
                </div>

            </form>
        </div>
    </div>

    <?php include(getPart() . 'footer.php'); ?>