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
<div id="callsToAction">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div id="ctaOne">
				<a href="<?php the_field('call_to_action_one_link'); ?>">
						<h3><?php the_field('call_to_action_one_title'); ?></h3>
						<i><?php the_field('call_to_action_one_description'); ?></i>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div id="ctaTwo">
				<a href="<?php the_field('call_to_action_two_link'); ?>">
						<h3><?php the_field('call_to_action_three_title'); ?></h3>
						<i><?php the_field('call_to_action_three_description'); ?></i>
					</a>
				</div>
			</div>
			<div class="col-sm-4">
				<div id="ctaThree">
				<a href="<?php the_field('call_to_action_three_link'); ?>">
						<h3><?php the_field('call_to_action_two_title'); ?></h3>
						<i><?php the_field('call_to_action_two_description'); ?></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="content">
	<div id="content-secondary">
		<div class="container">
			<div class="row">
				<div id="home-bucket-1" class="col-sm-3"><?php dynamic_sidebar("sidebar-home-1"); ?></div>
				<div id="home-bucket-2" class="col-sm-3"><?php dynamic_sidebar("sidebar-home-2"); ?></div>
				<div id="home-bucket-3" class="col-sm-6"><?php dynamic_sidebar("sidebar-home-3"); ?></div>
			</div>
		</div>
	</div>
</div>