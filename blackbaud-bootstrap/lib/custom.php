<?php
/**
 * Custom functions
 */

// Add logo to theme customizer
function blackbaud_theme_customizer($wp_customize) {
	$wp_customize->add_section("theme_logo_section", array(
		"title" => __("Logo", "blackbaud"),
		"priority" => 30,
		"description" => "Upload a logo to replace the default site name and description in the header"
	));
	$wp_customize->add_setting("theme_logo", array(
		"capability" => "edit_theme_options"
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "theme_logo", array(
		"label"   	=> __("Logo", "" ),
		"section"	=> "theme_logo_section",
		"settings" 	=> "theme_logo",
		"context"	=> "bb-custom-logo"
	)));
}
add_action("customize_register", "blackbaud_theme_customizer");

// Sidebar Nav Walker
class Roots_SidebarNav_Walker extends Walker_Nav_Menu {
	function check_current($classes) {
		return preg_match('/(current[-_])|active|dropdown/', $classes);
	}
	
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$output .= "\n<ul class=\"nav nav-pills nav-stacked sub-menu\">\n";
	}
	
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		$item_html = '';
		parent::start_el($item_html, $item, $depth, $args);
	
		if ($item->is_dropdown && ($depth === 0)) {
			$item_html = str_replace('<a', '<a class="" data-target="#"', $item_html);
			$item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html);
		}
		elseif (stristr($item_html, 'li class="divider')) {
			$item_html = preg_replace('/<a[^>]*>.*?<\/a>/iU', '', $item_html);
		}
		elseif (stristr($item_html, 'li class="dropdown-header')) {
			$item_html = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '$1', $item_html);
		}
	
		$item_html = apply_filters('roots_wp_nav_menu_item', $item_html);
		$output .= $item_html;
	}
	
	function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
		$element->is_dropdown = ((!empty($children_elements[$element->ID]) && (($depth + 1) < $max_depth || ($max_depth === 0))));
	
		if ($element->is_dropdown) {
			$element->classes[] = 'dropdown';
		}
	
		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	}
}