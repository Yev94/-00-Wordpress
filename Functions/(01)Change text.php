<?php
function my_text_strings( $translated_text) {
	switch ( $translated_text ) {
		case 'Seleccionar opciones' :
			$translated_text = __( 'Comprar', 'woocommerce' );
			break;
		case 'Option Total' :
			$translated_text = __( 'Precio de la opción', 'woocommerce' );
			break;
		case 'Quick View' :
			$translated_text = __( 'Vista rápida', 'woocommerce' );
			break;
	}
	return $translated_text;
}
add_filter( 'gettext', 'my_text_strings', 20, 3 );