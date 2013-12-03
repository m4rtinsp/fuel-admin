$(function(){
	// Confirm message
	$(document).on('click', 'a[rel=confirm]', function(){
		if (!confirm( $(this).attr('data-confirm-message') )) {
			return false;
		}
	});

	// Remove alert message
	$('[data-auto-remove=true]').each(function(){
		var $this = $(this);

		setInterval(function(){
			$this.fadeOut('fast', function(){ $(this).remove() })
		}, 2000);
	});

	// Select All
	$('input[data-select=all]').bind('click', function(){
		console.log($(this).is(':checked'))
		if ($(this).is(':checked')) {
			$('select[name=admin-filter]').removeAttr('disabled');
			$('table.list-items tbody input[type=checkbox]').prop('checked', true);
		}
		else {
			$('select[name=admin-filter]').attr('disabled', 'disabled');
			$('table.list-items tbody input[type=checkbox]').prop('checked', false);
		}
	});
});