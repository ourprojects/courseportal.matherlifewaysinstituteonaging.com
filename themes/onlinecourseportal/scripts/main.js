jQuery(document).ready(function() {

  jQuery(".change-slide").click(function(){
		var newslide="#slide-"+jQuery(this).attr("rel");
		jQuery(".slide").hide();
		jQuery(newslide).show();
	});

});


