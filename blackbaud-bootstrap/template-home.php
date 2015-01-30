<?php 
/*
Template Name: Home Template
*/
?>
<div id="media">
	<div class="container">
		<?php if (shortcode_exists("bb-bootstrap-carousel")) : ?>
			<?php echo do_shortcode("[bb-bootstrap-carousel category='home-page-slider']"); ?>
		<?php endif; ?>
	</div>
</div>
<div id="content">
	<div id="content-primary">
		<div class="container">
			<div class="row">
				<div id="home-content-primary" class="col-sm-9">
					<?php get_template_part("templates/page", "header"); ?>
					<?php get_template_part("templates/content", "page"); ?>
				</div>
				<div id="home-content-secondary" class="col-sm-3">
					<?php dynamic_sidebar("sidebar-home"); ?>
				</div>
			</div>
		</div>
	</div>
	<div id="content-secondary">
		<div class="container">
			<div class="row">
				<div id="home-bucket-1" class="col-sm-4"><?php dynamic_sidebar("sidebar-home-1"); ?></div>
				<div id="home-bucket-2" class="col-sm-5"><?php dynamic_sidebar("sidebar-home-2"); ?></div>
				<div id="home-bucket-3" class="col-sm-3"><?php dynamic_sidebar("sidebar-home-3"); ?></div>
			</div>
		</div>
	</div>
</div>