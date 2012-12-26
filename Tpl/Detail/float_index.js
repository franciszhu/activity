$(document).ready(function(){
$(window).scroll(function() {
            var b = $(".index-content-left").position().top;
            var c = $(window).scrollTop();
            b = parseInt(b);
            c = parseInt(c) - 320;
            if ( c> 0) {
				$(".index-content-left").css("margin-top", ( c + 50 ) + "px");
				$(".index-content-left").attr("name", b);
			}
			else {
				$(".index-content-left").css("margin-top", ( 50) + "px");
			}
})
})