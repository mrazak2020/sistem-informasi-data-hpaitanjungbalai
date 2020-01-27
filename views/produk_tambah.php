<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Produk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode Produk</label>
                            <div class="col-sm-9">
								<input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="Kode Produk">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Produk">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis Produk</label>
                            <div class="col-sm-3">
                                <input type="text" name="jenis" class="form-control" id="inputEmail3" placeholder="Jenis Produk">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Harga">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" class="form-control" id="inputEmail3" placeholder="Keterangan">
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
                    <a href="?page=produk&actions=tampil" class="btn btn-success btn-sm">
                        Kembali Ke Data Produk
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $kode=$_POST['kode'];
	$nama=$_POST['nama'];
	$jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="INSERT INTO tbl_produk VALUES ('','$kode','$nama','$jenis','$harga','$keterangan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=produk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
