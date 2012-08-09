<?php get_header(); ?>

	<div id="content" class="col span-8">
		<div class="col last span-6 nudge-2">
			<h4 class="ver small">Suchergebnisse</h4>	
		</div>
		
		<?php if (have_posts()) : ?>	
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<div class="col span-2">
						<ul class="nav">
							<li><?php the_time('Y-m-d'); ?>T<?php the_time('H:i'); ?></li>
							<li>In <?php the_category(', '); ?></li>
							
							<!-- Uncomment if you want support for tags -->
							<!-- <li>Tagged as <?php the_tags( '', ', ', ''); ?></li> -->

							<li><?php comments_number('Keine Kommentare','Ein Kommentar','% Kommentare'); ?></li>
						</ul>
					</div>

					<div class="post-content col last span-6">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink auf <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<?php the_content('Weiterlesen...'); ?>
					</div>
				</div>
			<?php endwhile; ?>
			
			<ul class="navigation">
				<li class="left"><?php next_posts_link('&larr; Ältere Artikel') ?></li>
				<li class="right"><?php previous_posts_link('Neuere Artikel &rarr;') ?></li>
			</ul>

			<?php else : ?>

				<h3>Nix gefunden</h3>
				<p>Tut mir echt leid, sowas wie "<span style="font-style:italic;"><?php the_search_query(); ?></span>" gibts hier nicht.</p>

			<?php endif; ?>
	</div>

	<hr />

	<?php get_sidebar(); ?>

	<?php get_footer(); ?>
