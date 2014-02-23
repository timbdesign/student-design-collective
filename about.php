<?php
/**
 * Template Name: About
 *
 * @package Student Design Collective
 */

get_header(); ?>
<div class="jumbotron officer-jumbo" data-0="height:400px;" data-300="height:100px;">
	<div class="hero-unit">
	<h1>About</h1>
	<p><?php the_field('brief_of_page_contents'); ?></p>
</div>
</div>
<div class="container jumbotron-after">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>

