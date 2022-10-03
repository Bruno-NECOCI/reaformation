<?php

class Aproposcontroller extends Controller{

	private $a_ropos;

	public function __construct(){

		$this->a_propos = new AproposModel();
	}

	public function contenu(){
		
		return $this->a_propos->getText();
	}
	public function img(){
		
		return $this->a_propos->getImg();
	}

	public function index()
	{
		$a_propos_text = $this->contenu();
		$a_propos_img = $this->img();

        $this->render('apropos', compact('a_propos_text', 'a_propos_img'));
	} 

}