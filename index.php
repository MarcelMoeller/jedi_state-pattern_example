<?php
define('BASEPATH', realpath(dirname(__FILE__)));
require_once(BASEPATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

$jedi = new Jedi();
$jedi->run();
$jedi->attack();
$jedi->attack();
$jedi->run();
$jedi->attack();
?>

