<?php
/**
 * @package WordPress
 * @subpackage Basis_Theme xHTML5
 */
?>

<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
	<fieldset>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
	</fieldset>
</form>
