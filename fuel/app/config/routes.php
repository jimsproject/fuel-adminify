<?php


try {
	return \Cache::get('routes');
} catch (\CacheNotFoundException $e) {

	$module_routes  = array();
    foreach (\File::read_dir(MODULESPATH) as $module => $module_dir) {            
        \Module::load(substr($module, 0,strlen($module)-1));
        $module_routes = \Arr::merge($module_routes, \Config::load(substr($module, 0,strlen($module)-1).'::moduleroutes'));
    };

    \Cache::set('routes', $module_routes, 3600 * 3);
    return $module_routes;
}


 		
define('MODULESPATH', realpath(__DIR__.'/../fuel/modules/').DIRECTORY_SEPARATOR);
