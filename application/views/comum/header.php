<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>MUSIC GEAR</title>
	<link href="<?php echo IMG; ?>icon.png" type="image/x-icon" rel="icon" />
	<link href="<?php echo IMG; ?>icon.png" type="image/x-icon" rel="shortcut icon" />
	<link href="<?php echo ATUAL; ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<link href="<?php echo CSS; ?>bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo CSS; ?>grayscale.css" rel="stylesheet">
	<link href="<?php echo CSS; ?>app.css" rel="stylesheet">
	<script src="<?php echo JS; ?>app/jquery.min.js"></script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" class="body-all" base="<?php echo base_url(); ?>">

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=391249591014381&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<?php $res = $this->session->flashdata('res'); ?>
	<?php if($res != ""){ ?>
	<div id="alert-padrao" class="alert alert-info alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<?php echo $res; ?>
	</div>
	<?php } ?>