<footer id="footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div id="footer-bucket-1" class="col-sm-4">
				<?php dynamic_sidebar("sidebar-footer-1"); ?>
			</div>
			<div id="footer-bucket-2" class="col-sm-5">
				<?php dynamic_sidebar("sidebar-footer-2"); ?>
			</div>
			<div id="footer-bucket-3" class="col-sm-3">
				<?php dynamic_sidebar("sidebar-footer-3"); ?>
				<!-- SHARETHIS BUTTONS (initialized below) -->
				<span class="st_facebook_large" st_title="<?php the_title(); ?>" st_url="<?php the_permalink(); ?>"></span>
				<span class="st_twitter_large" st_title="<?php the_title(); ?>" st_url="<?php the_permalink(); ?>"></span>
				<span class="st_linkedin_large" st_title="<?php the_title(); ?>" st_url="<?php the_permalink(); ?>"></span>
				<span class="st_email_large" st_title="<?php the_title(); ?>" st_url="<?php the_permalink(); ?>"></span>
				<span class="st_sharethis_large" st_title="<?php the_title(); ?>" st_url="<?php the_permalink(); ?>"></span>
			</div>
		</div>
	</div>
	<div id="footer-copyright">
		<div class="container">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- SHARETHIS -->
<script>
var switchTo5x = true;
</script>
<script src="//ws.sharethis.com/button/buttons.js"></script>
<script>
stLight.options({
	"publisher": "wp.66577453-6e8d-4ca6-9f66-08d57d91ab3d",
	"doNotCopy": false,
	"hashAddressBar": false,
	"doNotHash": true
});
var st_type = "wordpress3.8.1";
</script>