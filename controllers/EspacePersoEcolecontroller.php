<?php

class EspacePersoEcolecontroller extends Controller{


	public function __construct(){

		$this->entreprise = new EcoleModel();
	}


	public function index()
	{

		if($_SESSION['connected'] == 1){
			$data = $this->entreprise->getInfosEcole();
			$this->render('espacePersoEcole', compact('data'));
		}

        $this->render('espacePersoEcole');

	} 


}