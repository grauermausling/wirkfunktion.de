<?php get_header(); ?>

<div id="content" class="col span-8">
	<?php if (have_posts()) : ?>
	
	<div class="col last span-6 nudge-2">
		<h4 class="ver small">Artikel</h4>	
	</div>
	
		<?php while (have_posts()) : the_post(); ?>
				
		<div class="post">
			<div class="post-meta col span-2">
				<ul class="nav">
					<li><?php the_time('Y-m-d'); ?>T<?php the_time('H:i'); ?></li>
					<li>In <?php the_category(', '); ?></li>
					
					<!-- Uncomment this if you want support for tags -->
					<!-- <li>Tagged as <?php the_tags( '', ', ', ''); ?></li> -->
					
					<li><?php comments_number('Keine Kommentare','Ein Kommentar','% Kommentare'); ?></li>
					<?php edit_post_link('Artikel editieren', '<li>', '</li>'); ?>
				</ul>
			</div>
			
			<div class="post-content span-8 nudge-2">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink auf <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<?php the_content('Weiterlesen...'); ?>
			</div>
		</div>
		
		<?php comments_template(); ?>

		<?php endwhile; ?>

	<?php else : ?>
	
		<h3>Post Not Found</h3>
		<p>Sorry, but you are looking for something that isn't here.</p>
	
	<?php endif; ?>
	
</div>

<hr />

<?php get_sidebar(); ?>

<?php get_footer(); ?>
