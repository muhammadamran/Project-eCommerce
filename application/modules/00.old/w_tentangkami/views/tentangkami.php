<?php echo $this->session->flashdata('notif_kritiksaran')?>
<div class="ht__bradcaump__area" style="background-color: #868e96;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title">Tentang Kami</h2>
					<nav class="bradcaump-content">
						<a class="breadcrumb_item" href="<?php echo base_url()."w_home"; ?>">Home</a>
						<span class="brd-separetor">/</span>
						<span class="breadcrumb_item active">Tentang Kami</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="wn_contact_area bg--white pt--80 pb--80">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="contact-form-wrap">
					<h2 class="contact__title">Kritik & Saran</h2>
					<form action="w_tentangkami/create" method="post">
						<div class="single-contact-form space-between">
							<input type="text" name="nama_depan" placeholder="Nama Depan*">
							<input type="text" name="nama_belakang" placeholder="Nama Belakang*">
						</div>
						<div class="single-contact-form space-between">
							<input type="email" name="email" placeholder="Email*">
						</div>
						<div class="single-contact-form">
							<input type="text" name="subject" placeholder="Subjek*">
							<input type="hidden" name="created_at" value="<?php echo date('Y-m-d h:m:i') ?>">
						</div>
						<div class="single-contact-form message">
							<textarea name="pesan" placeholder="Tulis kritik dan saran anda disini.."></textarea>
						</div>
						<div class="contact-btn">
							<button type="submit">Kirim</button>
						</div>
					</form>
				</div> 
				<div class="form-output">
					<p class="form-messege">
				</div>
			</div>
			<div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
				<div class="wn__address">
					<h2 class="contact__title">Informasi Kami</h2>
					<p><?php echo $data->slogan;?> </p>
					<div class="wn__addres__wreapper">
						<div class="single__address">
							<i class="icon-phone icons"></i>
							<div class="content">
								<span>Telepon:</span>
								<p><?php echo $data->no_telpon;?></p>
							</div>
						</div>
						<div class="single__address">
							<i class="icon-envelope icons"></i>
							<div class="content">
								<span>Email:</span>
								<p><?php echo $data->email;?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>