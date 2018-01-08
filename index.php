<?php
require_once(__DIR__."/src/Hprose.php");
use Hprose\Http\Server;
function getNotice($params){
    $re['param'] = $params;
    $re['code'] = "10000";
    return json_encode($re);
}
$server = new Server();
$server->addFunction('getNotice');
$server->start();
?>





