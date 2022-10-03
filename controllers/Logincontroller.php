<?php

class Logincontroller extends Controller{

	public function __construct(){

		$this->login = new LoginModel();
	}
	
 	public function connected(){
		if(!empty($_SESSION['connected'])){
			return true;
		}else{
			return false;
		}
	}

	public function verifIdentidiantsOrga(){
	
		$admin = $_POST['login'] ?? null; 
		$mdp = $_POST['mdp'] ?? null;
		
		$check = $this->login->checkOrgaExist($admin);

		$errorFormOrga = null; 

		if($check == 1 ){
			$ID = $this->login->getIdentifiantOrga($admin);
			if($ID->login === $admin && password_verify($mdp, $ID->mdp) == true){
				
				$this->login->updateSession($admin);
				
				$_SESSION['connected'] = 1;

				if ($ID->type == "ecole"){
					$_SESSION['view'] = "espacePersoEcole";
					$data = $this->login->getInfosEcole($admin);
					$errorFormEntr = null;
					$this->render('espacePersoEcole', compact('data','errorFormEntr'));
				}else if($ID->type == "entreprise"){
					$_SESSION['view'] = "espacepersoentreprise";
					$data = $this->login->getInfosEntr($admin);
					$errorFormEntr = null;
					$this->render('espacePersoEntreprise', compact('data','errorFormEntr'));
				}elseif ($ID->type == "particulier"){
					$_SESSION['view'] = "espacepersoparticulier";
					$data = $this->login->getInfosPart($admin);
					$errorFormEntr = null;
					$this->render('espacePersoParticipant', compact('data','errorFormEntr'));
				}
			}else{
				$errorFormOrga = "Ce ne sont pas les bons identifiants";
				$errorFormPart = null;
				$this->render('login', compact('errorFormPart', 'errorFormOrga'));
			}
		}else if($admin == null || $mdp == null){
				$errorFormOrga = "Veuillez remplir tous les champs ";
				$errorFormPart = null;
				$this->render('login', compact('errorFormPart', 'errorFormOrga'));

		}

		if (isset($_POST['rememberorga'])) {
			setcookie('authId', $data->identifiant, time() + 3600 * 24 * 30, '/', 'localhost', false, true); 
			setcookie('authMdp', $data->mdp, time() + 3600 * 24 * 30, '/', 'localhost', false, true);
		}

	}
	public function verifIdentidiantsPart(){
		
		$login = $_POST['login'] ?? null; 
		$mdp = $_POST['mdp'] ?? null;
		$token = $_POST['token'] ?? null;

		$check = $this->login->checkParticipantExist($login);
		
		$errorFormPart = null; 

		if($check == 1 ){
			$data = $this->login->getIdentifiantPart($login);
			// if($data->identifiant === $admin && password_verify($mdp, $data->mdp) == true){
			if($data->login == $login && $data->mdp == $mdp &&  $data->token == $token){
				$_SESSION['connected'] = 1;
				$_SESSION['view'] = "espacepersoparticipant";
			}else {
				$errorFormPart = "Ce ne sont pas les bons identifiants";
				$errorFormOrga = null;
				$this->render('login', compact('errorFormPart', 'errorFormOrga'));
			}
		}else if($login == null || $mdp == null){
			$errorFormPart = "Veuillez remplir tous les champs ";
			$errorFormOrga = null;
			$this->render('login', compact('errorFormPart', 'errorFormOrga'));

		}

		if (isset($_POST['rememberpart'])) {
			setcookie('authId', $data->login, time() + 3600 * 24 * 30, '/', 'localhost', false, true); 
			setcookie('authMdp', $data->mdp, time() + 3600 * 24 * 30, '/', 'localhost', false, true);
			setcookie('authToken', $data->token, time() + 3600 * 24 * 30, '/', 'localhost', false, true);
		}
		
	}
		
	public function stayCoOrga(){

			if (!isset($_SESSION['connected']) && empty($_SESSION['connected']) && isset($_COOKIE['authId'], $_COOKIE['authMdp']) && !empty($_COOKIE['authId']) && !empty($_COOKIE['authMdp'])){
				$data = $this->login->getIdentifiantOrga($_COOKIE['authId']);
				if($data->login === $_COOKIE['authId'] && $data->mdp == $_COOKIE['authMdp']){
					$_SESSION['connected'] = 1;
					if ($data->type == "ecole") {
						$_SESSION['view'] = "espacePersoEcole";
						$this->render('espacepersoecole');
					}else if($data->type == "entreprise"){
						$_SESSION['view'] = "espacepersoentreprise";
						$this->render('espacePersoEntreprise');
					}elseif ($data->type == "particulier") {
						$_SESSION['view'] = "espacepersoparticulier";
						$this->render('espacePersoParticipant');
					}
				}
			}
		}
		
	public function stayCoPart(){

			if (!isset($_SESSION['connected']) && empty($_SESSION['connected']) && isset($_COOKIE['authId'], $_COOKIE['authMdp'], $_COOKIE['authToken']) && !empty($_COOKIE['authId']) && !empty($_COOKIE['authMdp']) && !empty($_COOKIE['authToken'])){
				$data = $this->login->getIdentifiantPart($_COOKIE['authId']);
				if($data->login === $_COOKIE['authId'] && $data->mdp == $_COOKIE['authMdp'] && $data->token == $_COOKIE['authToken']){
					$_SESSION['connected'] = 1;
					$_SESSION['view'] = "espacepersoparticipant";
				}
			}
		}

	public function index()
	{
		$errorFormPart = null;
		$errorFormOrga = null;
		$this->render('login', compact('errorFormPart', 'errorFormOrga'));
	} 


}

