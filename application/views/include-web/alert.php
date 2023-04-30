<script src="<?= base_url('assets/website/sweet/sweetalert2.all.js') ?>"></script>
<script src="<?= base_url('assets/website/sweet/sweetalert2.all.min.js') ?>"></script>
<script src="<?= base_url('assets/website/sweet/sweetalert2.js') ?>"></script>
<script src="<?= base_url('assets/website/sweet/sweetalert2.min.js') ?>"></script>
<style>
	.swal2-styled.swal2-confirm {
		border: 0;
		border-radius: 0.25em;
		background: initial;
		background-color: #003369;
		color: #fff;
		font-size: 1.0625em;
	}
</style>
<!-- notif_login_successfully -->
<?php if ($this->session->flashdata('notif_login_successfully')) : ?>
	<script>
		Swal.fire({
			title: 'Success!',
			html: '<font style="font-size: 16px;font-weight: 400;">You have successfully logged in!<br> Welcome <b><?= $this->session->userdata('user_full_name') ?></b> 👋</font>',
			imageUrl: '<?= base_url('assets/apps/alert/success.gif') ?>',
			// icon: 'success',
			// imageWidth: 400,
			imageHeight: 200,
			// imageAlt: 'Custom image',
		});
	</script>
<?php endif; ?>

<!-- notif_login_unsuccessfully -->
<?php if ($this->session->flashdata('notif_login_unsuccessfully')) : ?>
	<script>
		Swal.fire({
			title: 'Failed!',
			html: '<font style="font-size: 16px;font-weight: 400;">You failed to login, please check your <b>Email</b> or <b>Password</b>!</font>',
			imageUrl: '<?= base_url('assets/apps/alert/failed.gif') ?>',
			// icon: 'success',
			// imageWidth: 400,
			imageHeight: 200,
			// imageAlt: 'Custom image',
		});
	</script>
<?php endif; ?>

<!-- notif_logout -->
<?php if ($this->session->flashdata('notif_logout')) : ?>
	<script>
		Swal.fire({
			title: 'Information!',
			html: '<font style="font-size: 16px;font-weight: 400;">You Have Left Our Page Session, Thank You For Visiting Our Page. We are waiting for your return.</font>',
			imageUrl: '<?= base_url('assets/apps/alert/info.gif') ?>',
			// icon: 'success',
			// imageWidth: 400,
			imageHeight: 200,
			// imageAlt: 'Custom image',
		});
	</script>
<?php endif; ?>

<!-- start_session -->
<?php if ($this->session->flashdata('start_session')) : ?>
	<script>
		Swal.fire({
			title: 'Information!',
			html: '<font style="font-size: 16px;font-weight: 400;">You didnt have access!</font>',
			imageUrl: '<?= base_url('assets/apps/alert/info.gif') ?>',
			// icon: 'success',
			// imageWidth: 400,
			imageHeight: 200,
			// imageAlt: 'Custom image',
		});
	</script>
<?php endif; ?>

<!-- SUCCESS -->
<!-- success_alert -->
<?php if ($this->session->flashdata('success_alert')) : ?>
	<script>
		Swal.fire({
			title: 'Success!',
			html: '<font style="font-size: 16px;font-weight: 400;">Data saved successfully! ✔</font>',
			imageUrl: '<?= base_url('assets/apps/alert/success.gif') ?>',
			// icon: 'success',
			// imageWidth: 400,
			imageHeight: 200,
			// imageAlt: 'Custom image',
		});
	</script>
<?php endif; ?>
<!-- unsuccess_alert -->
<?php if ($this->session->flashdata('unsuccess_alert')) : ?>
	<script>
		Swal.fire({
			title: 'Failed!',
			html: '<font style="font-size: 16px;font-weight: 400;">Data saved unsuccessfully! ❌</font>',
			imageUrl: '<?= base_url('assets/apps/alert/failed.gif') ?>',
			// icon: 'success',
			// imageWidth: 400,
			imageHeight: 200,
			// imageAlt: 'Custom image',
		});
	</script>
<?php endif; ?>
<!-- check_file_type -->
<?php if ($this->session->flashdata('check_file_type')) : ?>
	<script>
		Swal.fire({
			title: 'Information!',
			html: '<font style="font-size: 16px;font-weight: 400;">File type must be PNG, JPG, JPEG, GIF or SVG ❗</font>',
			imageUrl: '<?= base_url('assets/apps/alert/info.gif') ?>',
			// icon: 'success',
			// imageWidth: 400,
			imageHeight: 200,
			// imageAlt: 'Custom image',
		});
	</script>
<?php endif; ?>
<!-- subscribe_success -->
<?php if ($this->session->flashdata('subscribe_success')) : ?>
	<script>
		Swal.fire({
			title: 'Information!',
			html: '<font style="font-size: 16px;font-weight: 400;">Thanks for your Subscribe, we will send our update to your email 🌟</font>',
			imageUrl: '<?= base_url('assets/apps/alert/send2.gif') ?>',
			// icon: 'success',
			// imageWidth: 400,
			imageHeight: 200,
			// imageAlt: 'Custom image',
		});
	</script>
<?php endif; ?>