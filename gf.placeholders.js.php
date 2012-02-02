<?php

require("../../../wp-load.php");
header("Content-type: text/javascript");

?>
(function($, document, body){

var gf_placeholder = function() {

	$('.gform_wrapper')
		.find('.gplaceholder')
		.find('input[type=text], input[type=password], textarea')
		.each(function(){
			var $field = $(this);

			var id = $field.attr('id');
			var $label = $('label[for=' + id + ']');
			var label = $label.text();

			if (!$label.parents('.gfield_radio').length && !$label.parents('.gfield_checkbox').length)
				$label.hide();

			if (label.length > 0 && label[ label.length-1 ] == '*') {
				label = label.substring(0, label.length-1) + ' *';
			}

			$field.attr('placeholder', label);
		});

	var support = (Modernizr && !Modernizr.input.placeholder) || !( !!('placeholder' in document.createElement('input')) ); // borrowed from Modernizr.com
	if ( support )
		$.getScript('<?php echo plugins_url('/jquery.placeholder-1.0.1.js', __FILE__); ?>', function(){
			$('input[placeholder], textarea[placeholder]').placeholder({
				blankSubmit: true
			});
		});
};

$(document).ready(function(){
	gf_placeholder();
	$(document).bind('gform_page_loaded', gf_placeholder);
});

})(jQuery, document, document.body);