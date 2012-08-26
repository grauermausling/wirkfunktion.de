<?php
/**
 * @package WordPress
 * @subpackage Basis_Theme xHTML5
 */
?>

	<aside id="sidebar">
		<h3><?php _e('Sidebar', FB_BASIS_TEXTDOMAIN); ?></h3>		
		<nav>			
			<ul> 				
				<?php dynamic_sidebar() ?>
			</ul>
		</nav>
	</aside>
