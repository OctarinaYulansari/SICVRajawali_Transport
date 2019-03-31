<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Penumpang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Registrasi</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_registrasi" class="form-control" placeholder="RJ-XXXXX" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Plat Bus</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="no_plat" class="form-control">
									<option value="">---</option>
									<option value="BK 1324 RJH">BK 1324 RJH</option>
                                    <option value="BK 4576 BMW">BK 4576 BMW</option>
                                    <option value="BK 2390 VAM">BK 2390 VAM</option>
                                    <option value="BK 1134 VAQ">BK 1134 VAQ</option>
                                    <option value="BK 2245 VAD">BK 2245 VAD</option>
                                    <option value="BK 8923 VAR">BK 8923 VAR</option>
                                    <option value="BK 2534 RTH">BK 2534 RTH</option>
                                    <option value="BK 4756 KKL">BK 4756 KKL</option>
                                    <option value="BK 6723 RAD">BK 6723 RAD</option>
                                    <option value="BK 1423 VAR">BK 1423 VAR</option>
								</select>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-3 control-label">Nama Penumpang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_penumpang" class="form-control" placeholder="Nama Penumpang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tujuan</label>
                            <div class="col-sm-9">
                                <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Berangkat</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal_berangkat" class="form-control" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Harga Rp.</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" placeholder="Harga Tiket" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status Pembayaran</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status_pembayaran" class="form-control">
									<option value="">---</option>
									<option value="Lunas">Lunas</option>
									<option value="Bayar Ditempat">Bayar Ditempat</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> SIMPAN</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penumpang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penumpang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $no_res=$_POST['no_registrasi'];
	$no_plat=$_POST['no_plat'];
	$nama_penumpang=$_POST['nama_penumpang'];
	$tujuan=$_POST['tujuan'];
    $tanggal_berangkat=$_POST['tanggal_berangkat'];
    $harga=$_POST['harga'];
    $status=$_POST['status_pembayaran'];
    //buat sql
    $sql="INSERT INTO penumpang VALUES ('','$no_res','$no_plat','$nama_penumpang','$tujuan','$tanggal_berangkat','$harga','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=penumpang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
