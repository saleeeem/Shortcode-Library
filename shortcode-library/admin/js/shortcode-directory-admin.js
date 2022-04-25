
  jQuery(document).ready(function(){
	jQuery(".shortcode-delete"). click(function(){
	  var id = jQuery(this).attr('id');
		var data = {
				'action': 'shortcode_delete',
				'id': id
			};
	
			// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
			jQuery.post(ajaxurl, data, function(response) {
				jQuery('#'+response).parent().parent().remove();
			});
	});
	});