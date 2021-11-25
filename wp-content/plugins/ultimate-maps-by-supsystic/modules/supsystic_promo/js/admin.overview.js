<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
jQuery(document).ready(function(){
	jQuery('#form-settings').submit(function(){
		jQuery(this).sendFormUms({
			btn: jQuery(this).find('.button-primary')
		,	onSuccess: function(res) {
				if(!res.error) {
					jQuery('#form-settings').slideUp();
					jQuery('#form-settings-send-msg').slideDown();
				}
			}
		});
		return false;
	});
	jQuery('.supsystic-overview-news-content').slimScroll({
		height: '500px'
	,	railVisible: true
	,	alwaysVisible: true
	,	allowPageScroll: true
	});
	jQuery('.faq-title').click(function(){
		var descBlock = jQuery(this).find('.description:first');
		if(descBlock.is(':visible')) {
			descBlock.slideUp( g_umsAnimationSpeed );
		} else {
			jQuery('.faq-title .description').slideUp( g_umsAnimationSpeed );
			descBlock.slideDown( g_umsAnimationSpeed );
		}
	});
<<<<<<< HEAD
=======
=======
jQuery(document).ready(function(){
	jQuery('#form-settings').submit(function(){
		jQuery(this).sendFormUms({
			btn: jQuery(this).find('.button-primary')
		,	onSuccess: function(res) {
				if(!res.error) {
					jQuery('#form-settings').slideUp();
					jQuery('#form-settings-send-msg').slideDown();
				}
			}
		});
		return false;
	});
	jQuery('.supsystic-overview-news-content').slimScroll({
		height: '500px'
	,	railVisible: true
	,	alwaysVisible: true
	,	allowPageScroll: true
	});
	jQuery('.faq-title').click(function(){
		var descBlock = jQuery(this).find('.description:first');
		if(descBlock.is(':visible')) {
			descBlock.slideUp( g_umsAnimationSpeed );
		} else {
			jQuery('.faq-title .description').slideUp( g_umsAnimationSpeed );
			descBlock.slideDown( g_umsAnimationSpeed );
		}
	});
>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
});