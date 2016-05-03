/*Effet sur les créations*/
$( ".creation_item" ).hover(
function() {
    $( this ).find("p").removeClass( "unhover" ); 
    $( this ).find("p").addClass( "hover" );
}, function() {
    $( this ).find("p").addClass( "unhover" );
    $( this ).find("p").removeClass( "hover" );
});

/*Scroll Link*/
$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top - 50}, speed ); // Go
        return false;
    });
});

/*Effect when section appeared*/
jQuery(document).ready(function() {
	jQuery('#presentation').addClass("hidden2").viewportChecker({
	    classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
});

jQuery(document).ready(function() {
	jQuery('#formation').addClass("hidden2").viewportChecker({
	    classToAdd: 'visible animated bounceInRight', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
});

/*Effect when section appeared*/
jQuery(document).ready(function() {
	jQuery('#creation').addClass("hidden2").viewportChecker({
	    classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
});

jQuery(document).ready(function() {
	jQuery('#download').addClass("hidden2").viewportChecker({
	    classToAdd: 'visible animated bounceInRight', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
});

jQuery(document).ready(function() {
	jQuery('#contact').addClass("hidden2").viewportChecker({
	    classToAdd: 'visible animated bounceInLeft', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
});

jQuery(document).ready(function() {
	jQuery('.profile_picture').addClass("hidden2").viewportChecker({
	    classToAdd: 'visible animated pulse', // Class to add to the elements when they are visible
	    offset: 100    
	   });   
});

