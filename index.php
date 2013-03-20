<?php
//Configs
require 'config/constants.php';
require 'config/database.php';
require 'config/paths.php';

//This function load all the class content in libs folder
function __autoload($class){
    require LIBS . $class .'.php';
}

$app = new Bootstrap(); //Object of Boostrap