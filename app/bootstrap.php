<?php
  //load config
  require_once('config/config.php');

  
  //auto load core class
 spl_autoload_register(function($className){
  require_once 'libraries/'.$className.'.php';
 });