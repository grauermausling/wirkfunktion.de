<?php get_header(); ?>

	<div id="content" class="col span-8">
		<div class="col last span-6 nudge-2">
			<h4 class="ver small">Latest Entries</h4>	
		</div>
		
		<?php if (have_posts()) : ?>	
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<div class="post-meta col span-2">
						<ul class="nav">
							<li><?php the_time('F j, Y'); ?></li>
							<li>In <?php the_category(', '); ?></li>
							<li><?php comments_number('No comments yet','One comment','% comments'); ?></li>
							<?php edit_post_link('Edit this post', '<li>', '</li>'); ?>
						</ul>
					</div>

					<div class="post-content span-8 nudge-2">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<?php the_content('Continue reading...'); ?>
					</div>
				</div>

			<?php endwhile; ?>
			
			<ul class="navigation">
				<li class="left"><?php next_posts_link('&larr; Older Entries') ?></li>
				<li class="right"><?php previous_posts_link('Newer Entries &rarr;') ?></li>
			</ul>
			
		<?php else : ?>
		
			<h3>Not Found</h3>
			<p>Sorry, but you are looking for something that isn't here.</p>

		<?php endif; ?>
	</div>	
	
	<hr />

	<?php get_sidebar(); ?>

	<?php get_footer(); ?>