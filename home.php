<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="my-body page-wide grid-x">

	<main class="cell auto">

		<?php if ( have_posts() ) : ?>

			<div class="my-block-grid grid-x grid-padding-x small-up-1 medium-up-2">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="cell">
						<?php
						//get_template_part( 'template-parts/content', get_post_format() );
						get_template_part( 'template-parts/content', 'gridblock' );
						?>
					</div>

				<?php endwhile; ?>

			</div>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
			?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</main>

	<?php get_template_part( 'template-parts/content', 'mysidebar' ); ?>

	<!--	--><?php //get_sidebar(); ?>

</div>

<?php get_footer();
