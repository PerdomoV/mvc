<?php

class AyudaVistas{
	public function url($controller=DEFAULT_CONTROLLER, $action=DEFAULT_ACTION){
		$urlString="index.php?controller=".$controller."&action=".$action);
		return $urlString;

	}


}
}
