<?php
$con=mysqli_connect("localhost","root","","db_seragampos");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($con,"SELECT * FROM tbl_perusahaan");
$perusahaan=mysqli_fetch_assoc($query);

$sesi_ker = $this->session->userdata("id_user");
$query = mysqli_query($con,"SELECT a.kode_transaksi,a.id_produk,a.jumlah,a.size,a.harga,a.catatan,a.status,a.date_add,
							b.id_transaksi,b.id_user,b.kode_transaksi,b.alamat,b.kodepos,
							c.id_user,c.nama_depan,c.nama_belakang,
							d.id,d.nama_produk,d.harga,d.diskon
							FROM tbl_keranjang a
							JOIN tbl_transaksi b 
							ON a.kode_transaksi=b.id_transaksi 
							JOIN tbl_users c 
							ON c.id_user=b.id_user 
							JOIN tbl_produk d 
							ON a.id_produk=d.id 
							WHERE b.id_user='$sesi_ker' AND b.id=".$_GET['id']."");
$rowinv=mysqli_fetch_assoc($query);

$query = mysqli_query($con,"SELECT a.kode_transaksi,a.id_produk,a.jumlah,a.size,SUM(a.harga) AS ttharga,a.catatan,a.status,a.date_add,
							b.id_transaksi,b.id_user,b.kode_transaksi,b.alamat,b.kodepos,
							c.id_user,c.nama_depan,c.nama_belakang,
							d.id,d.nama_produk,d.harga,d.diskon
							FROM tbl_keranjang a
							JOIN tbl_transaksi b 
							ON a.kode_transaksi=b.id_transaksi 
							JOIN tbl_users c 
							ON c.id_user=b.id_user 
							JOIN tbl_produk d 
							ON a.id_produk=d.id 
							WHERE b.id_user='$sesi_ker' AND b.id=".$_GET['id']." GROUP BY b.kode_transaksi ");
$rowinv2=mysqli_fetch_assoc($query);

$xxa = 5;
$xxb = $rowinv2['ttharga'];
$xxc = $rowinv2['ttharga'] + 5;
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $perusahaan['nama_perusahaan']; ?> | &copy; Offical Website </title>
	<link rel="shortcut icon" href="<?php echo base_url().'assets/img/logo/'.$perusahaan['logo'];?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo base_url('mode/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('mode/css/plugins.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('mode/style.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('mode/css/custom.css');?>">
	<script src="<?php echo base_url('mode/js/vendor/modernizr-3.5.0.min.js');?>"></script>
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
</head>
<style>
/* PRELOADER */
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background-color: #fff;
}
.preloader .loading {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}

.logo-inv {
	height: auto;
	padding: 5px 5px 5px 5px;
  position: relative;
}

.upper { 
  text-transform: uppercase; 
}
</style>
<?php
function buatRupiah($angka){
	$hasil = "Rp. " . number_format($angka);
	return $hasil;
}
?>
<body id="WAButton">
	<div class="wrapper" id="wrapper">
        <section class="wn_contact_area bg--white pt--80 pb--80">
            <div class="container">	
                <div class="row">
                    <table>
                        <thead>
                            <tr>
                                <th>No.Invoice : <?= $rowinv['kode_transaksi']; ?></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Nama Pemesan : <?= $rowinv['nama_depan']; ?> <?= $rowinv['nama_belakang']; ?></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Alamat : <?= $rowinv['alamat']; ?></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Kodepos : <?= $rowinv['kodepos']; ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <br>
                <div class="row">
                    <div class="col-4" style="background-color: #868e9659;">
                        <img src="<?php echo base_url().'assets/img/logo/'.$perusahaan['logo'];?>" class="logo-inv" alt="logo images">
                    </div>
                    <div class="col-8">
                        <br>
                        <p><font style="color: #868e96;">Silahkan klik </font>"<b><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</b>" <font style="color: #868e96;">untuk melakukan konfirmasi pembayaran anda.</font> </p>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="row">
                    <div class="col-6">
                        <h3 class="upper">#INVOICE (<?= $rowinv['kode_transaksi']; ?>)</h3>
                    </div>
                    <div class="col-3">
                        <h3 class="upper">Total Bayar</h3>
                    </div>
                    <div class="col-3">
                        <h3 class="upper"> <?= buatRupiah($xxc); ?></h3>
                    </div>
                </div>
                <br>
                <div class="row">
                    <table>
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga Satuan</th>
                                <th>Qty</th>
                                <th>Size</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = mysqli_query($con,"SELECT a.kode_transaksi,a.id_produk,a.jumlah,a.size,a.harga,a.catatan,a.status,a.date_add,
                                                    b.id_transaksi,b.id_user,b.kode_transaksi,b.alamat,b.kodepos,
                                                    c.id_user,c.nama_depan,c.nama_belakang,
                                                    d.id,d.nama_produk,d.harga,d.diskon
                                                    FROM tbl_keranjang a
                                                    JOIN tbl_transaksi b 
                                                    ON a.kode_transaksi=b.id_transaksi 
                                                    JOIN tbl_users c 
                                                    ON c.id_user=b.id_user 
                                                    JOIN tbl_produk d 
                                                    ON a.id_produk=d.id 
                                                    WHERE b.id_user='$sesi_ker' AND b.id=".$_GET['id']."");

                        if(mysqli_num_rows($query)>0){
                            while($rowinv1 = mysqli_fetch_array($query))
                            {
                            $a = $rowinv1['jumlah'];
                            $b = $rowinv1['harga'];
                            $c = $a * $b;
                        ?>
                            <tr>
                                <td><?= $rowinv1['nama_produk']; ?></td>
                                <td><?= buatRupiah($rowinv1['harga']); ?></td>
                                <td><?= $rowinv1['jumlah']; ?></td>
                                <td><?= $rowinv1['size']; ?></td>
                                <td><?= buatRupiah($c); ?></td>
                            </tr>
                        <?php } } mysqli_close($con); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
	</div>
	<script src="<?php echo base_url('mode/js/vendor/jquery-3.2.1.min.js');?>"></script>
	<script src="<?php echo base_url('mode/js/popper.min.js');?>"></script>
	<script src="<?php echo base_url('mode/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('mode/js/plugins.js');?>"></script>
	<script src="<?php echo base_url('mode/js/active.js');?>"></script>
	<!-- PRELOADER -->
	<script>
    window.print();
	</script>
</body>
</html>