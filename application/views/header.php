<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/assets/custom.css">
</head>
<body>
<div id="viewport">
	<!-- Sidebar -->
	<div id="sidebar">
		<header>
			<a href="<?=base_url()?>">CSQUARE ASSIGNMENT</a>
		</header>
		<ul class="nav">
			<li>
				<a href="<?=base_url()?>customer" class="<?=($active=='customer')?'active':''?>">
					<i class="zmdi zmdi-view-dashboard"></i> Customer
				</a>
			</li>
			<li>
				<a href="<?=base_url()?>item" class="<?= ($active=='item')?'active':''?>">
					<i class="zmdi zmdi-link"></i> Item
				</a>
			</li>
			<li>
				<a href="<?=base_url()?>report" class="<?= ($active=='report')?'active':''?>">
					<i class="zmdi zmdi-info-outline"></i> Report
				</a>
			</li>
		</ul>
	</div>


