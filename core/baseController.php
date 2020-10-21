<?php

class baseController{

	public function __construct(){
		require_once 'baseEntity.php';
		require_once 'baseModel.php';
		
		foreach(glob("Models/*.php" as $file){
			require_once $file;

		}
	}

	public function view($vista,$datos){
		foreach($datos as $id_assoc => $valor){
			${id_assoc}=$valor;
		}



		require_once 'core/AyudaVistas.php';

		$helper=new AyudaVistas();
		require_once 'View'.$vista.'View.php';
	}


	public function redirect($controller=DEFAULT_CONTROLLER, $action=DEFAULT_ACTION){
		header("Location:index.php?controller=".$controller."&action=".$action);
}

