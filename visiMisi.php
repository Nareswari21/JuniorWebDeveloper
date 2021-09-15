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

        <section class="about">
            <h1>LSP BPPTIK</h1>
            <p>LSP BPPTIK didirikan oleh Badan Penelitian dan Pengembangan Sumber Daya Manusia (Balitbang SDM) <br>Kementerian Komunikasi dan Informatika (Kominfo) melalui Surat Keputusan (SK) Kepala Balitbang SDM Nomor 13 Tahun 2018 tanggal 1 Februari 2018 <br> tentang Pembentukan Lembaga Sertifikasi Profesi Pihak Kesatu Balai Pelatihan dan Pengembangan Teknologi Informasi dan Komunikasi.</p>
        </section>
        <section class="sasaran">
            <div class="row">
                <div class="sasaran-col">
                    <img src="assets/image/matahari.png" />
                    <h3>Visi</h3>
                    <p>Menjadi Lembaga Sertifikasi Profesi bidang Teknologi Informasi dan Komunikasi (TIK) terbaik di tingkat nasional, regional , dan internasional</p>
                </div>
                <div class="sasaran-col">
                    <img src="assets/image/tas.png" />
                    <h3>Misi</h3>
                    <p>Melaksanakan sertifikasi kompetensi kerja di bidang TIK yang independen dan profesional <br> Menjamin mutu pelaksanaan sertifikasi kompetensi kerja sesuai dengan standar yang berlaku</p>
                </div>
                <div class="sasaran-col">
                    <img src="assets/image/kompas.png" />
                    <h3>Sasaran Mutu</h3>
                    <p>LSP BPPTIK menetapkan sasaran mutu setiap tahun dengan melakukan pemantauan setiap semester mencakup jumlah pengguna layanan, tingkat kepuasan layanan, jumlah banding, jumlah keluhan serta capaian standar waktu proses sertifikasi</p>
                </div>
            </div>
        </section>

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