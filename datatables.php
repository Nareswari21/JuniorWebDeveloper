<!DOCTYPE html>
<html>
    <head>
        <title>Data Peserta Sertifikasi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/datatables.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        </section>
        <section class="container">
            <div class="about">
                <h1>Data Peserta Sertifikasi</h1>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Skema Sertifikasi</th>
                        <th>Jadwal Sertifikasi</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Ijazah</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Perulangan untuk menampilkan isi Array Daftar Data Peserta Sertifikasi -->
                    <?php
                        $berkas = "data/data2.json";
                        $dataJson = file_get_contents($berkas);
                        $sertifikasiAll = json_decode($dataJson, true);
                        for($i=0; $i<count($sertifikasiAll); $i++){
                            echo "<tr>";
                            echo "<td>".$sertifikasiAll[$i][0]."</td>";
                            echo "<td>".$sertifikasiAll[$i][1]."</td>";
                            echo "<td>".$sertifikasiAll[$i][2]."</td>";
                            echo "<td>".$sertifikasiAll[$i][3]."</td>";
                            echo "<td>".$sertifikasiAll[$i][4]."</td>";
                            echo "<td>".$sertifikasiAll[$i][5]."</td>";
                            echo "<td>".$sertifikasiAll[$i][6]."</td>";
                            echo "<td>".$sertifikasiAll[$i][7]."</td>";
                            echo "<td>".$sertifikasiAll[$i][8]."</td>";
                            echo "<td>".$sertifikasiAll[$i][9]."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Skema Sertifikasi</th>
                        <th>Jadwal Sertifikasi</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Ijazah</th>
                    </tr>
                </tfoot>
            </table>
        </section>
        
        <footer>
            <div class="layar-dalam">
                <div class="copyright">&copy; Nareswari Dyah Puspaningrum</div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
    </body>
</html>