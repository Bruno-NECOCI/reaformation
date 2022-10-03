<?php

class Accueilcontroller extends Controller{


	private $accueil;


	public function __construct(){

		$this->accueil = new AccueilModel();
	}

	public function speach(){
		
		return $this->accueil->getSpeach();
	}
	public function explication(){
		
		return $this->accueil->getExplication();
	}
	public function img(){
		
		return $this->accueil->getImg();
	}
	public function flipCard(){
		
		return $this->accueil->getFlipCard();
	}

	public function index()
	{
		$accueil_img = $this->img();
		$accueil_flipCard = $this->flipCard();
		$accueil_speach = $this->speach();
		$accueil_exp = $this->explication();
        $this->render('accueil', compact('accueil_speach', 'accueil_exp', 'accueil_img', 'accueil_flipCard'));
	} 

}