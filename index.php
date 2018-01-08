<?php
require_once(__DIR__."/src/Hprose.php");
require_once(__DIR__."/class/NormalClass.php");
use Hprose\Http\Server;
function logErrors($error){//记录错误日志
//    $log = new LogClass();
//    $log->logErrorToFile($error);
}
function myAfter($name, $args, $byref, $result){//记录方法调用日志
    unset($byref);
//    $log = new LogClass();
//    $log->logUserControlToFile($name, $args, $result);
//    $log->logUserControlToDb($name, $args, $result);
}
function myBefore($name, $args, $byref){//用户操作日志
    unset($byref);
    //$log = new LogClass();
    //$log->logUserControlToDb($name, $args);
}
$server = new Server();
$normal = new NormalClass();

$server->addInstanceMethods($normal);
//$server->addFunction('hello');
$server->start();
?>





