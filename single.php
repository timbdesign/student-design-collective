<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Student Design Collective
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post();
$post_image_id = get_post_thumbnail_id($post_to_use->ID);
			if ($post_image_id) {
				$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
				if ($thumbnail) (string)$thumbnail = $thumbnail[0];
			}
		?>
<div class="jumbotron officer-jumbo" style="background-image: url('<?php echo $thumbnail; ?>'); -webkit-filter: blur(5px);
  -moz-filter: blur(5px);
  -o-filter: blur(5px);
  -ms-filter: blur(5px);
  filter: blur(5px); border: solid white 10px 0 0 0" data-0="height:400px;" data-300="height:100px;"></div>

	<div class="hero-unit">
	<h1><?php single_post_title(); ?></h1>
	<p></p>

</div>

<div class="container">

	<div id="primary" class="content-area officer-jumbo-after">
		<main id="main" class="site-main" role="main">
		<div class="two-thirds">


			<?php get_template_part( 'content', 'single' ); ?>



			<?php student_design_collective_post_nav(); ?>



		<?php endwhile; // end of the loop. ?>
		</div>
	<div class="one-third">
		<div class="post-thumbnail">
			 <?php if ( has_post_thumbnail()) : ?>

   			</div>
	<?php get_sidebar(); ?>
	 			<?php endif; ?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
