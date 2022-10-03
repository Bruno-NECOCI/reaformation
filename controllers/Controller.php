<?php

abstract class Controller{

	//Chemin vers les vues
	private $chemin="../views/";
	private $template="../views/template/default.php";

	protected function render($view, $variables=[]){

		ob_start();

		//Extrait les variables passées à render
		extract($variables);

		require($this->chemin.$view.'.php');

		$contenu = ob_get_clean();

		//require($this->template);
		require($this->chemin."/template/default.php");


	}

}