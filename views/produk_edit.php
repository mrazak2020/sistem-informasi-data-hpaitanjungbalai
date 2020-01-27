<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Produk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
    
						<div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" value="<?=$data['kode']?>"class="form-control" id="inputEmail3" placeholder="Kode Produk">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Produk" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" value="<?=$data['jenis']?>"class="form-control" id="inputEmail3" placeholder="Jenis Produk">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>"class="form-control" id="inputEmail3" placeholder="Harga">
                            </div>
                        </div>

                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                
                        <!--end tanggal lahir-->           

                        <!--Status-->
                    
                        <!--Akhir Status-->
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Produk</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=produk&actions=tampil" class="btn btn-danger btn-sm">
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
    $sql="UPDATE tbl_produk SET kode='$kode',nama='$nama',jenis='$jenis',harga='$harga',keterangan='$keterangan' WHERE id_produk ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=produk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



