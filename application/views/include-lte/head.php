<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title><?= $this->session->userdata('nama_perusahaan'); ?></title>
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/apps/icon/icon.png">

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?= base_url('assets/css/default/app.min.css" rel="stylesheet'); ?>" />
	<link href="<?= base_url('assets/plugins/bootstrap-social/bootstrap-social.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/plugins/simple-line-icons/css/simple-line-icons.css'); ?>" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?= base_url('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet'); ?>" />

	<!-- v1 -->
	<link href="<?= base_url('assets/plugins/jvectormap-next/jquery-jvectormap.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/plugins/gritter/css/jquery.gritter.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/plugins/select2/dist/css/select2.min.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" />

	<script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

	<!-- ================== END PAGE LEVEL STYLE ================== -->
</head>

<body>
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">