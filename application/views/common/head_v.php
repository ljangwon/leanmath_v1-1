<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="generator" content="">
	<title>LeanMath</title>

	<!-- Bootstrap core CSS -->
	<link href="<?= $this->config->item('base_url') ?>
	/my/bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet" />

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		.card {
			font-size: 0.8rem;
		}

		.main-title {
			font-size: 1.2rem;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		/*레이어 팝업 영역*/
		.Pstyle {
			opacity: 0;
			display: none;
			position: relative;
			width: auto;
			border: 5px solid #fff;
			padding: 20px;
			background-color: #fff;
		}

		td {
			text-align: center;
			vertical-align: auto;
		}

		th {
			text-align: center;
			vertical-align: auto;
		}

		tr {
			text-align: center;
			vertical-align: auto;
		}
	</style>


	<!-- Custom styles for this template -->

	<!-- dashboard.css -->
	<link href="<?= $this->config->item('base_url') ?>
	/my/css/bootstrap-5.0.2/dashboard/dashboard.css" rel="stylesheet" />

	<!-- navbar.css -->
	<link href="<?= $this->config->item('base_url') ?>
	/my/css/bootstrap-5.0.2/navbars/navbar.css" rel="stylesheet" />

</head>

<body>

	<!-- bootstrap js core -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<!-- feather.js -->
	<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous defer"></script>

	<!-- common.js -->
	<script src="<?= $this->config->item('base_url') ?>/my/js/common.js" defer></script>