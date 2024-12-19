<?php
  session_start();
    require_once 'core/routers.php';
    define('WEBROOT', str_replace("index.php", "", $_SERVER["SCRIPT_NAME"]));
    $router = new Router();
   // echo "Chuỗi file";
  //  echo $_SERVER['REQUEST_URI'];
    $router->dispatch($_SERVER['REQUEST_URI']);

?>

