<?php

include_once './Config/Config.php';
include_once './Libraries/Core/Autoload.php';
include_once 'Controllers/ErrorsController.php';

$url = !empty($_GET['url']) ? $_GET['url'] : 'login/index';
$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$arrUrl = explode("/", $url);

$controller = ucfirst($arrUrl[0]) . "Controller";
$method = "";
$params = "";

if (isset($arrUrl[1])) {
  $method = $arrUrl[1];
}else{
  $method = "index";
}

if (isset($arrUrl[2])) {

  for ($i = 2; $i < count($arrUrl); $i++) {
    $params .= $arrUrl[$i] . ",";
  }

  $params = rtrim($params, ",");
}


$controllerFile = "Controllers/" . $controller . ".php";

if (file_exists($controllerFile)) {

  include_once $controllerFile;
  $controller = new $controller();

  if (method_exists($controller, $method)) {

    $params != "" ? $controller->$method($params) : $controller->$method();
  } else {
    $errors = new ErrorsController();
    $errors->index();
  }
  
} else {
  $errors = new ErrorsController();
  $errors->index();

}



