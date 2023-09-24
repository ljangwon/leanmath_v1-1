<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> 학생관리 </title>
	<!-- Bootstrap -->
	<link href="<?= base_url('my/bootstrap-2.3.2/css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
	<style>
		body {
			padding-top: 60px;
		}

		.form_control {
			padding-top: 20px;
		}
	</style>

</head>

<body>
	<?php
	if ($this->session->flashdata('msg')) {
	?>
		<script>
			alert('<?= $this->session->flashdata('msg') ?>');
		</script>
	<?php
	}
	?>