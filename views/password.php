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
                <h6>Lupa Password</h6>
            </div>

            <!-- ## -->

            <form action="#" class="userform-form">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="material-symbols fill">alternate_email</span></span>
                        <div class="floating-label">
                            <input type="email" name="email" class="form-control">
                            <label><span>Email</span></label>
                        </div>
                    </div>
                </div>

                <p class="text-center text-12 mt-24">Masukkan alamat email yang ditautkan pada akun Anda untuk mendapatkan tautan untuk menyetel ulang password Anda.</p>

                <div class="form-group mt-24">
                    <div class="btn btn-primary btn-56 btn-block btn-icon"><span><b>KIRIM</b></span><span class="material-symbols">send</span></div>
                </div>

            </form>

            <!-- ## -->

            <div class="text-center"><a href="<?php echo getUrl('signin'); ?>"><b>Masuk</b></a> atau <a href="<?php echo getUrl('signup'); ?>"><b>Mendaftar</b></a></div>

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