<?php
global $parm;
$AG['dirs']['app_root']    = dirname(__FILE__) .'/';
$GLOBALS["parm"]['APP_ROOT_DIR'] = $AG['dirs']['app_root'];
include_once('vendor/autoload.php');
include_once('vendor/andro/andromeda/index.php');
