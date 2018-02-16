
<?php
/**
 * MY left nav sidebar template
 *
 * helgedom
 *
 */

?>

<aside class="cell small-2 sidebar my-sidebar hide-for-small-only pl pr">

	<!--		<div class="row text-center">-->
	<!--			<h4>Documenting family shenanigans since 2001.</h4>-->
	<!--		</div>-->

	<!--		<div class="row mt text-center">-->
	<!--			<i class="fa fa-fw fa-2x fa-instagram" aria-hidden="true"></i>-->
	<!--			<i class="fa fa-fw fa-2x fa-rss" aria-hidden="true"></i>-->
	<!--			<i class="fa fa-fw fa-2x fa-facebook-square" aria-hidden="true"></i>-->
	<!--			<i class="fa fa-fw fa-2x fa-flickr" aria-hidden="true"></i>-->
	<!--		</div>-->

<!--	<ul class="vertical menu mb">-->
<!--		--><?php //wp_list_pages( array( 'title_li' => '' ) ); ?>
<!--	</ul>-->

	<?php get_search_form(); ?>

	<h3 class="mt">CATEGORIES</h3>
	<ul class="vertical menu mb">
		<?php wp_list_categories( array(
			'title_li' => ''
		) ); ?>
	</ul>

<!--	<h3>PROJECTS</h3>-->
<!--	<ul class="vertical menu mb">-->
<!--		--><?php //wp_list_bookmarks('title_li=&categorize=0&category_name=Projects'); ?>
<!--	</ul>-->

<!--	<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>-->
<!--		<option value="">--><?php //echo attribute_escape(__('Select Year')); ?><!--</option>-->
<!--		--><?php //wp_get_archives('type=yearly&format=option&show_post_count=1'); ?>
<!--	</select>-->

<!--	<h3> Recent Posts </h3>-->
<!--	<ul class="vertical menu">-->
<!--		--><?php
//		$recent_posts = wp_get_recent_posts();
//		foreach( $recent_posts as $recent ) {
//			printf( '<li><a href="%1$s">%2$s</a></li>',
//				esc_url( get_permalink( $recent['ID'] ) ),
//				apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
//			);
//		}
//		?>
<!--	</ul>-->

</aside>
