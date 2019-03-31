<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>CV RAJAWALI CITRA TRANSPORT </h2>
                        <h4>Jl. Jendral Sudirman KM 3, Kel. Pahang, Kec. Datuk Bandar Timur <br> Kota Tanjungbalai - Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA SELURUH PENUMPANG </h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <thead>
                            <tr>
                                <th>No.</th>    
                                <th>No. Registrasi</th>
                                <th>No. Plat Bus</th>
                                <th>Nama Penumpang</th>
                                <th>Tujuan</th>
                                <th>Tanggal Berangkat</th>
                                <th>Harga</th>
                                <th>Status Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM penumpang";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_registrasi'] ?></td>
									<td><?= $data['no_plat'] ?></td>
									<td><?= $data['nama_penumpang'] ?></td>
									<td><?= $data['tujuan'] ?></td>
                                    <td><?= $data['tanggal_berangkat'] ?></td>
                                    <td>Rp. <?= number_format($data['harga']) ?></td>
                                    <td><?= $data['status_pembayaran'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Tanjungbalai  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>A. H. Simangunsong, <strong>
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>