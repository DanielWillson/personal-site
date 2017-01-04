<?php
/**
 * Template Name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="all-content">
	<div class="full-width" style="background: url('<?php echo types_render_field("home-background-image", array("output"=>"raw")); ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover;	-o-background-size: cover; background-size: cover;">
		<div class="main dark">
			<div class="blurb">
				<h3><?php echo types_render_field("greeting", array("output"=>"html"));
?></h3>
				<p><?php echo types_render_field("short-bio", array("output"=>"html"));
?></p>
			</div>
		</div>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>

