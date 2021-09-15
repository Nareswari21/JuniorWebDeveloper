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
        
        <section class="abuabu">
            <div class="row">
                <div class="about-col">
                    <img src="assets/image/matahari.png" />
                    <h3>36 Skema Sertifikasi</h3>
                    <p>Skema / Profesi / Jabatan / Pekerjaan di bidang-bidang strategis sektor Teknologi Informasi dan Komunikasi.</p>
                </div>
                <div class="about-col">
                    <img src="assets/image/tas.png" />
                    <h3>300++ Link DUDI</h3>
                    <p>Perusahaan mitra LSP yang siap untuk menerima profesional bidang IT yang telah tersertifikasi, kompeten dan sesuai bidang keahliannya.</p>
                </div>
                <div class="about-col">
                    <img src="assets/image/kompas.png" />
                    <h3>1000++ SDM Tersertifikasi</h3>
                    <p>Daftar tenaga kerja profesional yang telah tersertifikasi oleh LSP Teknologi Digital. Siap untuk menjawab kebutuhan industri.</p>
                </div>
            </div>
        </section>

        <section class="skema">
            <h1>Daftar Skema Sertifikasi </h1>
            
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
            <a href="skema.php" class="hero-btnblack">Lainnya</a>
        </section>

        <section class="news" id="blog">
            <div class="layar-dalam">
                <h1>Blog</h1>
                <div class="blog">
                    <div class="area">
                        <div class="gambar" style="background-image: url('assets/image/blog/polakonsumsi.jpg')"></div>
                        <div class="text">
                            <article>
                                <h4><a href="https://bpptik.kominfo.go.id/2021/07/23/9088/pola-konsumsi-masyarakat-dalam-mengakses-berita-saat-pandemi/">Pola Konsumsi Masyarakat Dalam Mengakses Berita Saat Pandemi</a></h4>
                                <p>
                                    Pandemi Covid-19 yang melanda dunia dan khususnya Indonesia [..]
                                </p>
                            </article>
                        </div>
                    </div>
                    <div class="area">
                        <div class="gambar" style="background-image: url('assets/image/blog/doxxing.jpg')"></div>
                        <div class="text">
                        <article>
                            <h4><a href="https://bpptik.kominfo.go.id/2021/06/21/8958/apa-itu-doxxing-dan-dampaknya-pada-privasi-online/">Apa itu Doxxing dan Dampaknya pada Privasi Online</a></h4>
                            <p>
                                Apa kalian pernah mendengar istilah doxxing? Istilah ini mulai diperbincangkan kembali  [..]
                            </p>
                        </article>
                        </div>
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