<?php
define('BASEPATH', realpath(dirname(__FILE__)));
require_once(BASEPATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

$jedi = new Jedi();
$jedi->showState();
$jedi->run();
$jedi->showState();
$jedi->attack();
$jedi->showState();
$jedi->attack();
$jedi->showState();
$jedi->run();
$jedi->showState();
$jedi->attack();
$jedi->showState();
?>

