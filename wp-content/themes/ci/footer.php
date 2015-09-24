<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">

      <div id="footer"> <strong>Congreso Interactivo </strong> 2014 <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.5/ar/"><img alt="Creative Commons License" class="license" src="http://i.creativecommons.org/l/by-nc-sa/2.5/ar/80x15.png"/></a> <a id="twitter" href="http://www.twitter.com/CongresoInterac" xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName" rel="cc:attributionURL">@CongresoInterac</a> 
        <a id="facebook" href="https://www.facebook.com/congresointeractivo">en facebook</a> 
      
    </div>



			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
