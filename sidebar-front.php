<?php
/**
 * The sidebar containing the front page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="first front-widgets">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- .first -->
	<?php endif; ?>
<div class="fb-like" data-href="https://www.facebook.com/GardenTraveler" data-send="false" data-width="250" data-show-faces="false" data-font="segoe ui"></div>

<div class="gardenquote">
<h2>The Art of Gardening </h2>
<p>Visit extraordinary public and private gardens. Feed your imagination with the best garden books, magazines and artwork. And watch your garden grow.</p>
<p>-- The Garden Traveler</p>
</div>

<div class="breadcrumbs">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-6539312976102774";
/* GT 160x600 */
google_ad_slot = "1255912818";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="second front-widgets">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- .second -->
	<?php endif; ?>
</div><!-- #secondary -->