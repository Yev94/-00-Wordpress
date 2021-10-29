<?php
/**
 * Changed footer with new copyright format
 * 
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>
    <div class="whatsappDiv right">
	    <a href="https://wa.me/+34661865422?text=Hola%20ðŸ˜„" class="tiklaAc"></a>
    </div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

    <?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->
<div class="site-info">
        Â© <?php echo get_the_date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . '. Todos los derechos reservados'; ?>
    </div><!-- .site-info -->

<?php wp_footer(); ?>

</body>
</html>