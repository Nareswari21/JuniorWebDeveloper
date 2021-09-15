<?php
    ob_start(); // merefresh session pada halaman tersebut
    session_start(); // merefresh session pada halaman tersebut
    $berkas = "data/data2.json";
    $dataJson = file_get_contents($berkas);
    $sertifikasiAll = json_decode($dataJson, true);

    //Array 
    $skemaSertifikasi = array("Pilih Skema", "Junior Web Developer", "Junior Mobile Developer", "Junior Office Operator", "Junior Network Administrator", "Junior Graphic Designer", "Intermediate Animator");
    $jadwalSertifikasi = array("Jadwal Uji Kompetensi", "5 Agustus 2021", "6 Agustus 2021", "7 Agustus 2021", "8 Agustus 2021", "9 Agustus 2021", "10 Agustus 2021");
    $jenisKelamin = array("Jenis Kelamin", "Laki-Laki", "Perempuan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style-form.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="multistep-container">
                    <div class="multistep-form-area">
                        <div class="form-box">
                            <h4>Pendaftaran Sertifikasi</h4>
                            <!-- pendaftaran sertifikasi -->
                            <!-- enctype= "multipart/form-data" digunakan untuk mengupload file dalam form -->
                            <form action="daftarsertifikasi.php" method="post" enctype="multipart/form-data"> 
                                <div class="form-group">
                                    <label for="">Skema</label>
                                    <select name="skema" class="custom-select myinput">
                                        <!-- Perulangan untuk menampilkan skema sertifikasi -->
                                        <?php
                                        foreach ($skemaSertifikasi as $ss) {
                                            echo "<option value='" . $ss . "'>" . $ss . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jadwal Uji Kompetensi</label>
                                    <select name="jadwal" class="custom-select myinput">
                                    <!-- Perulangan untuk menampilkan jadwal sertifikasi -->
                                        <?php
                                        foreach ($jadwalSertifikasi as $js) {
                                            echo "<option value='" . $js . "'>" . $js . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">NIK</label>
                                    <input type="text" name="nik" placeholder="Nomor Induk Kependudukan" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="kelamin" class="custom-select myinput">
                                        <!-- Perulangan untuk menampilkan Jenis kelamin -->
                                        <?php
                                        foreach ($jenisKelamin as $jk) {
                                            echo "<option value='" . $jk . "'>" . $jk . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tanggallahir" placeholder="D. O. B." class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" placeholder="Alamat Lengkap Domisili" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">No Telepon</label>
                                    <input type="text" name="notelp" placeholder="No Telepon" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" placeholder="Email" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label>Ijazah</label>
                                    <input type="file" name="uploadfile" class="form-control" />
                                </div>

                                <div class="button-row">
                                    <input type="submit" value="Submit" class="submit" name="submit">
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['submit'])) {
                                // ambil data file
                                $namaFile = $_FILES['uploadfile']['name'];
                                $namaSementara = $_FILES['uploadfile']['tmp_name'];

                                // tentukan lokasi file akan dipindahkan
                                $dirUpload = "uploadan/";

                                // pindahkan file
                                $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

                                if ($terupload) {
                                    header("location: index.php");
                                    // echo "Link: <a href='" . $dirUpload . $namaFile . "'>" . $namaFile . "</a>";
                                } else {
                                    echo "Upload Gagal!";
                                }

                                $skema = $_POST['skema'];
                                $jadwal = $_POST['jadwal'];
                                $nik = $_POST['nik'];
                                $nama = $_POST['nama'];
                                $kelamin = $_POST['kelamin'];
                                $tanggallahir = $_POST['tanggallahir'];
                                $alamat = $_POST['alamat'];
                                $notelp = $_POST['notelp'];
                                $email = $_POST['email'];
                                $uploadfile = $dirUpload . $namaFile;
                                

                                $sertifikasi = [$skema, $jadwal, $nik, $nama, $kelamin, $tanggallahir, $alamat, $notelp, $email, $uploadfile];  //Menampung inputan kedalam Array sementara
                                array_push($sertifikasiAll, $sertifikasi);    //Memasukan Array baru kedalam Array Daftar sertifikasi
                                array_multisort($sertifikasiAll, SORT_ASC);   //Mengurutkan Daftar sertifikasi sesuai Abjad dari yang terkecil
                                $dataJson = json_encode($sertifikasiAll, JSON_PRETTY_PRINT); // mengubah format data Array menjadi JSON. //JSON_PRETTY_PRINT berfungsi untuk membuat tampilan data JSON hasil encode menjadi rapi dan lebih mudah untuk dibaca
                                file_put_contents($berkas, $dataJson); #digunakan untuk menuliskan teks ke file
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>