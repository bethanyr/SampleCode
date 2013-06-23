<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *  
 * Template has been modified by Bethany Rentz for use on http://gardentraveler.com.
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">


<div class="featuregard">
<h1>Featured Gardens</h1>
</div><!--featuregard -->

<?php
 query_posts('tag=feature'); ?>
<?php while ( have_posts() ) : the_post(); ?>
				
<div class="entry-feature">

<?php the_post_thumbnail(array(150,150), array('class'=> 'aligncenter')); ?>

<a href="<?php echo get_permalink(); ?>"> <?php echo the_title(); ?></a>
<?php the_excerpt(); ?>

</div>  <!-- #entry-feature-->
			<?php endwhile; // end of the loop. ?>


<script type="text/javascript"><!--
google_ad_client = "ca-pub-6539312976102774";
/* GT Banner */
google_ad_slot = "4509787287";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
	
<div class="featuregard">
<h1>Upcoming Garden Events</h1>
</div>
<?php wp_reset_postdata(); ?>

<?php


// The Query
$args = array(
	'post_type' => 'post',
	'category_name' => 'events',
        'posts_per_page' => '3',
'meta_key' => 'startdate',
 'orderby' => 'meta_value', 
'order' => 'ASC' 
);

$query = new WP_Query( $args); ?>


<?php 
// The Loop
while( $query->have_posts() ): 	$query->the_post(); ?>
<div class="entry-summary">
<?php the_post_thumbnail(array(100,100), array ('class' => 'alignleft')); ?>
<a href="<?php echo get_permalink( $query->post->ID ); ?>"> <?php echo get_the_title($query->post->ID ); ?></a>
<?php the_excerpt(); ?>

</div> <!-- entry-summary -->




 	
<?php endwhile; ?>
<a href="/category/events"> Find more garden events...</a>
<div class="google">

<script type="text/javascript"><!--
google_ad_client = "ca-pub-6539312976102774";
/* GT Link */
google_ad_slot = "7323652884";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div> 
<div class="featuregard">
<h1>Recent Clippings</h1>
</div> <!-- Featureclip -->
<?php wp_reset_postdata(); ?>

<?php


// The Query
$args = array(
	'post_type' => 'post',
	'category_name' => 'clipping',
        'posts_per_page' => '3',
 'orderby' => 'date', 
'order' => 'DESC' 
);

$query = new WP_Query( $args); ?>


<?php 
// The Loop
while( $query->have_posts() ): 	$query->the_post(); ?>
<div class="entry-summary">
<?php the_post_thumbnail(array(100,100), array ('class' => 'alignleft')); ?>
<a href="<?php echo get_permalink( $query->post->ID ); ?>"> <?php echo get_the_title($query->post->ID ); ?></a>
<?php the_excerpt(); ?>



</div> <!-- Entry-summary -->

 	
<?php endwhile; ?>

<a href="/category/clipping"> Read more clippings...</a>						
			
		
	






	</div><!-- #primary -->
</div><!-- content -->





<?php get_sidebar( 'front' ); ?>


<?php get_footer(); ?>
</div> <!-- from header code -->