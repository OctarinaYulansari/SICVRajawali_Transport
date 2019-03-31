<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Penumpang</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
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
                                <th>ACTIONS</th>
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
                                    <td>
                                        <a href="?page=penumpang&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
										<a href="?page=penumpang&actions=tambah&nope=<?= $data['id'] ?>" class="btn btn-info btn-xs">
											<span class="fa fa-arrow-right"></span>
										</a>
                                        <a href="?page=penumpang&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=penumpang&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Penumpang

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

