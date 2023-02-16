<?php
include_once "base.php";

$chk=$Mem->count(['acc'=>$_GET]);

if($chk>0){
    echo 1;
}else{
    echo 0;
}

// 精簡寫法
// ehco $Mem->count(['acc' => $_GET]);


?>