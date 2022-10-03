<?php

class InscriptionsPartcontroller extends Controller{

	
	public function __construct(private validatorForm $validatorform){
			
			$this->inscription = new InscriptionsModel();
			
		}
		
	protected $errorFormPart =[];

	public function inscriptionPart(){


		if (isset($_POST)) {

			strip_tags(extract($_POST));

		}

		$errorFormPart[] = $this->validatorform->checkNom($nom);
		$errorFormPart[] = $this->validatorform->checkPrenom($prenom);
		$errorFormPart[] = $this->validatorform->checkLogin($identifiant);
		$errorFormPart[] = $this->validatorform->checkMdp($mdp);
		$errorFormPart[] = $this->validatorform->checkConfirmMdp($mdpConfirm,$mdp);
		$errorFormPart[] = $this->validatorform->checkAdress($adresse);
		$errorFormPart[] = $this->validatorform->checkEmail($mail);
		$errorFormPart[] = $this->validatorform->checkTel($tel);

		$check = "";
		for ($i=0; $i < count($errorFormPart) ; $i++) { 
			if ($errorFormPart[$i] != NULL) {
				$check .= $i ;
			}
		}

		if ($check != "") {

			$this->render('inscriptionPart', compact('errorFormPart'));
			
		}else{

			$mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
			$type_client = "particluier";

			$this->inscription->insertInfoPart($nom,$prenom, $type_client,$identifiant, $mdpHash, $adresse, $mail,$tel);
			header("location:login");

		}

	}
	
	public function index()
	{
		$errorFormPart = null;
        $this->render('inscriptionPart', compact('errorFormPart'));

	} 

}