// DOM Ready
$(function() {

	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		for (var i = 0; i < imgs.length; i++) {
			if (/.*\.svg$/.test(imgs[i].src)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
			}
		}
	}

});


//SPLIT MENU FUNCTION
function split_menu(link,logo,alt){
	var navItems = jQuery('.nav ul li').not('.sub-menu li').length;

	if (navItems % 2 === 0) {

			var split = navItems / 2;

		} else {

			var split = (navItems - 1) / 2;
		}

		jQuery('.nav ul li').not('.sub-menu li').each(function (i) {
				if(i+1 == split){
					
				jQuery(this).after('<li class="split_logo" ><a href="'+ link +'"><img src="'+logo+'" alt="'+ alt +'" class="logo-img"></a></li>');


				}			  

		});

	 }
