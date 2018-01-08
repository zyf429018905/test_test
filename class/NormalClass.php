<?php
    class NormalClass{
        function getNotice($params){
            $re['param'] = $params;
            $re['code'] = "10000";
            return json_encode($re);
        }
    }
?>