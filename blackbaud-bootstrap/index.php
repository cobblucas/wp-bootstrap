<div class="row">
	<main id="content-primary" class="col-sm-9" role="main">
		<?php get_template_part("templates/page", "header"); ?>
		<?php if (! have_posts()) : ?>
			<div class="alert alert-warning">
				<?php _e("Sorry, no results were found.", "roots"); ?>
			</div>
			<?php get_search_form(); ?>
		<?php endif; ?>
		<?php while (have_posts()) : ?>
			<?php
			the_post();
			get_template_part("templates/content", get_post_format());
			?>
		<?php endwhile; ?>
		<?php if ($wp_query->max_num_pages > 1) : ?>
			<nav class="post-nav">
				<ul class="pager">
					<li class="previous"><?php next_posts_link(__("&larr; Older posts", "roots")); ?></li>
					<li class="next"><?php previous_posts_link(__("Newer posts &rarr;", "roots")); ?></li>
				</ul>
			</nav>
		<?php endif; ?>
	</main>
	<aside id="content-secondary" class="col-sm-3" role="complementary">
		<?php 
		if (is_category("blog") || in_category("blog")) {
			// show a different sidebar for the blog
			// based on category slug
			dynamic_sidebar("sidebar-blog");
		} else {
			include roots_sidebar_path();
		}
		?>
	</aside>
</div>