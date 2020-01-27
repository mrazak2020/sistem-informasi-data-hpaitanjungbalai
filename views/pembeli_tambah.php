<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pembeli</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
								<input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="No HP">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-3">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="tgl_pembelian" class="col-sm-3 control-label">Tgl.Pembelian</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pembelian" class="form-control" id="inputEmail3" placeholder="Tgl.Pembelian">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="total_belanja" class="col-sm-3 control-label">Total Belanja</label>
                            <div class="col-sm-9">
                                <input type="text" name="total_belanja" class="form-control" id="inputEmail3" placeholder="Total Belanja">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="golongan" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="status" class="form-control">
                                    <option value="-">-</option>
                                    <option value="Anggota HPAI">Anggota HPAI</option>
                                    <option value="Tidak Anggota">Tidak Anggota</option>
                                
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pembeli&actions=tampil" class="btn btn-success btn-sm">
                        Kembali Ke Data Pembeli
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nama=$_POST['nama'];
	$no_hp=$_POST['no_hp'];
	$alamat=$_POST['alamat'];
    $tgl_pembelian=$_POST['tgl_pembelian'];
    $total_belanja=$_POST['total_belanja'];
    $status=$_POST['status'];
    //buat sql
    $sql="INSERT INTO tbl_pembeli VALUES ('','$nama','$no_hp','$alamat','$tgl_pembelian','$total_belanja','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=pembeli&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
