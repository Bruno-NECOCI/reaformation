<?php

class Formationscontroller extends Controller{


	private $formations;

	public function __construct(){

		$this->formations = new FormationModel();
	}

	public function details(){

		return $this->formations->getDetails();
	}
	public function resume(){

		return $this->formations->getResumeFormation();
	}

	public function index()
	{
		
        $this->render('formations');

	} 

}