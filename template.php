<?php
// $Id$
function phptemplate_body_class($left, $right) {
	if ($left && $right) {
		$class = 'sidebars-2';
		$id = 'sidebar-side-2';	
	}
	else if ($left || $right) {
		$class = 'sidebars-1';
		$id = 'sidebar-side-1';
	}
	
	if(isset($class)) {
		print ' class="'. $class .'"';
	}
		if(isset($id)) {
		print ' id="'. $id .'"';
	}
}

drupal_add_js(drupal_get_path('theme', 'danland') . '/jquery.cycle.all.js');
drupal_add_js(drupal_get_path('theme', 'danland') . '/sf/js/superfish.js');
drupal_add_css(drupal_get_path('theme', 'danland') . '/sf/css/superfish.css');