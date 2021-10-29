<?php
//Move the excerpt after price
//Mover el extracto después del precio
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 6 );

remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
add_action( 'woocommerce_after_main_content', 'woocommerce_taxonomy_archive_description', 10 );