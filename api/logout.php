<?php
include_once "base.php";

// switch($_GET['table']){
//     case 'mem':
//         unset($_SESSION['mem']);
//     break;
//     case 'admin':
//         unset($_SESSION['admin']);
//     break;
// }

// 簡寫
unset($_SESSION[$_GET['table']]);


to('../index.php');


?>