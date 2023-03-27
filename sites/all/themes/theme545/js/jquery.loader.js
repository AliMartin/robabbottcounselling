jQuery(function() {
	jQuery('.views-field-entity-id img').hide();
});
jQuery(window).bind('load', function() {
	jQuery('.views-field-entity-id img:hidden').fadeIn(300);
});