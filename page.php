<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<!--<div class="main-container">-->
	<div class="my-main-grid page-wide grid-x">
		<main class="my-main-container cell auto">
			<?php get_template_part( 'template-parts/featured-image' ); ?>
			<?php
			while ( have_posts() ) :
				the_post();
?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
<!--		--><?php //get_template_part( 'template-parts/content', 'mysidebar' ); ?>
<!--		--><?php //get_sidebar(); ?>
	</div>
<!--</div>-->
<?php
get_footer();
