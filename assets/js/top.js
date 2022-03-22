//Accordion
$(function () {
	$('.nextBtn').prevAll().hide();
	$('.nextBtn').click(function () {
		if ($(this).prevAll().is(':hidden')) {
			$(this).prevAll().slideDown();
			$(this).text('閉じる').addClass('closeBtn');
		} else {
			$(this).prevAll().slideUp();
			$(this).text('続きを読む').removeClass('closeBtn');
		}
	});
});
