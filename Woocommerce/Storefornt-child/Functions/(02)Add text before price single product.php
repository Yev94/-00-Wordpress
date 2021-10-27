<?php
//Add text before price single product
//Anyadir txt antes de precio del producto
function custom_price_message( $price ) {
    global $post;
    $product_id = $post->ID;
    $textbefore = 'Desde: '; //text to add - texto que vamos agregar
    return '<span class="textbefore">' . $textbefore . '</span>' .$price; //class text before para el CSS - clase antes del texto para el CSS
    }
    add_filter( 'woocommerce_get_price_html', 'custom_price_message' );