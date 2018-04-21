<!DOCTYPE html>
<html>
<head>

	<?php
	if (isset($title)) {
		$title = $title." - Mitra Yuk | Solusi Berbisnis masa kini";
	}else{
		$title = "Mitra Yuk | Solusi Berbisnis masa kini";
	}
	?>

	<title><?= $title ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Situs membantu dan mempermudah pemilik badan usaha dan masyarakat untuk bermitra. Pemilik badan usaha dapat mempromosikan mitra yang dimiliki dan masyarakat  dapat mengetahui informasi mengenai mitra yang dimilikinya.">
	<meta name="author" content="Korps Brimob Polri">

	<link rel="shortcut icon" href="<?= base_url('assets/img/logo/favicon.png') ?>">

	<script type="text/javascript">
		var BASE_URL = "<?= base_url() ?>";
	</script>

	<?php

	if (isset($other_css)) {
		echo load_css($other_css); 
	}

	
	

	$multiple_css = array(
		'frontend/bootstrap/dist/css/bootstrap.css',
		'frontend/css/fonts.css',
		'frontend/css/core.css',
		'frontend/css/components.css',
		'frontend/css/pages/home.css',
		'frontend/material-icons/material-icons.css',
		'frontend/font-awesome/css/font-awesome.min.css',
		'frontend/plugins/sweetalert/dist/sweetalert.css',
		'frontend/plugins/slick/slick.css',
		'frontend/plugins/slick/slick-theme.css'
		);

	echo load_css($multiple_css);

	$multiple_js = array(
		'frontend/js/jquery-3.2.1.slim.min.js',		
		'frontend/bootstrap/dist/js/popper.min.js',
		'frontend/bootstrap/dist/js/bootstrap.min.js',
		'frontend/js/jquery-2.1.3.min.js',
		'frontend/plugins/slick/slick.js',		
		'backend/plugins/sweetalert/dist/sweetalert.min.js'
		);

	echo load_js($multiple_js);

	if (isset($other_js_top)) {
		echo load_js($other_js_top); 
	}

	?>

	<style type="text/css">
		.navbar-form .input-group .form-control:focus{
			border-color: #ccc;
			outline: none;
			box-shadow: none;
		}
		.btn-on-search{
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: 400;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-ms-touch-action: manipulation;
			touch-action: manipulation;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-image: none;
			border: 1px solid transparent;
			border-radius: 4px;
			background: #fff;
			border-color: #ccc;
			border-left: none;
			border-radius: 0;
			border-top-right-radius: 3px;
			border-bottom-right-radius: 3px;
		}
		.form-control:focus{
			box-shadow: none;
			border-color: #1C1C1C;
		}
		.sweet-alert button.confirm{
			background: #1C1C1C !important;
		}
		.box-program:hover .to-white{
			fill: white;
		}
	</style>

</head>
<body>

	<?php

	if(@$header && @$header!="non"){
		echo $this->load->view($header,'',TRUE);
	}
	elseif (@$header=="non") {
		
	}
	else{
		echo $this->load->view('frontend/layout/header','',TRUE);		
	}

	echo $this->load->view($content,'',TRUE);
	
	if(!@$non_footer){
		echo $this->load->view('frontend/layout/footer','',TRUE);
	}
	
	$multiple_js = array(
		
		);
	
	echo load_js($multiple_js);

	if (isset($other_js)) {
		echo load_js($other_js); 
	}

	?>

</body>
</html>