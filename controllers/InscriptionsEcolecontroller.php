<?php

class InscriptionsEcolecontroller extends Controller{

	
	public function __construct(
	private validatorForm $validatorform
		){
			
			$this->inscription = new InscriptionsModel();
			
		}
		
	protected $errorFormEcole =[];

	public function inscriptionEcole(){
		
		if (isset($_POST)) {
			strip_tags(extract($_POST));
		}

		$errorFormEcole[] = $this->validatorform->checkPrenom($prenom);
		$errorFormEcole[] = $this->validatorform->checkNom($nom);
		$errorFormEcole[] = $this->validatorform->checkLogin($identifiant);
		$errorFormEcole[] = $this->validatorform->checkMdp($mdp);
		$errorFormEcole[] = $this->validatorform->checkConfirmMdp($mdpConfirm,$mdp);
		$errorFormEcole[] = $this->validatorform->checkAdress($nom_ecole);
		$errorFormEcole[] = $this->validatorform->checkAdress($adresse);
		$errorFormEcole[] = $this->validatorform->checkEmail($mail);
		$errorFormEcole[] = $this->validatorform->checkTel($tel);
		$errorFormEcole[] = $this->validatorform->checkUAI($uai);

		$check = "";
		for ($i=0; $i < count($errorFormEcole) ; $i++) { 
			if ($errorFormEcole[$i] != NULL) {
				$check .= $i ;
			}
		}

		if ($check != "") {

			$this->render('inscriptionEcole', compact('errorFormEcole'));
			
		}else{

			$mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
			$type_client = "particluier";

			$this->inscription->insertInfoEcole($nom,$prenom, $type_client,$identifiant, $mdpHash, $adresse, $mail, $tel, $nom_ecole);
			header("location:login");

		}

	}

	public function index()
	{
		$errorFormPart = null;
		$errorFormEcole = null;
		$errorFormEntr = null;
        $this->render('inscriptionEcole', compact('errorFormEcole'));

	} 

}