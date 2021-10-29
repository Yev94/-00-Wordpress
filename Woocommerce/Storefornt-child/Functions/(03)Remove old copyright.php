<?php
//Remove copyright storefront - To Add new copyright go to footer.php
//Elimina el copyright de storefront - Para anyadir nuevo copyright ir a footer.php
add_action( 'init', 'custom_remove_footer_credit', 10 );

function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
}