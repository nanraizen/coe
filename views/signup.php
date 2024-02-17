<?php require_once($_SERVER['DOCUMENT_ROOT'].'/functions.php');
    include(getPart() . 'header.php');
    if (!isset($_SESSION['user'])) { ?>

<body>

    <!-- BACKDROP -->
    <div class="userform-backdrop img-wrap">
        <img src="/assets/img/wp/0.jpg" alt="">
    </div>

    <!-- FORM -->
    <div class="userform">
        <div class="panel borderless">

            <div class="userform-logo">
                <a href="<?php echo getUrl('/'); ?>"><img src="/assets/img/logo/ifik-full.png" alt=""></a>
                <h6>Mendaftar</h6>
            </div>

            <!-- ## -->

            <form action="#" class="userform-form">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="material-symbols fill">person</span></span>
                        <div class="floating-label">
                            <input type="text" class="form-control">
                            <label><span>Nama Lengkap</span></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="material-symbols fill">alternate_email</span></span>
                        <div class="floating-label">
                            <input type="email" class="form-control">
                            <label><span>Email</span></label>
                        </div>
                    </div>
                </div>

                <hr class="dash mt-16 mb-16">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="material-symbols fill">account_circle</span></span>
                        <div class="floating-label">
                            <input type="text" class="form-control">
                            <label><span>Username</span></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="material-symbols fill">lock</span></span>
                        <div class="floating-label">
                            <input type="password" class="form-control">
                            <label><span>Password</span></label>
                        </div>
                    </div>
                </div>

                <p class="text-center text-12 mt-24">Dengan mengklik "<b>Mendaftar</b>", berarti Anda telah membaca dan menyetujui <a href="<?php echo getUrl('terms'); ?>"><b>Ketentuan Layanan</b></a> dan <a href="<?php echo getUrl('policy'); ?>"><b>Kebijakan Privasi</b></a>.</p>

                <div class="form-group mt-24">
                    <div class="btn btn-primary btn-56 btn-block btn-icon"><span><b>MENDAFTAR</b></span><span class="material-symbols">group_add</span></div>
                </div>

            </form>

            <!-- ## -->

            <div class="text-center">Belum memiliki akun? <a href="<?php echo getUrl('signup'); ?>"><b>Mendaftar</b></a></a></div>

        </div>
    </div>

    <!-- BODY JS -->
    <script src="/assets/js/magia.min.js"></script>
    <script src="/assets/js/template.min.js"></script>

    <?php }

    else {
        header("location: /{$role}/index");
    } ?>

</body>

</html>