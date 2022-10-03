<?php

class InscriptionsEntrcontroller extends Controller{

	
	public function __construct(
	private validatorForm $validatorform
		){
			
			$this->inscription = new InscriptionsModel();
			
		}
		

	protected $errorFormEntr =[];

	public function inscriptionEntreprise(){
		
		if (isset($_POST)) {
			strip_tags(extract($_POST));
		}

		$errorFormEntr[] = $this->validatorform->checkNom($nom);
		$errorFormEntr[] = $this->validatorform->checkPrenom($prenom);
		$errorFormEntr[] = $this->validatorform->checkLogin($identifiant);
		$errorFormEntr[] = $this->validatorform->checkMdp($mdp);
		$errorFormEntr[] = $this->validatorform->checkConfirmMdp($mdpConfirm,$mdp);
		$errorFormEntr[] = $this->validatorform->checkNomEntreprise($nom_entreprise);
		$errorFormEntr[] = $this->validatorform->checkAdress($adresse);
		$errorFormEntr[] = $this->validatorform->checkEmail($mail);
		$errorFormEntr[] = $this->validatorform->checkTel($tel);
		$errorFormEntr[] = $this->validatorform->checkSiret($siret);

		$check = "";
		for ($i=0; $i < count($errorFormEntr) ; $i++) { 
			if ($errorFormEntr[$i] != NULL) {
				$check .= $i ;
			}
		}

		if ($check != "") {

			$this->render('inscriptionEntreprise', compact('errorFormEntr'));
			
		}else{

			$mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
			$type_client = "entreprise";

			$this->inscription->insertInfoEntr($nom,$prenom, $type_client,$identifiant, $mdpHash, $adresse, $mail,$tel,$siret, $nom_entreprise);
			header("location:login");

		}

	}
	
	public function index()
	{
		$errorFormEntr = null;
        $this->render('inscriptionEntreprise', compact('errorFormEntr'));

	} 

}