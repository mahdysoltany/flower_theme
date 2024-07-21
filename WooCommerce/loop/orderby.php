<?php

/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

?>



<form class="woocommerce-ordering" method="get">
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-up-alt" viewBox="0 0 16 16">
		<path d="M3.5 13.5a.5.5 0 0 1-1 0V4.707L1.354 5.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 4.707zm4-9.5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5" />
	</svg>
	<?php foreach ($catalog_orderby_options as $id => $name) : 
		 if ($id == "popularity") : ?>

			<button type="button" class="btn btn-light">
				<?php echo "محبوب ترین"; ?>
			</button>
		<?php
		endif;
		if ($id == "date") :
		?>
			<button type="button" class="btn btn-light">
				<?php echo "جدید ترین"; ?>
			</button>
		<?php
		endif;
		if ($id == "price") :
		?>
			<button type="button" class="btn btn-light">
				<?php echo "ارزان ترین"; ?>
			</button>
		<?php
		endif;
		if ($id == "price-desc") :
		?>
			<button type="button" class="btn btn-light">
				<?php echo "گران ترین"; ?>
			</button>
		<?php
		endif;
		if ($id == "menu_order") :
		?>
			<button type="button" class="btn btn-light">
				<?php echo "پیش فرض"; ?>
			</button>
	<?php
		endif;
	endforeach;
	?>
	</select>
	<input type="hidden" name="paged" value="1" />
	<?php wc_query_string_form_fields(null, array('orderby', 'submit', 'paged', 'product-page')); ?>
</form>