<?php

return array(

	'themes' => array(

		// Default simple HTML Menu
		'fuel-admin' => array(
	        'menu' => '<ul class="nav nav-pills nav-stacked nav-adminify">{menu}</ul>',
	        'menu_item' => '<li class="item depth-1 {active}">{item} {submenu}</li>',
	        'menu_item_inner' => '<a href="{link}" title="{title}">{text}</a>',

	        'sub_menu' => '<ul class="sub-menu depth-{depth}">{menu}</ul>',
	        'sub_menu_item' => '<li class="sub-item depth-{depth} {active}">{item} {submenu}</li>',
	        'sub_menu_item_inner' => '<a href="{link}" title="{title}">{text}</a>',
		),

		
	),
);