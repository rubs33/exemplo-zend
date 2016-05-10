<?php
return array(
    'modules' => array(
        'Home',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{{,*.}global,{,*.}local}.php',
        ),
        'config_cache_enabled' => true,
        'config_cache_key' => 'cached_conf',
        'module_map_cache_enabled' => true,
        'module_map_cache_key' => 'cached_module_map',
        'cache_dir' => './cache',
        'check_dependencies' => true
    ),
);