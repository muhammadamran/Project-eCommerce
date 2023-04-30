<section class="wn__newsletter__area" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?= base_url('assets/apps/subscribe/3.jpeg'); ?>);background-position: center;background-repeat: no-repeat;background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150" style="color:#fff">
				<div class="section__title text-center">
					<h2 style="color:#fff"><?= $web_subscribe_title ?></h2>
				</div>
				<div class="newsletter__block text-center">
					<style>
						#must p {
							color: #fff !important;
						}
					</style>
					<div id="must" style="color:#fff !important"><?= $web_subscribe_paragraph ?></div>
					<form action="<?= base_url('Subscribe/subscribe_add'); ?>" method="POST">
						<div class="newsletter__box">
							<style>
								#Subscribe::placeholder {
									color: #fff;
									opacity: 1;
								}
							</style>
							<input type="email" style="color:#fff" name="Subscribe" id="Subscribe" placeholder="Enter your e-mail" required>
							<input type="hidden" style="color:#fff" name="URL" id="URL" value="<?= $this->uri->segment(1) ?>">
							<textarea hidden class="form-control" name="location" id="mylocation"></textarea>
							<button style="color:#fff">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
	<!-- <div class="footer-static-top" style="background-color: #08c792;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer__widget footer__menu">
						<div class="ft__logo">
							<a href="">
								<img src="<?= base_url('assets/apps/logo/' . $web_logo_2); ?>" class="footer-logo" alt="logo Footer">
							</a>
							<p>Slogan</p>
						</div>
						<div class="footer__content">
							<div align="center">
								<label>....</label>
							</div>
							<ul class="social__net social__net--2 d-flex justify-content-center">
								<li><a href="" target="_blank"><img src="<?= base_url('assets/lte/icon/instagram.png'); ?>" class="gambar-icon"></a></li>
								<li><a href="" target="_blank"><img src="<?= base_url('assets/lte/icon/whatsapp.png'); ?>" class="gambar-icon"></a></li>
								<li><a href="" target="_blank"><img src="<?= base_url('assets/lte/icon/address.png'); ?>" class="gambar-icon"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="copyright__wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="copyright">
						<div class="copy__right__inner text-center">
							<p>Copyright <i class="fa fa-copyright"></i> 2021-<?= date('Y'); ?> <a href="mailto:<?= $web_email ?>" style="color:#0099DA" target="_blank"><?= $web_footer ?> </a>- All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div id="quickview-wrapper">
</div>
</div>
<script src="<?= base_url('assets/website/js/vendor/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/website/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/website/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/website/js/plugins.js'); ?>"></script>
<script src="<?= base_url('assets/website/js/active.js'); ?>"></script>
<script>
	$(document).ready(function() {
		$(".preloader").fadeOut();
	});

	// Location
	var x = document.getElementById("mylocation");
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	} else {
		x.innerHTML = "Geolocation is not supported by this browser.";
	}

	function showPosition(position) {
		x.innerHTML = "Latitude: " + position.coords.latitude + ", Longitude: " + position.coords.longitude;
	}
</script>
</body>

</html>