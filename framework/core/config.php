<?php 

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED);
ini_set("display_errors", 0);
//define('SMARTY_DIR', PROJECT.'/framework/lib/Smarty-3.1.13/libs/');
//  
define('ADMIN_TITLE', "后台管理中心");
define('PROJECT_NAME', "通用封装框架");
define('WEBSITE_URL','http://localhost/');
                
 
//for include smarty 
ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.SMARTY_DIR);

 
$CONFIG['DB']= array(
    'db_host'           =>      '127.0.0.1',
    'db_user'           =>      'root',
    'db_password'       =>      '',
    'db_database'       =>      'test1',
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
$CONFIG['WEBSERVICE']= array(
    "url"               => "http://172.17.3.196/service/VipService?wsdl",
    "userName" 			=> "trendy",
    "passWord" 			=> "webvip_7uj*IK-2013"
);
