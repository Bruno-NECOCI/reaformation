<?php

class EspacePersoParticuliercontroller extends Controller{


	public function __construct(){

		$this->entreprise = new ParticulierModel();
	}

	public function index()
	{

		if($_SESSION['connected'] == 1){
			$data = $this->entreprise->getInfosPart();
			$this->render('espacePersoParticulier', compact('data'));
		}

        $this->render('espacePersoParticulier');

	} 
}