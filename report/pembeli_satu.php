<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pembeli</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_pembeli WHERE id_pembeli='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                       <h2>Sistem Informasi Data BC HPAI Tanjung Balai </h2>
                        <h4>Jalan. Letjen Jamin Ginting</h4>
                        <hr>
                        <h3>DATA PEMBELI</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								
                                <tr>
                                    <td width="300">Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                            
                                <tr>
                                    <td>No HP</td> <td><?= $data['no_hp'] ?></td>
                                </tr>
								<tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
								<tr>
                                    <td>Tgl.Pembelian</td> <td><?= $data['tgl_pembelian'] ?></td>
                                </tr>
								<tr>
                                    <td>Total Belanja</td> <td><?= $data['total_belanja'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td> <td><?= $data['status'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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