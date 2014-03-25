<?php


return array(
	'admin/menu'                    => array('menu/admin/index', 'name' => 'menu_admin_menu'),                          
	'admin/menu/view/:id'           => array('menu/admin/view', 'name' => 'menu_admin_submenu'), 
	'admin/menu/add'                => array('menu/admin/index/add', 'name' => 'menu_admin_add'),                    
	'admin/menu/add/:parent' 		=> array('menu/admin/index/add', 'name' => 'menu_admin_add_to_parent'),
	'admin/menu/edit/:id'            => array('menu/admin/index/add', 'name' => 'menu_admin_edit'),                  
	'admin/menu/delete/:id'         => array('menu/admin/index/delete', 'name' => 'menu_admin_delete'),   
);