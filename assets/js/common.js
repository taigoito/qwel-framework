//PageTop
$(function() {
	var topBtn = $('#pageTop');
	topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
	$("#nav").click(function() {
		$(this).toggleClass("active");
		$("#navMenu").slideToggle("normal");
	});
});

//SpTel
$(function(){
	var ua = navigator.userAgent;
	if(ua.indexOf('iPhone') > 0 && ua.indexOf('iPod') == -1 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0 && ua.indexOf('SC-01C') == -1 && ua.indexOf('A1_07') == -1 ){
		$('.tel-link img').each(function(){
			var alt = $(this).attr('alt');
			$(this).wrap($('<a>').attr('href', 'tel:' + alt.replace(/-/g, '')));
		});
	}
});

//スティッキーヘッダー
var $window = $(window),
$content = $("#main"),
topContent = $content.offset().top;
var sticky = false;
$window.scroll(function () {
	if ($window.scrollTop() > topContent) {
		if ( sticky === false ){
			$("#headerChan").slideDown();
			sticky = true;
		}
	} else {
		if ( sticky === true ){
			$("#headerChan").slideUp();
			sticky = false;
		}
	}
});
$window.trigger("scroll");
