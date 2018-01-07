<?php
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
?>





