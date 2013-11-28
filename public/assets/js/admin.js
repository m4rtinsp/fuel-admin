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
});