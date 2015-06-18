<?php 
/* 
Template Name: Homepage 
*/ 
?>


<?php get_header(); ?>



<div class="container-fluid no_padding">
<!-- SLIDER -->
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">


  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo get_template_directory_uri(); ?>/images/slides/sliderOne.jpg" alt="...">

  
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/slides/sliderTwo.jpg" alt="...">
 
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/slides/sliderThree.jpg" alt="...">

    </div>

  </div>


 
</div> <!-- Carousel -->
</div>

<?php if(is_front_page() ) { ?>

<div class="wrapper">

<?php } else { ?>
<!-- wrapper -->
			
<?php } ?>
<div class="randomposts">



<?php

    the_random_posts();


/**
 * Send random posts to the browser (STDOUT).
 */
function the_random_posts() {

    // Use your own category ids.
    $random_posts_one = array_merge(
    	get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 )
    );


        // Use your own category ids.
    $random_posts_two = array_merge(
    	get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 )
    );


        // Use your own category ids.
    $random_posts_three = array_merge(
    	get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 ),
        get_random_posts( 93, 3 )
    );
?>

<div class="col-md-4">
<div class="banner">
	 <ul>
<?php
    foreach ( $random_posts_one as $post ) {
        // Change this line to code you want to output.
       		print "<li>";
        	$featimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        	print "<img src='".$featimage[0]."' class='random_img' alt='' />";
        	print "<a href='".get_permalink( $post->ID )."' ><h4>".get_the_title( $post->ID )."</h4></a>";
        	print "<p>".wp_trim_words( $post->post_content, 20, '<br /><a href="'. get_permalink( $post->ID ).'" class="more">&#187; Read More</a>' )."</p>";
        	print "</li>";	 
    }
?>
</ul>
</div>
</div>
<?php
?>
<div class="col-md-4">
<div class="banner">
	 <ul>
	<?php
        foreach ( $random_posts_two as $post ) {
        // Change this line to code you want to output.
       		print "<li>";
        	$featimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        	print "<img src='".$featimage[0]."' class='random_img' alt='' />";
        	print "<a href='".get_permalink( $post->ID )."' ><h4>".get_the_title( $post->ID )."</h4></a>";
        	print "<p>".wp_trim_words( $post->post_content, 20, '<br /><a href="'. get_permalink( $post->ID ).'" class="more">&#187; Read More</a>' )."</p>";
        	print "</li>";	 
    }
?>
</ul>
</div>
</div>
<?php
?><div class="col-md-4">
<div class="banner">
	 <ul>
<?php

        foreach ( $random_posts_three as $post ) {
        // Change this line to code you want to output.
       		print "<li>";
        	$featimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        	print "<img src='".$featimage[0]."' class='random_img' alt='' />";
        	print "<a href='".get_permalink( $post->ID )."' ><h4>".get_the_title( $post->ID )."</h4></a>";
        	print "<p>".wp_trim_words( $post->post_content, 20, '<br /><a href="'. get_permalink( $post->ID ).'" class="more">&#187; Read More</a>' )."</p>";
        	print "</li>";
    }
?>
</ul>
</div>
</div>

<?php

}

/**
 * Get $post_count random posts from $category_id.
 *
 * @param int $post_count Number of random posts to retrieve.
 * @param int $category_id ID of the category.
 */
function get_random_posts( $category_id, $post_count ) {

    $posts = get_posts( array(
        'posts_per_page' => $post_count,
        'orderby'        => 'rand',
        'cat'            => $category_id,
        'post_status'    => 'publish',
    ) );

    return $posts;
}

?>

</div>







	<main role="main">
		<!-- section -->
		<section>

			<!-- <h1><?php //the_title(); ?></h1> -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'populas' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
