<?php
// This file generated by Propel 1.6.9 convert-conf target
// from XML runtime conf file /Users/reneklatt/www/newtree/project/Generated/Zed/PropelGen/US/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'zed' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=10.10.0.34;port=3306;dbname=newtree',
        'user' => 'root',
        'password' => 'root',
        'settings' => 
        array (
          'charset' => 
          array (
            'value' => 'utf8',
          ),
        ),
        'options' => 
        array (
          'MYSQL_ATTR_INIT_COMMAND' => 
          array (
            'value' => 'SET NAMES utf8 COLLATE utf8_general_ci',
          ),
        ),
      ),
    ),
    'default' => 'zed',
  ),
  'generator_version' => '1.6.9',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-zed-conf.php');
return $conf;