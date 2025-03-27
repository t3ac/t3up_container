jQuery(document).ready(function($) {
	
	$(".frame-singleaccordion").each(function(){	
        idx = (this.id);
        $( ".idxa" ).remove();

      	$(this).wrapInner('<div id="accordion-'+ idx +'" class="t3up_accordion accordion accordion-flush accordionstyle-1"><div class="accordion-item"></div></div>');     
      	$proove = $(this).find('.accordion-item').children().first();
		if ($proove.is( "a" )) {
        	$proove.remove();
		}
		
      	$(this).find('.accordion-item').children().first().wrap('<div class="accordion-header" id="heading-'+ (idx + 1) +'"></div>')   
      	$(this).find('.accordion-item > .accordion-header').children().first().wrap('<a href="#collapse-' + (idx + 1)+ '" class="accordion-button collapsed justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-' + (idx + 1) +
      	'" data-toggle="collapse" data-target="#collapse-' + (idx + 1) +'" aria-expanded="false" aria-controls="collapse-' + (idx + 1) +'"></a>');
     	$(this).find('.accordion-item > .accordion-header .accordion-button').children().first().removeAttr("class");
      	$(this).find('.accordion-item').children().last().wrap('<div id="collapse-' + (idx + 1) + '" class="accordion-collapse collapse" aria-labelledby="heading-' + (idx + 1) + '"><div class="accordion-body"></div></div>');
      	$(this).css('opacity','1');

	});
        
});