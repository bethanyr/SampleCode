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

/* Load the header function - header.php */
 get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">


<div class="featuregard">
<h1>Featured Gardens</h1>
</div><!--featuregard -->

<!-- query posts and return posts with feature tag to display on home page -->
<?php
 query_posts('tag=feature'); ?>
<?php while ( have_posts() ) : the_post(); ?>
				
<div class="entry-feature">

<!-- display thumbnail size of featured image of post -->
<?php the_post_thumbnail(array(150,150), array('class'=> 'aligncenter')); ?>

<!-- display title, link to post and excerpt under the picture -->
<a href="<?php echo get_permalink(); ?>"> <?php echo the_title(); ?></a>
<?php the_excerpt(); ?>

</div>  <!-- #entry-feature-->
			<?php endwhile; // end of the loop. ?>

<!-- display google ad -->
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

<!-- display most recent posts categorized as garden events sorted by start date -->	
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

<!-- display the event posts on the page -->
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

<!-- display google ad -->

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

<!-- display 3 posts of category clippings that were most recently published - sorted by published date desc -->
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

<!--call function to display sidebar of page - displays sidebar-front.php -->

<?php get_sidebar( 'front' ); ?>

<!--display footer.php -->

<?php get_footer(); ?>
</div> <!-- from header code -->