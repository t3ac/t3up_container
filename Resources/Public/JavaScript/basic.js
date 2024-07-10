jQuery(document).ready(function($) {
    
   var buttonbox = 0;	
   
   buttonbox = $('.containerbutton ').width();
   
   buttonboxCont1 = $('.containerbutton.format1 > *').height();  
   buttonboxCont1 = (buttonbox - buttonboxCont1) / 2;
   $('.containerbutton.format1 > *').css("height", buttonbox);
   
      
   buttonboxCont2 = $('.containerbutton.format2 > *').height();  
   buttonboxCont2 = (buttonbox - buttonboxCont2) / 2;
   $('.containerbutton.format2 > *').css("height", buttonbox);
   $('.containerbutton.format2 > *:not(.frame-textmedia)').css("padding-top", buttonboxCont2);

   
   $( window ).on( "resize", function() {
  	   buttonbox = $('.containerbutton ').width();
	   buttonbox = $('.containerbutton ').width();
	   
	   buttonboxCont1 = $('.containerbutton.format1 > *').height();  
	   buttonboxCont1 = (buttonbox - buttonboxCont1) / 2;
	   $('.containerbutton.format1 > *').css("height", buttonbox);
	   
	      
	   buttonboxCont2 = $('.containerbutton.format2 > *').height();  
	   buttonboxCont2 = (buttonbox - buttonboxCont2) / 2;
	   $('.containerbutton.format2 > *').css("height", buttonbox);
	   $('.containerbutton.format2 > *:not(.frame-textmedia)').css("padding-top", buttonboxCont2);	
	} );

});