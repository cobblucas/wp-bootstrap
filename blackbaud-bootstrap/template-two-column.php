<?php
/*
Template Name: Two-Column Template
*/
?>
<div class="row">
	<main id="content-primary" class="col-sm-9 col-sm-push-3" role="main">
		<?php
		get_template_part("templates/page", "header");
		get_template_part("templates/content", "page");
		?>
	</main>
	<aside id="content-secondary" class="col-sm-3 col-sm-pull-9" role="complementary">
		<?php
		wp_nav_menu(array("theme_location" => "sidebar_navigation", "menu_class" => "nav nav-pills nav-stacked", "walker" => new Roots_SidebarNav_Walker));
		include roots_sidebar_path();
		?>
	</aside>
</div>