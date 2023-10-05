<?php
/**
 * Template used to display post content.
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	<p><?php the_excerpt(); ?></p>
	<?php
	?>

</article><!-- #post-## -->
