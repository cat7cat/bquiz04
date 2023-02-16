<?php
include_once "base.php";

$_POST['pr']=serialize($_POST['pr']);

$Admin->save($_POST);
// PR 是陣列 無法直接存進去  要使用這樣 轉進去serialize($_POST['pr']);



?>