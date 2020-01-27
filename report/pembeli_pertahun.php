<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pembeli Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                         <h2>Sistem Informasi Data BC HPAI Tanjung Balai </h2>
                        <h4>Jalan. Letjen Jamin Ginting</h4>
                        <hr>
                        <h3>DATA PEMBELI PERTAHUN  <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
                                    <th>No.</th><th><center>Nama</center></th><th><center>No HP</center></th><th><center>Alamat</center></th><th><center>Tgl.Pembelian</center></th><th><center>Total Belanja</center></th><th><center>Status</center></th>
                                </tr>
                                </thead>
                            <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_pembeli WHERE substr(tgl_pembelian,1,4)='$ambilthn'";
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
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['no_hp'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['tgl_pembelian'] ?></td>
                                    <td><?= $data['total_belanja'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            </tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Tanjung Balai  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                         <u>Pemilik BC HPAI<strong></u><br>
                                        Asyura
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>