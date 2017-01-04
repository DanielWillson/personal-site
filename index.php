<?php
/**
 * The main template file
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
	<div class="main post-list posts-page clearfix">
		<!-- Heading -->
			<div class="heading"><h1><?php wp_title(); ?></h1></div>
		<!-- Posts -->
		<?php if ( have_posts() ): ?>

		<ol>
		<?php 
			query_posts( array ( 
				'posts_per_page' => 5,
				'paged' => $paged
			) );
			while ( have_posts() ) : the_post(); ?>
			<?php
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

				$excerpt = types_render_field("subheading", array("output"=>"raw"));
				if (strlen($excerpt) > 140) {
					$new_excerpt = substr($excerpt, 0, strpos(wordwrap($excerpt, 140), "\n", true));
					$new_excerpt .= '...';
				}
				else {
					$new_excerpt = $excerpt;
				}
			?>
			<li>
				<div class="image-container">
					<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
						<img src="<?php echo $feat_image; ?>" class="article-featured-image" />
					</a>
				</div>
				<div class="post-info-container">
					<h3><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time>
					<p class="subheading"><?php echo $new_excerpt; ?></p>
				</div>
			</li>
		<?php endwhile; ?>
		</ol>

		<?php 
			$count_posts = wp_count_posts();
			$published_posts = $count_posts->publish;
			if ($published_posts > 10) {
		?>
		<div id="pagination" class="clearfix">
			<div class="nav-previous"><h5><a href="<?php echo site_url(); ?>/archives/page/2">&larr; Older posts</a></h5></div>
		</div>
		<?php 
			}
		?>

		<?php else: ?>
			<h2>No posts to display</h2>	
		<?php endif; ?>
			
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
