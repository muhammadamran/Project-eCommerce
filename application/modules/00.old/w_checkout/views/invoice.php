<?php echo $this->session->flashdata('notif_kritiksaran')?>
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
							WHERE b.id_user='$sesi_ker'");
$rowinv=mysqli_fetch_assoc($query);

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
							WHERE b.id_user='$sesi_ker'");
$rowinv2=mysqli_fetch_assoc($query);

$aa = $rowinv['jumlah'];
$bb = $rowinv['harga'];
$cc = $rowinv['jumlah'] * $rowinv['harga'];
?>
<div class="ht__bradcaump__area" style="background-color: #868e96;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title">Invoice</h2>
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
						<th>Kode Transaksi</th>
						<th>No.Invoice</th>
						<th>Status Pemesanan</th>
						<th>Lihat</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$query = mysqli_query($con,"SELECT a.kode_transaksi,a.id_produk,a.jumlah,a.size,a.harga,a.catatan,a.status,a.date_add,
											b.id AS idtrans,b.id_transaksi,b.id_user,b.kode_transaksi,b.alamat,b.kodepos,b.status_transaksi,
											c.id_user,c.nama_depan,c.nama_belakang,
											d.id,d.nama_produk,d.harga,d.diskon
											FROM tbl_keranjang a
											JOIN tbl_transaksi b 
											ON a.kode_transaksi=b.id_transaksi 
											JOIN tbl_users c 
											ON c.id_user=b.id_user 
											JOIN tbl_produk d 
											ON a.id_produk=d.id 
											WHERE b.id_user='$sesi_ker' GROUP BY b.kode_transaksi");

				if(mysqli_num_rows($query)>0){
					while($rowinv1 = mysqli_fetch_array($query))
					{
					$a = $rowinv1['jumlah'];
					$b = $rowinv1['harga'];
					$c = $a * $b;
				?>
					<tr>
						<td><?= $rowinv1['id_transaksi']; ?></td>
						<td><?= $rowinv1['kode_transaksi']; ?></td>
						<td>
							<?php if($rowinv1['status_transaksi']=1){?>
								<strong>Silahkan lakukan pembayaran klik"INVOICE" dan konfrimasi via <i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapps</strong><p>Note: Sertakan bukti transfer</p>
							<?php }elseif($rowinv1['status_transaksi']=2){ ?>
								<h5>Pemesanan Sedang Diproses oleh SERAGAMPOS</h5>
							<?php }elseif($rowinv1['status_transaksi']=3){ ?>
								<h5>Pemesanan Dibatalkan oleh SERAGAMPOS</h5>
							<?php }elseif($rowinv1['status_transaksi']=4){ ?>
								<h5>Pemesanan Sedang Dikirim oleh SERAGAMPOS</h5>
							<?php }elseif($rowinv1['status_transaksi']=5){ ?>
								<h5>Selesai</h5>
							<?php } ?>
						</td>
						<td><a class="btn-inv" href="<?= base_url('w_checkout/indexdinvoice?id=')?><?=$rowinv1['idtrans'];?>" target="_blank">Invoice</a></td>
					</tr>
				<?php } } mysqli_close($con); ?>
				</tbody>
			</table>
		</div>
	</div>
</section>