<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<div id="nav_footer">
					
				</div>
				<div id="social_footer">
				 
	               <ul>
		 				<li><a href="https://www.facebook.com/people/Federica-Placci/1162037786" title="chiedimi l'amicizia su Facebook" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" /></a></li>
        				<li><a href="http://www.youtube.com/user/fedefication?ob=0&feature=results_main" title="seguimi su youtube"  target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube.png" /></a></li>
     				</ul>
				</div>
				
				<div id="firma_footer">
				<p>designed by: <a href="http://verowebdesigner.altervista.org/" title="designed by Veronica Gordini" target="_blank">Veronica Gordini</a></p>
				</div> <!--fine div firma-->
			</div> <!--#site-generator-->
	</footer><!-- #colophon --> 
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>