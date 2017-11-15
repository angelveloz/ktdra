function menu(){
	console.log(jQuery(window).scrollTop());

	if(jQuery(window).scrollTop() > 10) {

		jQuery('nav').addClass('fondo-blanco');
		jQuery('nav').removeClass('fondo-tranparente');

	} else {

		jQuery('nav').addClass('fondo-tranparente');
		jQuery('nav').removeClass('fondo-blanco');
		
	}

}

jQuery(window).scroll(function() {

	console.log( "Hola" );

	menu();
});

jQuery(document).ready(function(){
	menu();
});