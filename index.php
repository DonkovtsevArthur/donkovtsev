<?php
session_start();
// конфиг сайта
include './config.php';
include './valireibls.php';

// роутер
include '/modules/'.$_GET['modules'].'/'.$_GET['page'].'.php';
include '/skin/'.SKIN.'/index.tpl';

?>