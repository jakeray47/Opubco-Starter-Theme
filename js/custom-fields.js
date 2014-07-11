jQuery(document).ready(function($) {

//ID of the custom meta box(s)
if(jQuery('#your_id_here').length){

	jQuery('#your_id_here').hide();

	jQuery( '#page_template' ).change(function() {
			
		 if(jQuery(this).val() == 'template-home.php'){

		 	jQuery('#your_id_here').show();

		 } else {

		 	jQuery('#your_id_here').hide();

		 }

	});
	}

});
