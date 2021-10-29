<?php
//Adjust the storefront homepage template layout

function child_theme_homepage_layout() {
    //Remove all prodtucts what I don't want
    remove_action( 'homepage', 'storefront_product_categories', 20 );
    remove_action( 'homepage', 'storefront_recent_products', 30 );
    remove_action( 'homepage', 'storefront_featured_products', 40 );
    remove_action( 'homepage', 'storefront_popular_products', 50 );
    remove_action( 'homepage', 'storefront_on_sale_products', 60 );
    remove_action( 'homepage', 'storefront_best_selling_products', 70 );

    //Add wanted products to show on the hompage
    add_action( 'homepage', 'storefront_best_selling_products', 70 );
}
add_action( 'init', 'child_theme_homepage_layout' );