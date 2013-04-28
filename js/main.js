$(document).ready(function() {
	$('.form').validate({
		onKeyup: true,
		eachValidField: function() {
			$(this).removeClass('error').addClass('success');
		},
		eachInvalidField: function() {
			$(this).removeClass('success').addClass('error');
		}
	});
});