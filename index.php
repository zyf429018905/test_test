<?php
header("Content-Type:text/html; charset=utf-8");
$host = $_SERVER['HTTP_HOST'];
define("SITE_ID", 2017);
define("SITE_TYPE", 1);
define("IMG_SITE_ID", 49);
define("DS_SS_HANDICP", 'B');
define("DS_XG_HANDICP", 'C');
define("MY_HTTP_HOST", 'http://api.hdc100.ph/api.php');
define("MY_HTTP_HOST_URL", 'http://api.hdc100.ph');
define("NEW_KEYB", '11_2');

if (function_exists('date_default_timezone_set')) {
    @date_default_timezone_set('Etc/GMT-8');
}
require_once($_SERVER['DOCUMENT_ROOT']."/src/Hprose.php");

use Hprose\Http\Server;

function getNotice($params){
    $re['param'] = $params;
    $re['code'] = "10000";
    return json_encode($re);
}

$server = new Server();
$server->addFunction('getNotice');
$server->start();

//$params['company'] = SITE_ID;
//$params['note_type'] = "1";
//$re = $clientA->getNotice($params);
//echo json_encode($re);die;






