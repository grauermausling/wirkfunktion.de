<div id="sidebar" class="col last span-4">
	<div class="section">
		<h4 class="ver small">Worum gehts?</h4>
		<p><?php echo get_bloginfo('description'); ?></p>
	</div>
	
  <!-- enable this again for twitter support. Also add code in footer.php
	<div class="section">
		<h4 class="ver small">Recently <span class="low">on</span> Twitter</h4>
		<div id="twitter_div">
			<ul id="twitter_update_list">
				<li></li>
			</ul>
		</div>
	</div>
	-->

	<div class="section">
		<h4 class="ver small">Fotos</h4>
		<p>Aktuelle, öffentliche Fotos von meinem <br/><a href="http://www.flickr.com/photos/8944137@N07/" title="Meine Fotos">flickr photostream</a>.</p>
		
		<div id="flickr_badge_wrapper">
			
			<!-- Change &user=27741269%40N00 to your own Flickr user to change this -->
			
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=8944137@N07"></script>
		</div>
	</div>

  <div class="section">
		<h4 class="ver small"><a href="http://www.delicious.com/"><img src="http://l.yimg.com/hr/img/delicious.small.gif" width="10" height="10" alt="delicious" border="0"></a> Linkroll </h4>
		<p>Die letzten Fundstücke via Delicious.</p>
		<script type="text/javascript" src="http://feeds.delicious.com/v2/js/grauer_mausling?title=&count=5&bullet=%C2%BB&sort=date"></script>
	</div>
	
	<div class="section">
		<h4 class="ver small">Suchen</h4>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
	
	<!-- Uncomment if you want to display the tag cloud in the homepage -->
	
	<!-- <div class="section">
		<h4 class="ver small">Tags</h4>
		<?php wp_tag_cloud(); ?>
	</div> -->
	
	<!-- Widgetized sidebar: Since the theme is simple, this is not fully
		 error tested and could not look as good as it should be, therefore
		 you might need to style the CSS file! For BETTER results:
		
		 1) Don't use widgets. Hard code each section as shown below.
		 2) Copy and paste the HTML for a sample section (lines 54 to 61).
		 3) Replace the section title (HTML element H4) with your own.
		 4) Replace the section description (HTML element P) with your own.
		 5) For a better and consistent look, ALWAYS use a title
		 and description for each section.
	-->
	
	<ul class="widgetized-sidebar">
	<?php if ( !function_exists('dynamic_sidebar')
	        || !dynamic_sidebar() ) : ?>
	
			<div class="section">
				<h4 class="ver small">Kategorien</h4>
				<!--<p>Dig in the archives.</p>-->

				<ul class="nav">
					<?php wp_list_categories('title_li='); ?>
				</ul>
			</div>

			<div class="section">
				<h4 class="ver small">Blogroll</h4>
				<p>Was ich so lese.</p>

				<ul class="nav">
					<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
				</ul>
			</div>
	<?php endif; ?>
	</ul>
</div>

<hr />

