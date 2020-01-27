<?php
// måste lägga till rewrite_module i apache modules
session_start();
header('Content-type: text/html; charset=utf-8');
$URI_parsed = parse_url($_SERVER['REQUEST_URI']);
$URI_parts  = explode('/', $URI_parsed['path']);
error_reporting(E_ALL);
print_r ($URI_parts);
require "topview.php";
require "menuview.php";
require "bottomview.php";
require "article_startview.php";
require "article_omview.php";
require_once "dbconnect.php";
require "postmodel.php";
require "postview.php";

if($URI_parts[3]==null || $URI_parts[3]==""){
  
  header('Location: /webbserver1920/mvctemplate/start');
  exit;
  
}

if ($URI_parts[3] == 'start'){
  
  top();
  menu();
  //article_start(null);
  postview();
  bottom();
  
}else if ($URI_parts[3] == 'om'){
  
  top();
  menu();
  article_om();
  bottom();
  
}
else{
  header("HTTP/1.0 404 Not Found");
  echo"sökta sidan finns inte";
  
}
