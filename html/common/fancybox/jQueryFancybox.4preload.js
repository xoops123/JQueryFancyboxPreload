jQuery(document).ready(function() {
  jQuery("#d3f_post_form_quick_div").css("display","none");
	jQuery('a[href$=".jpg"]').addClass("fancybox");
	jQuery("a.fancybox").fancybox({
		'overlayColor': '#000',
		'overlayOpacity': 0.3,
		'cyclic': true ,
	  'transitionIn'  : 'elastic',
	  'transitionOut' : 'elastic',
	  'easingIn'      : 'easeOutBack',
	  'easingOut'     : 'easeInBack',
		'speedIn': 900 ,
		'speedOut': 600 ,
		'hideOnOverlayClick': false
	});
	jQuery("a.iframe").fancybox({
    'width': '80%',
		'height': '80%',
    'autoScale': false,
		'transitionIn': 'none',
		'transitionOut': 'none',
		'type': 'iframe'
	});
});
