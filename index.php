<?php
session_start();
define('BASEPATH', realpath(dirname(__FILE__)));
require_once(BASEPATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');
if (isset($_SESSION["jedi"]) && !empty($_SESSION["jedi"])) {
    $jedi = unserialize($_SESSION["jedi"]);
} else {
    $jedi = new Jedi();
}
?>
<html>
<header>
    <meta charset="UTF-8">
    <title>State pattern - Jedi example</title>
</header>
<body>
<div style="display: flex;">
    <div style="width: 30%;">
        <?php
        switch ($_GET["action"]) {
            case "1":
                $jedi->run();
                break;
            case "2":
                $jedi->rest();
                break;
            case "3":
                $jedi->attack();
                break;
            case "4":
                $jedi = new Jedi();
                break;
        }
        $jedi->showState();
        ?>
        <form>
            <button name="action" value="1">Run</button>
            <button name="action" value="2">Rest</button>
            <button name="action" value="3">Attack</button>
            <button name="action" value="4">Reset</button>
        </form>
    </div>
    <div style="width: 70%">
        <img style="width: 100%; height: auto;" src="./assets/images/JediExample.PNG"/>
    </div>
</div>
</body>
</html>
<?php
$_SESSION["jedi"] = serialize($jedi);

?>
