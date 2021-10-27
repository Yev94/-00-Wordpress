
<?php
// Calculates the savings percentage and displays it on the WooCommerce product tabs in the product loop
// Calcula el porcentaje de ahorro y lo muestra en las fichas de producto de WooCommerce en el loop de productos

//Revise style css file to modify the look and feel of the product loop
//Revisar archivo style css para modificar el aspecto en el loop de productos
add_filter( 'woocommerce_sale_flash', 'anadir_etiqueta_de_porcentaje_producto', 20, 3 );
function anadir_etiqueta_de_porcentaje_producto( $html, $post, $product ) {
    if( $product->is_type('variable')){
        $percentages = array();

        // Coge los precios variables
        $prices = $product->get_variation_prices();

        // Muestra el descuento en productos variables
        foreach( $prices['price'] as $key => $price ){
            // Solo en ventas variables
            if( $prices['regular_price'][$key] !== $price ){
                // Calculamos el porcentaje en funcion de la variacion
                $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
            }
        }
        $percentage = max($percentages) . '%';
    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price    = (float) $product->get_sale_price();

        $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
    }
    return '<div class ="mysale"><span class="onsale">' . esc_html__( '-', 'woocommerce' ) . $percentage . '</span></div>';
}