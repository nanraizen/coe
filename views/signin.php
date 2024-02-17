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
                <h6>Masuk</h6>
            </div>

            <!-- ## -->

            <form action="" method="post" class="userform-form">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="material-symbols fill">account_circle</span></span>
                        <div class="floating-label">
                            <input type="text" name="username" class="form-control" required>
                            <label><span>Username</span></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="material-symbols fill">lock</span></span>
                        <div class="floating-label">
                            <input type="password" name="password" class="form-control" required>
                            <label><span>Password</span></label>
                        </div>
                        <span class="input-group-addon"><a href="<?php echo getUrl('password'); ?>" class="text-primary text-hline">Lupa?</a></span>
                    </div>
                    <?php if (isset($error)) {
                        echo "<p class='help-block text-danger'>$error</p>";
                    } ?>
                </div>

                <div class="form-group mt-24">
                    <button type="submit" class="btn btn-primary btn-56 btn-block btn-icon"><span><b>MASUK</b></span><span class="material-symbols">login</span></button>
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