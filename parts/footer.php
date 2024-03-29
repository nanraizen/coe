    <?php include(getPart() . 'footer-logo.php'); ?>

    <!-- FOOTER -->
    <section class="footer">
        <div class="container">

            <div class="footer-widget flex">
                <div class="widget">
                    <h5>School of Creative Industries Telkom University</h5>
                    <p>Jln. Telekomunikasi No. 1, Sukapura, Dayeuhkolot, Kabupaten Bandung, Jawa Barat, 40553.</p>
                    <h5>Langganan Email</h5>
                    <p>Dapatkan informasi seputar produk terbaru melalui email sekarang!</p>
                    <form action="#" class="footer-subs flex-v gap-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="material-symbols fill">account_circle</span></span>
                                <input type="text" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="material-symbols">alternate_email</span></span>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block"><span>Langganan</span></button>
                    </form>
                </div>

                <!-- ## -->

                <div class="widget">
                    <h5>Layanan</h5>
                    <ul>
                        <li><a href="<?php echo getUrl('microcredential'); ?>">Micro-credential</a></li>
                        <li><a href="<?php echo getUrl('certification'); ?>">Sertifikasi</a></li>
                        <li><a href="<?php echo getUrl('training'); ?>">Pelatihan</a></li>
                        <li><a href="<?php echo getUrl('workshop'); ?>">Workshop</a></li>
                    </ul>
                    <h5>Tautan</h5>
                    <ul>
                        <li><a href="//ifik.telkomuniversity.ac.id" target="_blank">Mainsite IFIK</a></li>
                        <li><a href="<?php echo getUrl('about'); ?>">Tentang CoE</a></li>
                        <li><a href="<?php echo getUrl('terms'); ?>">Ketentuan Layanan</a></li>
                        <li><a href="<?php echo getUrl('policy'); ?>">Kebijakan Privasi</a></li>
                        <li><a href="<?php echo getUrl('verification'); ?>">Verifikasi Kredensial</a></li>
                        <li><a href="<?php echo getUrl('help'); ?>">Pusat Bantuan</a></li>
                    </ul>
                </div>

                <!-- ## -->

                <div class="widget">
                    <div class="maps cover-wrap">
                        <img src="/assets/img/placeholder/map.jpg">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.262193254968!2d107.6312093!3d-6.9720495!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e86a36d0c5fd%3A0x9cc4b5049d237746!2sSchool%20of%20Creative%20Industries%20Telkom%20University!5e0!3m2!1sen!2sid!4v1706030050609!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    </div>
                    <div class="flex gap-24 mt-24">
                        <a href="#" class="btn btn-outline btn-dark btn-icon btn-square btn-pill" target="_blank"><span class="fab fa-facebook"></span></a>
                        <a href="#" class="btn btn-outline btn-dark btn-icon btn-square btn-pill" target="_blank"><span class="fab fa-instagram"></span></a>
                        <a href="#" class="btn btn-outline btn-dark btn-icon btn-square btn-pill" target="_blank"><span class="fab fa-whatsapp"></span></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include(getPart() . 'footer-copyname.php'); ?>

    <!-- BODY JS -->
    <script src="/assets/js/magia.min.js"></script>
    <script src="/assets/js/template.min.js"></script>

</body>

</html>