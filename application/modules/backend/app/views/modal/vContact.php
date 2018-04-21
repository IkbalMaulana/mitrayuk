<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h4 class="modal-title">Isi Email</h4>
</div>

<div class="modal-body">

	From: <?= $data->nameContact ?> <<?= $data->emailContact ?>>
	<br/>
	Subject: <?= $data->subjectContact ?>
	<br/>
	<br/>
	Message:
	<br/>
	<?= $data->messageContact ?>
	<br/>
	--
	<br/>
	<br/>
	E-mail ini dikirim dari Contact Us Korps Brimob Polri
	<br/>
	(<?= base_url() ?>)

</div>

<div class="modal-footer">				
	<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
</div>