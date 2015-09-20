jQuery(document).ready(funtion(){
	$objWindow = $(window);
	$('div[data-type="background"]').each(function(){
		var $bg0bj = $(this);
		$(window).scroll(function()	{
			var yPos = -($objWindow.scrollTop() / $bg0bj.daa('speed'));

			var coords = '100%' + yPos + 'px';
			$bg0bj.css({ backgroundPosition: coords});
		});
	});
});