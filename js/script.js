$(document).ready(function() {
	$('[data-toggle="popover"]').popover({});

	$('.pic_small').on('click', function(){
		var image = $(this).parent().find('.pic_big');
		var has_class = !image.hasClass('add_width');
		$('.layout4').find('.add_width').removeClass('add_width');
		if (has_class){
			image.addClass('add_width');
		} else {
			image.removeClass('add_width');
		}
		
	});
});