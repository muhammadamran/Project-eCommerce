<div id="content" class="content">
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Dashboard</a></li>
	</ol>
	<!-- <h1 class="page-header mb-3">&nbsp;</h1> -->
	<div class="d-sm-flex align-items-center mb-3">
		<a href="#" class="btn btn-inverse mr-2 text-truncate" id="daterange-filter">
			<i class="fa fa-calendar fa-fw text-white-transparent-5 ml-n1"></i> 
			<span><?php echo date("d/m/Y"); ?></span>
		</a>
	</div>
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-blue">
				<div class="stats-icon"><i class="fa fa-shopping-cart"></i></div>
				<div class="stats-info">
					<h4>Pesanan</h4>
					<p><?php echo $pesanan[0]->pesanan ?></p>	
				</div>
				<div class="stats-link">
					<a href="pesanan">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-info">
				<div class="stats-icon"><i class="fa fa-desktop"></i></div>
				<div class="stats-info">
					<h4>Produk</h4>
					<p><?php echo $produk[0]->produk ?></p>	
				</div>
				<div class="stats-link">
					<a href="produk">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-orange">
				<div class="stats-icon"><i class="fa fa-eye"></i></div>
				<div class="stats-info">
					<h4>Kritik & Saran</h4>
					<p><?php echo $krisar[0]->krisar ?></p>	
				</div>
				<div class="stats-link">
					<a href="krisar">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-xl-3 col-md-6">
			<div class="widget widget-stats bg-red">
				<div class="stats-icon"><i class="fa fa-users"></i></div>
				<div class="stats-info">
					<h4>Member</h4>
					<p><?php echo $member[0]->member ?></p>	
				</div>
				<div class="stats-link">
					<a href="pengguna">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
	</div>
</div>