<?php get_header(); ?>

	<div id="content" class="col span-8">
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>
			
				<div class="col last span-8">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink auf <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content('Weiterlesen...'); ?>
				</div>
				
			<?php endwhile; ?>
		
		<?php else : ?>
		
			<h3>Ups?!</h3>
			<p>Tut mir leid, aber das gibt es hier nicht.</p>
			
		<?php endif; ?>
		
	</div>

	<hr />

<?php get_sidebar(); ?>

<?php get_footer(); ?>
