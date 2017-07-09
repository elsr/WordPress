tions.php
add_filter( 'widget_nav_menu_args', 'artabr_widget_menu_category' );
function artabr_widget_menu_category ($arg) {
	$arg['container'] = 'div';
	$arg['container_class'] = 'rubric__list side__menu';
	$arg['menu_class'] = '';
	return $arg;
}
