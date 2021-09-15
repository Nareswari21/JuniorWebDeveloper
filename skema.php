<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Lembaga Sertifikasi Profesi</title>
        <link rel="stylesheet" href="assets/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.php"><img src="assets/image/bpptik.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="visiMisi.php">Tentang</a></li>
                        <li><a href="skema.php">Skema Sertifikasi</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>

            <div class="text-box">
                <h1>Lembaga Sertifikasi Profesi BPPTIK</h1>
                <p>LSP BPPTIK adalah lembaga pendukung BNSP yang  bertanggung jawab untuk melaksanakan <br> uji kompetensi dan sertifikasi kompetensi di bidang TIK</p>
                <a href="daftarsertifikasi.php" class="hero-btn">Pendaftaran Sertifikasi</a>
            </div>
        </section>

        <section class="skema">
            <h1>Daftar Skema Sertifikasi </h1>
            <!-- <p>Lorem ipsum wehf bksd  sdfj sdjf jsdhfjsdgfjsdjfgisdh</p> -->
            
            <div class="row">
                <div class="skema-col">
                    <img src="assets/image/website.png">
                    <div class="layer">
                        <h3>Junior Web Developer</h3>
                    </div>
                </div>
                <div class="skema-col">
                    <img src="assets/image/graphic.png">
                    <div class="layer">
                        <h3>Junior Graphic Designer</h3>
                    </div>
                </div>
                <div class="skema-col">
                    <img src="assets/image/mobile.png">
                    <div class="layer">
                        <h3>Junior Mobile Developer</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="skema-col">
                    <img src="assets/image/office.png">
                    <div class="layer">
                        <h3>Junior Office Operator</h3>
                    </div>
                </div>
                <div class="skema-col">
                    <img src="assets/image/network.png">
                    <div class="layer">
                        <h3>Junior Network Administrator</h3>
                    </div>
                </div>
                <div class="skema-col">
                    <img src="assets/image/animator.png">
                    <div class="layer">
                        <h3>Intermediate Animator</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->

        <section class="cta" id="kontak">
            <h1>Balai Pelatihan dan Pengembangan Teknologi Informasi dan Komunikasi (BPPTIK)</h1>
            <p>Jl. Jalan Sekolah Hijau Kav. 2 Jababeka, Cikarang Utara, Kabupaten Bekasi 17530 <br> Latitude, Longitude -6.280163, 107.174962</p>
            <a href="mailto:lspbpptik@kominfo.go.id" class="hero-btn">CONTACT US</a>
        </section>

        <!-- footer -->

        <footer>
            <div class="layar-dalam">
                <div class="copyright">&copy; Nareswari Dyah Puspaningrum</div>
            </div>
        </footer>

        <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.right = "0";
            }
            function hideMenu(){
                navLinks.style.right = "-200px"
            }
        </script>
    </body>
</html>