<?php

require_once 'config/global.php';

require_once 'core/baseController.php';

require_once 'core/frontalController.func.php;';

if(isset($_GET['controller'])){
	$controllerObj=loadController($_GET['controller']);

}else{
	$controllerObj=loadController(DEFAULT_CONTROLLER);
}
launchAction($controllerObj);

