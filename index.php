<?php

//On démarre la session
session_start();

include_once ('_config.php');
MyAutoload::start();

if(!empty($_GET['path'])){
  $path = $_GET['path'];
}else{
  $path="";
}

$params = $_GET;
$router = new Router($path, $params);
$router->renderController();
