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