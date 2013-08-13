<?php
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:attachment;filename=userlog.xls");

require_once '../../framework/core/config.php';
require_once 'UserLogService.class.php';
require '../../framework/core/DBUtil.class.php';

global  $CONFIG;
$dbutil = new DbUtil($CONFIG['DB']['db_host'], $CONFIG['DB']['db_user'], $CONFIG['DB']['db_password'], $CONFIG['DB']['db_database']);

$userService =  new UserLogService($dbutil);

$condition = array();
array_push($condition,$_GET['starttime']);
array_push($condition,$_GET['endtime']);

echo $userService->getExportExcelData($condition);
?>