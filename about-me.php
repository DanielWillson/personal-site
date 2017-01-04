<?php
/**
 * Template Name: About Me
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
	<div class="main about-page clearfix">
		<!-- Heading -->
			<div class="heading"><h1>About Me</h1></div>
		<!-- Lead Description -->
			<div class="bio"><?php echo types_render_field("lead-description", array("output"=>"html")); ?></div>
		<!-- Sidebar -->
			<div class="sidebar">
			<h4>Quick Info</h4>
				<p><span class="icon icon-user"></span>Daniel Willson</p>
				<p><span class="icon icon-home"></span>Charlottesville, Virginia</p>
				<p><span class="icon icon-library"></span>University of Virginia '16</p>
				<br />
			<h4>Contact Info</h4>
				<p><span class="icon icon-linkedin"></span>View Resum&eacute; on <a href="http://linkedin.com/in/danielwillson" target="_blank" alt="Daniel Willson on LinkedIn">LinkedIn</a></p>
				<p><span class="icon icon-twitter"></span>Follow Me <a href="http://twitter.com/danielwillson" target="_blank" alt="Daniel Willson on Twitter">@danielwillson</a></p>
				<p><span class="icon icon-mail"></span>Email <a href="mailto:daniel@danielwillson.me" target="_blank" alt="Email Daniel Willson">daniel@danielwillson.me</a></p>
			</div>
		<!-- Section 1 -->
			<img src="<?php echo types_render_field("image-1", array("output"=>"raw")); ?>" class="full-article-image" />
			<div class="caption"><?php echo types_render_field("caption-1", array("output"=>"html")); ?></div>
			<div class="bio"><?php echo types_render_field("text-1", array("output"=>"html")); ?></div>
		<!-- Section 2 -->
			<img src="<?php echo types_render_field("image-2", array("output"=>"raw")); ?>" class="full-article-image" />
			<div class="caption"><?php echo types_render_field("caption-2", array("output"=>"html")); ?></div>
			<div class="bio"><?php echo types_render_field("text-2", array("output"=>"html")); ?></div>
		<!-- Section 3 -->
			<img src="<?php echo types_render_field("image-3", array("output"=>"raw")); ?>" class="full-article-image" />
			<div class="caption"><?php echo types_render_field("caption-3", array("output"=>"html")); ?></div>
			<div class="bio"><?php echo types_render_field("text-3", array("output"=>"html")); ?></div>
		<!-- Section 4 -->
			<img src="<?php echo types_render_field("image-4", array("output"=>"raw")); ?>" class="full-article-image" />
			<div class="caption"><?php echo types_render_field("caption-4", array("output"=>"html")); ?></div>
			<div class="bio"><?php echo types_render_field("text-4", array("output"=>"html")); ?></div>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>