<?php get_template_part("templates/head"); ?>
	<body id="template-home" <?php body_class(); ?>>
		<?php get_template_part("templates/bbi-namespace"); ?>
		<div id="wrapper" role="document">
			<a class="sr-only" href="#content">Skip to content</a>
			<?php
			do_action("get_header");
			get_template_part("templates/header");
			include roots_template_path();
			get_template_part("templates/footer");
			?>
		</div>
	</body>
</html>