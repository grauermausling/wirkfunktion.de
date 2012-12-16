<?php
/**
 * @package WordPress
 * @subpackage Basis_Theme xHTML5
 */

get_header();

	if ( have_posts() ) {
		while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<header>
				<h6><ul>
					<li>@author: <?php the_author_posts_link(); ?></li>
					<li>@since&nbsp;: <time datetime="<?php the_modified_date('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?>T<?php the_time('H:i'); ?></time></li>
					<li>@see&nbsp;&nbsp;&nbsp;: <?php the_category(', '); ?></li>											
				</ul></h6>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			</header>
			
			<ul class="storybegin">
				<li class="storymarker">{</li>
			</ul>
				
			<section class="story">
				<?php the_content(); ?>
				<section>
					<?php wp_link_pages(); ?>
				</section>
			</section>
			<ul class="storyend">
				<li class="storymarker">}</li>
				<li class="singlelinecomment">
					<?php _e('Aktualisiert am', FB_BASIS_TEXTDOMAIN); ?> <time datetime="<?php the_modified_date('Y-m-d'); ?>"><?php the_modified_date(); ?></time> <?php edit_post_link(__(', Editieren', FB_BASIS_TEXTDOMAIN),' &middot; ', ''); ?> <?php the_tags() ?></li>
			</ul>				
		</article>
		
		<?php comments_template( '', TRUE );

		endwhile;
	} else {
	?>
	
		<section>
			<p><?php _e('Nichts gefunden, was den Suchkriterien entspricht.', FB_BASIS_TEXTDOMAIN); ?></p>
		</section>
	
	<?php } ?>

<?php get_footer(); ?>
