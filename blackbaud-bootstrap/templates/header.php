<header id="header" class="navbar navbar-inverse navbar-static-top" role="banner">
	<div class="container">
		<div id="logo" class="navbar-header">
			<a href="#nav" class="navbar-toggle" data-toggle="collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a href="#utility" class="navbar-toggle btn-search" data-toggle="collapse">
				<span class="sr-only">Toggle utility bar</span>
				<span class="glyphicon glyphicon-search"></span>
			</a>
			<div class="navbar-brand">
				<a title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
					<?php if (get_theme_mod('theme_logo')) : ?>
						<img src='<?php echo esc_url(get_theme_mod('theme_logo')); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'>
					<?php else : ?>
						<?php bloginfo('name'); ?>
					<?php endif; ?>
				</a>
			</div>
		</div>
		<nav id="utility" class="collapse navbar-collapse navbar-right">
			<?php
			wp_nav_menu(array("theme_location" => "utility_navigation", "menu_class" => "nav navbar-nav"));
			?>
			<form class="navbar-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
				<div class="form-group">
					<label class="control-label sr-only" for="s">Search:</label>
					<div class="input-group">
						<input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','wpbootstrap'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
						<span class="input-group-btn"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span><span class="sr-only">Submit</span></button></span>
					</div>
				</div>
			</form>
		</nav>
		<nav id="nav" class="collapse navbar-collapse" role="navigation">
			<?php
			if (has_nav_menu('primary_navigation')) {
				wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
			}
			?>
		</nav>
	</div>
</header>
