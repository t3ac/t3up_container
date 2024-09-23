jQuery(document).ready(function($) {
	$( ".containerbuttons.sq" ).each(function(index, value) { 
		$(this).addClass('var'+index); 
		bbox = $('.containerbuttons.sq.var' + index + '> .containerbutton').width();
		$(this).find('.containerbutton').css("height", bbox);
		$(this).find('.containerbutton > .containerbuttonInnen').css("display","flex");		
		
	   // alert(buttonbox);
			
		$( window ).on( "resize", function() {
			bbox = $('.containerbuttons.sq.var' + index + '> .containerbutton').width();
	   		$('.containerbuttons.sq.var' + index + '>  .containerbutton').css("height", bbox);
		} );  				
	})
});
