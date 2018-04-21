<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Korbrimob Polri">
	<link rel="shortcut icon" href="<?= base_url('assets/img/logo/icon.png') ?>">

	<title>Korbrimob Polri | Jiwa Ragaku Demi Kemanusiaan</title>

	<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

	<?php

	$multiple_css = array(
		'backend/css/bootstrap.min.css', 
		'backend/css/core.css',
		'backend/css/icons.css',
		'backend/plugins/bootstrap-datepicker/css/datepicker.css',
		'backend/plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css',
		'backend/css/components.css',
		'backend/css/pages.css',
		'backend/css/menu.css',
		'backend/css/responsive.css',
		'backend/css/custom.css',
		'backend/plugins/sweetalert/dist/sweetalert.css',
		'backend/plugins/datatables/jquery.dataTables.min.css',
		'backend/font-awesome/css/font-awesome.css',
		'backend/fontawesome-iconpicker/css/fontawesome-iconpicker.css',
		'backend/plugins/bs-select/select2.css',
		'backend/plugins/bs-select/select2.bootstrap.css',
		'backend/plugins/modal-effect/css/component.css',
		'backend/plugins/timepicker/bootstrap-timepicker.min.css',
		'backend/plugins/notifyjs/dist/notify.css'
		);

	echo load_css($multiple_css); 

	$multiple_js = array(
		'backend/js/modernizr.min.js',
		'backend/js/jquery.min.js'
		);

	if (isset($other_css)) {
		echo load_css($other_css); 
	}

	echo load_js($multiple_js);

	if (isset($other_js_top)) {
		echo load_js($other_js_top); 
	}
	
	?>
	<script type="text/javascript">
		var BASEURL = '<?php echo base_url() ?>';
	</script>
</head>

<body class="fixed-left">
	
	<div id="wrapper">

		<?= $this->load->view('backend/header','',TRUE) ?>

		<?= $this->load->view('backend/sidebar','',TRUE) ?>
		<div class="content-page">
			<div class="content">				

				<?php echo $this->load->view($content,'',TRUE) ?>

			</div>
		</div>
		
	</div>

	<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog" id="modalSize">
			<div class="modal-content" id="loadContent">

			</div>
		</div>
	</div>

	<?php

	$multiple_js = array(
		'backend/js/modernizr.min.js',
		// 'backend/js/jquery.min.js',
		'backend/plugins/bootstrap-datetimepicker/js/moment.js',
		'backend/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
		'backend/js/jquery.ajax-cross-origin.min.js',
		'backend/js/bootstrap.min.js',
		'backend/js/fastclick.js',
		'backend/js/detect.js',
		'backend/js/jquery.slimscroll.js',
		'backend/js/jquery.blockUI.js',
		'backend/js/waves.js',
		'backend/js/wow.min.js',
		'backend/js/jquery.nicescroll.js',
		'backend/js/jquery.scrollTo.min.js',
		'backend/js/jquery.app.js',
		// 'backend/pages/jquery.dashboard.js',
		'backend/plugins/datatables/jquery.dataTables.min.js',
		'backend/plugins/datatables/dataTables.bootstrap.js',
		'backend/plugins/datatables/jquery.reloadAjax.js',		
		'backend/plugins/bs-select/select2.js',
		'backend/js/custom.js',
		'backend/plugins/modal-effect/js/classie.js',
		'backend/plugins/modal-effect/js/modalEffects.js',
		'backend/fontawesome-iconpicker/js/fontawesome-iconpicker.js',
		'backend/plugins/sweetalert/dist/sweetalert.min.js',
		'backend/plugins/sweetalert/dist/sweet-alert.init.js',
		'backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
		'backend/plugins/timepicker/bootstrap-timepicker.min.js',
		'backend/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js',
		'backend/plugins/ckeditor/ckeditor.js',
		'backend/plugins/notifyjs/dist/notify.js'
		);

	echo load_js($multiple_js);

	if (isset($other_js)) {
		echo load_js($other_js); 
	}

	?>

	<footer class="footer" style="text-align:right !important;"><?= date('Y') ?> © Korbrimob Polri</footer>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.43/jquery.form-validator.min.js"></script>

	<?= $this->notify->getMessages() ?>

</body>
</html>
