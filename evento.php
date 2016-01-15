<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */


/*Template name: eventi*/
get_header('pagine'); ?>


<h2 id="h_pagine">Eventi</h2>
		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>
            	<?php /* Start the Loop */ ?>
					<?php query_posts('post_type=evento') ; ?>
						<ul id="lista">
			    			<?php while ( have_posts() ) : the_post(); ?>
							<li id="lista_eventi"> <?php get_template_part( 'content', 'evento' ); ?> </li>
							<?php if(function_exists('social_ring_show')){ social_ring_show();}  ?>
							<?php endwhile; ?>
            			</ul>
					<?php twentyeleven_content_nav( 'nav-below' ); ?>

				
			<?php else : ?>

	        <article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
				
				</article><!-- #post-0 -->

			<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #primary -->


<?php get_footer('pagine'); ?>