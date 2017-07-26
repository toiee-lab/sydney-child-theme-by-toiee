<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Sydney
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-3 abc" role="complementary">
	<?php 
		if( is_singular( 'page' ) )
		{
			dynamic_sidebar( 'pasge-sidebar-1' );
		}
		else
		{
			dynamic_sidebar( 'sidebar-1' );
		}
	?>

</div><!-- #secondary -->





