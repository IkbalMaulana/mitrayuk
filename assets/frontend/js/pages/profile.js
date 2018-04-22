$(".datepicker").datepicker({});

$(".tab-control").click(function(){
	
	$('#profile').addClass('hidden');
	$('#passwod').addClass('hidden');
	// $('#image').addClass('hidden');

	$('#'+$(this).attr("data-target")).removeClass('hidden');

});