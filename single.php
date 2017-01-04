<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="all-content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="main article clearfix">
		<article>

			<h2 class="title"><?php the_title(); ?></h2>
			<!-- <h3 class="subheading"><?php echo types_render_field("subheading", array("output"=>"html"));?></h3>
			 -->
			<span class="by-line">
				<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> | by <?php $name = get_the_author_meta( 'nickname' ); echo $name; ?> 
				<span class="follow-button">
					<a href="https://twitter.com/danielwillson" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @danielwillson</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</span>
			</span>
			<?php 
				$check = types_render_field("hide-the-featured-image", array("output" => "raw"));
				if ($check == 0) { ?>
					<div class="featured-image">
						<?php the_post_thumbnail(); ?>
						<div class="caption">
							<?php echo types_render_field("featured-image-caption", array("output"=>"html"));?>
						</div>
					</div>
					<?php
				}
			?>
			<div class="content">
				<?php the_content(); ?>
			</div>
			<hr/>
			<div class="social-share">
				<p>If you enjoyed this post, please share:</p>
				<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/share-this-page' ) ); ?>
			</div>
			<div class="newsletter-subscribe">
				<p>Subscribe to my occasional email newsletter for more posts like these:</p>
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
				<form action="//danielwillson.us10.list-manage.com/subscribe/post?u=cf1a05afc9ffff2f89fe4e6ed&amp;id=2dd89abafb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<div class="mc-field-group">
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="you@youremail.com">
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
						</div>
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;">
				    	<input type="text" name="b_cf1a05afc9ffff2f89fe4e6ed_2dd89abafb" tabindex="-1" value="">
				    </div>
				</form>
				</div>
				<!--End mc_embed_signup-->
			</div>
			<div class="author-description">
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<div class="pic">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dw-prof1.jpg" alt="Daniel Willson" />
				</div>
				<div class="description">
					<h4>About Me</h4>
					<?php the_author_meta( 'description' ); ?>
					<div class="follow-button">
						<a href="https://twitter.com/danielwillson" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @danielwillson</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="comments">
			    <div id="disqus_thread"></div>
			    <script type="text/javascript">
			        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			        var disqus_shortname = 'danielwillson1'; // required: replace example with your forum shortname

			        /* * * DON'T EDIT BELOW THIS LINE * * */
			        (function() {
			            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			        })();
			    </script>
			    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				    
			</div>

		</article>

	</div>
	<?php endwhile; ?>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>