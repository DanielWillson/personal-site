<div class="main post-list clearfix">
		<!-- Heading -->
			<div class="heading"><h1><?php wp_title(); ?></h1></div>
		<!-- Posts -->
		<?php if ( have_posts() ): ?>

		<ol>
		<?php 
			query_posts( array ( 
				'posts_per_page' => 10,
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
		<div id="pagination" class="clearfix">
			<div class="nav-previous"><h5><?php next_posts_link( '&larr; Older posts' ); ?></h5></div>
			<div class="nav-next"><h5><?php previous_posts_link( 'Newer posts &rarr;' ); ?></h5></div>
		</div>
		<?php else: ?>
			<h2>No posts to display</h2>	
		<?php endif; ?>
			
	</div>