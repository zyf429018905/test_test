<?php
require_once($_SERVER['DOCUMENT_ROOT']."/src/Hprose.php");
use Hprose\Http\Server;

function getNotice($params){
    $re['param'] = $params;
    $re['code'] = "10000";
    echo json_encode($re);
}

$server = new Server();
$server->addFunction('getNotice');
$server->start();

?>





