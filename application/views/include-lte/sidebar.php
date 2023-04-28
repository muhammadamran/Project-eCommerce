<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
	<div data-scrollbar="true" data-height="100%">
		<ul class="nav">
			<li class="nav-profile <?php echo $this->uri->segment(1) == "profil" ? "active" : ""; ?>">
				<a href="javascript:;" data-toggle="nav-profile">
					<div class="cover with-shadow"></div>
					<div class="image">
					<?php if(file_exists('assets/img/user/'.$this->session->userdata('image')) && $this->session->userdata('image') != NULL) { ?>
						<img src="<?php echo base_url().'assets/img/user/'. $this->session->userdata('image');?>" alt="" />     
					<?php }else{ ?>
						<img src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image.png" alt=""/>  
					<?php } ?> 
					</div>
					<div class="info">
						<b class="caret pull-right"></b>
						<?php echo $this->session->userdata('username'); ?>
						<small>Email: <?php echo $this->session->userdata('email'); ?></small>
					</div>
				</a>
			</li>
			<li>
				<ul class="nav nav-profile <?php echo $this->uri->segment(1) == "profil" ? "active" : ""; ?>">
					<li class="<?php echo $this->uri->segment(1) == "profil" ? "active" : ""; ?>"><a href="<?php echo base_url('profil'); ?>"><i class="fa fa-cog"></i> Edit Profile</a></li>
				</ul>
			</li>
		</ul>
		<ul class="nav">
			<li class="nav-header">NAVIGASI</li>
			<li class="<?php echo $this->uri->segment(1) == "home" ? "active" : ""; ?> has-sub">
				<a href="<?php echo base_url('home'); ?>">
					<i class="fa fa-th-large"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<li class="<?php echo $this->uri->segment(1) == "produk" ? "active" : ""; ?> has-sub">
				<a href="javascript:;">
					<b class="caret"></b>
					<i class="fas fa-archive"></i>
					<span>Produk</span>
				</a>
				<ul class="sub-menu">
					<li class="<?php echo $this->uri->segment(1) == "produk" ? "active" : ""; ?>"><a href="produk">Produk</a></li>
				</ul>
			</li>

			<li class="<?php echo $this->uri->segment(1) == "pesanan" ? "active" : ""; ?> has-sub">
				<a href="javascript:;">
					<b class="caret"></b>
					<i class="fas fa-paper-plane"></i>
					<span>Pesanan</span>
				</a>
				<ul class="sub-menu">
					<li class="<?php echo $this->uri->segment(1) == "pesanan" ? "active" : ""; ?>"><a href="pesanan">Pesanan</a></li>
				</ul>
			</li>

			<li class="<?php echo $this->uri->segment(1) == "kategori" ? "active" : ""; ?> has-sub">
				<a href="javascript:;">
					<b class="caret"></b>
					<i class="fas fa-list"></i>
					<span>Kategori</span>
				</a>
				<ul class="sub-menu">
					<li class="<?php echo $this->uri->segment(1) == "kategori" ? "active" : ""; ?>"><a href="kategori">Kategori</a></li>
				</ul>
			</li>

			<li class="<?php echo $this->uri->segment(1) == "krisar" ? "active" : ""; ?> has-sub">
				<a href="javascript:;">
					<b class="caret"></b>
					<i class="fas fa-sticky-note"></i>
					<span>Kritik & Saran</span>
				</a>
				<ul class="sub-menu">
					<li class="<?php echo $this->uri->segment(1) == "krisar" ? "active" : ""; ?>"><a href="krisar">Kritik & Saran</a></li>
				</ul>
			</li>

			<li class="nav-header">PENGATURAN</li>
			<li class="<?php echo $this->uri->segment(1) == "banner" ? "active" : ""; ?> has-sub">
				<a href="<?php echo base_url('banner'); ?>">
					<i class="icon-picture"></i>
					<span>Banner</span>
				</a>
			</li>
			<?php if ($this->session->userdata('role') == 'Superadmin') { ?>	
				<li class="<?php echo $this->uri->segment(1) == "perusahaan" ? "active" : ""; ?> has-sub">
					<a href="<?php echo base_url('perusahaan'); ?>">
						<i class="fa fa-building"></i>
						<span>Perusahaan</span>
					</a>
				</li>
				<li class="<?php echo $this->uri->segment(1) == "pengguna" ? "active" : ""; ?>">
					<a href="<?php echo base_url('pengguna'); ?>"><i class="fa fa-users"></i> <span>Pengguna</span></a>
				</li>
			<?php } ?>

			<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
		</ul>
	</div>
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->