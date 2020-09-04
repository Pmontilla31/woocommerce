jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay: 500,                            
		animation: {opacity:'show',height:'show'},  
		speed: 'fast'                        
	});
});

function pet_animal_store_menu_open() {
	window.pet_animal_store_respMenu=true;
	jQuery(".side-menu").addClass('open');
}
function pet_animal_store_menu_close() {
	window.pet_animal_store_respMenu=false;
	jQuery(".side-menu").removeClass('open');
}

(function( $ ) {
	$(window).scroll(function(){
	  	var sticky = $('.sticky-header'),
      	scroll = $(window).scrollTop();

	  	if (scroll >= 100) sticky.addClass('fixed-header');
	  	else sticky.removeClass('fixed-header');
	});

	// Back to top
	jQuery(document).ready(function () {
	    jQuery(window).scroll(function () {
	      	if (jQuery(this).scrollTop() > 0) {
	          	jQuery('.scrollup').fadeIn();
	      	} else {
	         	jQuery('.scrollup').fadeOut();
	      	}
	    });
	    jQuery('.scrollup').click(function () {
      		jQuery("html, body").animate({
	          	scrollTop: 0
	      	}, 600);
	      	return false;
	    });

	    $(window).load(function() {
			$(".preloader").delay(2000).fadeOut("slow");
		});
	});
})( jQuery );

jQuery(window).load(function() {
	window.pet_animal_store_currentfocus=null;
	pet_animal_store_checkfocusdElement();
	var pet_animal_store_body = document.querySelector('body');
	pet_animal_store_body.addEventListener('keyup', pet_animal_store_check_tab_press);
	var pet_animal_store_gotoHome = false;
	var pet_animal_store_gotoClose = false;
	window.pet_animal_store_respMenu=false;
	function pet_animal_store_checkfocusdElement(){
	    if(window.pet_animal_store_currentfocus=document.activeElement.className){
	        window.pet_animal_store_currentfocus=document.activeElement.className;
	    }
	}
	function pet_animal_store_check_tab_press(e) {
	    "use strict";
	    e = e || event;
	    var activeElement;

	    if(window.innerWidth < 999){
		    if (e.keyCode == 9) {
		        if(window.pet_animal_store_respMenu){
				    if (!e.shiftKey) {
				        if(pet_animal_store_gotoHome) {
				            jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).focus();
				        }
				    }
				    if (jQuery("a.closebtn").is(":focus")) {
				        pet_animal_store_gotoHome = true;
				    } else {
				        pet_animal_store_gotoHome = false;
				    }
		    	}
		    }
	    }
	    if (e.shiftKey && e.keyCode == 9) {
		    if(window.innerWidth < 999){
			    if(window.pet_animal_store_currentfocus=="header-search"){
			        jQuery("button.mobiletoggle").focus();
			    }else{
				    if(window.pet_animal_store_respMenu){
				        if(pet_animal_store_gotoClose){
				        	jQuery("a.closebtn").focus();
				        }
				        if(jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
				            pet_animal_store_gotoClose = true;
				        } else {
				            pet_animal_store_gotoClose = false;
				        }
				    }
			    }
		    }
	    }
	    pet_animal_store_checkfocusdElement();
	}
});