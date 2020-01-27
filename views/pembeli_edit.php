<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_pembeli WHERE id_pembeli ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pembeli</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
    
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>"class="form-control" id="inputEmail3" placeholder="No HP" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_pembelian" class="col-sm-3 control-label">Tgl.Pembelian</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pembelian" value="<?=$data['tgl_pembelian']?>"class="form-control" id="inputEmail3" placeholder="Tgl.Pembelian">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="total_belanja" class="col-sm-3 control-label">Total Belanja</label>
                            <div class="col-sm-9">
                                <input type="text" name="total_belanja" value="<?=$data['total_belanja']?>"class="form-control" id="inputEmail3" placeholder="Total Belanja">
                            </div>
                        </div>

                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                
                        <!--end tanggal lahir-->           

                        <!--Status-->
                    
                        <!--Akhir Status-->
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" value="<?=$data['status']?>" class="form-control" id="inputEmail3" placeholder="Status">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pembeli</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=pembeli&actions=tampil" class="btn btn-danger btn-sm">
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
    $sql="UPDATE tbl_pembeli SET nama='$nama',no_hp='$no_hp',alamat='$alamat',tgl_pembelian='$tgl_pembelian',total_belanja='$total_belanja',status='$status' WHERE id_pembeli ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=pembeli&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



