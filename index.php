<?php
global $parm, $AG;
$parm['APP_ROOT_DIR'] = dirname(__FILE__) . DIRECTORY_SEPARATOR;
$AG['dirs']['app_root'] = $parm['APP_ROOT_DIR'];
var_dump($parm);
require_once('vendor' .DIRECTORY_SEPARATOR . 'autoload.php');
require_once('vendor' .DIRECTORY_SEPARATOR . 'andro' . DIRECTORY_SEPARATOR . 'andromeda' . DIRECTORY_SEPARATOR . 'index.php');
