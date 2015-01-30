<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
	
	<!--[if lt IE 9]>
		<link href="//cdn.jsdelivr.net/respond/1.4.2/cross-domain/respond-proxy.html" id="respond-proxy" rel="respond-proxy">
		<link href="<?php echo get_template_directory_uri(); ?>assets/img/respond.proxy.gif" id="respond-redirect" rel="respond-redirect">
		<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
		<script src="//cdn.jsdelivr.net/respond/1.4.2/cross-domain/respond.proxy.js"></script>
	<![endif]-->
	
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
