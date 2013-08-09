<?php 

define('ADMIN_TITLE', "后台管理中心");
define('PROJECT_NAME', "通用封装框架");
define('WEBSITE_URL','http://localhost/');
                
 
//for include smarty 
ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.SMARTY_DIR);

 
$CONFIG['DB']= array(
    'db_host'           =>      'localhost',
    'db_user'           =>      'root',
    'db_password'       =>      'root',
    'db_database'       =>      'test',
    'db_table_prefix'   =>      'app_',
    'db_charset'        =>      'urf8'   
);
$CONFIG['SMARTY']= array(
    'templates'         =>      PROJECT.'/templates/',
    'templates_c'       =>      PROJECT.'/templates_c/',
    'configs'            =>      PROJECT.'/core/',
    'check'            =>      true,
    'cache'             =>      PROJECT.'/cache/',
    'left_delimiter'    =>      '{{',
    'right_delimiter'   =>      '}}',
    'debugging'         =>      false
   // 'caching'           =>      Smarty::CACHING_OFF
);
$CONFIG['ROUTER']= array(
    "dir"               => "",
    "controler"         => "index",
    "method"            => "index",
    "param"             => ""
);
