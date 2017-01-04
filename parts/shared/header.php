<header style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/dark.png') repeat;">
	<div class="header-content">
		<div class="profile">
			<div class="pic">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dw-prof1.jpg" alt="Daniel Willson" />
				</a>
			</div>
			<div class="name">
				<h2>
					<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
				</h2>
			</div>
		</div>
		<div class="nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
	</div>
	<!-- <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<?php bloginfo( 'description' ); ?>
	<?php get_search_form(); ?> -->
</header>
