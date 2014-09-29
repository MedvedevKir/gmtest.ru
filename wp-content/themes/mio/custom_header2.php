<header class="page-header">
<?php if ( is_front_page() ) { ?>
    <h2 class="entry-title"><?php the_title(); ?></h2>
<?php } else { ?>
    <?php if ((class_exists('WP_eCommerce') && get_post_type() == 'wpsc-product' )) {
		if ( !is_single() ) {
        	$category_name = wpsc_category_name(); ?>
        	<h1 class="entry-title"><?php echo $category_name; ?></h1>
        <?php  } ?>
    <?php } else { ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php
        }
		?>
<?php } ?>
</header>