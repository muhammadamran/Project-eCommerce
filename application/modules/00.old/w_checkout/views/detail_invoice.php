<?php
$con=mysqli_connect("localhost","root","","db_seragampos");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sesi_ker = $this->session->userdata("id_user");
// $query = mysqli_query($con,"SELECT a.id AS idtran,a.id_user,a.id_transaksi,a.kode_transaksi AS kdtran,a.alamat,a.alamat_opsi,a.kodepos,a.telepon,a.email,a.tanggal, 
// 								   b.id AS idker,b.kode_transaksi,b.id_user,b.id_produk,b.catatan,b.jumlah,b.harga,b.status,b.size,
// 								   c.id_user,c.nama_depan,c.nama_belakang, 
// 								   d.id,d.nama_produk,d.harga AS hargap 
// 								   FROM tbl_transaksi a 
// 								   JOIN tbl_keranjang b 
// 								   ON a.id_transaksi=b.kode_transaksi 
// 								   JOIN tbl_users c 
// 								   ON c.id_user=a.id_user 
// 								   JOIN tbl_produk d 
// 								   ON d.id=b.id_produk 
// 								   WHERE a.id_user='$sesi_ker'");

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
<div class="ht__bradcaump__area" style="background-color: #868e96;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title">Detail Invoice<br><?= $rowinv['kode_transaksi']; ?></h2>
					<nav class="bradcaump-content">
						<a class="breadcrumb_item" href="<?php echo base_url()."w_home"; ?>">Home</a>
						<span class="brd-separetor">/</span>
						<span class="breadcrumb_item active">Invoice</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <?php ?> -->
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
				<img src="<?php echo base_url().'assets/img/logo/'.$data->logo;?>" class="logo-inv" alt="logo images">
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
		<br>
        <div class="row">
            <a class="btn-inv" href="<?= base_url('w_checkout/indexcinvoice?id=')?><?= $rowinv2['id'];?>" target="_blank">Cetak Invoice</a>
        </div>
	</div>
</section>