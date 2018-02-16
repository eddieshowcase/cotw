<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="my-body page-wide grid-x">

	<main class="cell auto">

		  <h1 class="mb">
				<?php  echo get_the_archive_title(); ?>
			</h1>

<!--			<main class="main-content">-->
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

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; // End have_posts() check. ?>
				</div>

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

<!--			</main>-->


	</main>

	<?php get_template_part( 'template-parts/content', 'mysidebar' ); ?>
	<!--			--><?php //get_sidebar(); ?>

</div>

<?php get_footer();
