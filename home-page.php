<?php
/**
 * Template Name: Home
 *
 * @package Student Design Collective
 */

get_header(); ?>

<div class="jumbotron hidden-sm" data-0="height:530px;" data-430="height:100px;">
  	<div class="hero-unit">
    	<h1>SDC makes connecting with other MCTC design students easy</h1>
    	<p>Get critiques of your work, hear guest speakers on the creative proccess, and build your resume and portfolio. Connection counts. </p>
    </div>
</div>
<div class="jumbotron visible-sm">
    <div class="hero-unit">
      <h1>SDC makes connecting with other MCTC design students easy</h1>
      <p>Get critiques of your work, hear guest speakers on the creative proccess, and build your resume and portfolio. Connection counts. </p>
    </div>
</div>


<div class="container jumbotron-after-home">
  <div class="twothirds">
    <?php
      query_posts('cat=1');
      while (have_posts()) : the_post();
    ?>
      <span class="ThumbnailClass">
        <?php
          // check if the post has a Post Thumbnail assigned to it.
          if ( has_post_thumbnail() ) {
            the_post_thumbnail();
          }
        ?>
      </span>
      <span class="ExcerptClass">
        <h2 class="entry-title">
          <a href="<?php the_permalink(); ?>">
          	<?php the_title(); ?>
          </a>
        </h2>
    	 <small>By <?php the_author() ?>, <?php the_time('F jS, Y') ?></small>
    	 <?php the_excerpt() ?>
      </span>
    <?php endwhile;?>
  </div><!--
--><div class="onethird">
    <div class="day-and-time">
      STUDENT DESIGN COLLECTIVE<br>Thursdays, 11:30 - 12:30 - In T4500
    </div>

    <div class="onethirdinner">

      <?php
 global $query_string; query_posts($query_string . "&order=ASC");
        $args = array( 'post_type' => 'event', 'posts_per_page' => 5,  );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          echo '<div class="calendar-container">';
            echo '<div class="calendar-box">';
              echo '<p class="calendar-month">';
                the_field('month');
              echo '</p>';
              echo '<p class="calendar-day">';
                the_field('day_of_the_month');
              echo '</p>';
            echo '</div>';
            echo '<div class="event-text">';
              echo '<h4>';
                the_title();
              echo '</h4>';
              echo '<h5>';
                the_field('location_of_event');
              echo '</h5>';
              echo '<p>';
                the_field('description_of_the_event');
              echo '</p>';
            echo '</div>';
          echo '</div>';
        endwhile;
      ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>

