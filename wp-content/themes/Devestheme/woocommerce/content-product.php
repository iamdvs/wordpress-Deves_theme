<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<article class="masonry__brick entry format-standard" data-aos="fade-up">

<div class="entry__thumb">
	<a href="<?php the_permalink(); ?>" class="entry__thumb-link">
	<?php the_post_thumbnail('articlethumb'); ?>
	</a>
</div>

<div class="entry__text">
	<div class="entry__header">
		
		<div class="entry__date">
			<a href="single-standard.html">مهر ۱۰, ۱۳۹۴</a>
		</div>
		<h1 class="entry__title"><a href="<?php the_permalink(); ?>"> 
		<?php the_title(); ?>
.</a></h1>
		
	</div>
	<div class="entry__excerpt">
		<p>

			<?php echo $product->get_price_html(); ?>
		</p>
	</div>
	<div class="entry__meta">
		<span class="entry__meta-links">
			<a href="#">زندگی</a> 
			<a href="#">چرخه زندگی</a>

			<button class="btn">
			<?php echo $product->add_to_cart_url(); ?>

			</button>
		</span>
	</div>
</div>

</article> <!-- end article -->

