<?php

class EspacePersoEntreprisecontroller extends Controller{

	public function __construct(private validatorForm $validatorform){

		$this->entreprise = new EntrepriseModel();

	}

	protected $errorFormEntr =[];

	public function createNewEvent(){

		if (isset($_POST)) {
			strip_tags(extract($_POST));
		}

		if (isset($type_formation)) {
			$id_formation = explode(" ",$type_formation)[1];
			
		}else{
			$id_formation = "";
		}

		$regexNom = "/^(?:nom-part-)[1-9]{1,2}$/";
		$regexPrenom = "/^(?:prenom-part-)[1-9]{1,2}$/";
		$regexDate = "/^(?:date_naissance-)[1-9]{1,2}$/";
		
		$tabsNom = [];
		$tabsPrenom = [];
		$tabsDate = [];

		foreach ($_POST as $key => $value)
		{ 
			if (preg_match($regexNom, $key ) == true) {
				
				array_push($tabsNom, $value);
			}
			if (preg_match($regexPrenom, $key ) == true) {
				
				array_push($tabsPrenom, $value);
			}
			if (preg_match($regexDate, $key ) == true) {
				
				$original_date = $value;
 
				// Creating timestamp from given date
				$timestamp = strtotime($original_date);
				
				// Creating new date format from that timestamp
				$date = date("d-m-Y", $timestamp);
				
				array_push($tabsDate, $date);

			}
		}

		$errorFormEntr[] = $this->validatorform->checkTabsNom($tabsNom);
		$errorFormEntr[] = $this->validatorform->checktabsPrenom($tabsPrenom);
		$errorFormEntr[] = $this->validatorform->checkTabsDate($tabsDate); 
		$errorFormEntr[] = $this->validatorform->checkIdFormation($id_formation);
		$errorFormEntr[] = $this->validatorform->checkDetails($details);

		$check = "";
		for ($i=0; $i < count($errorFormEntr) ; $i++) { 
			if ($errorFormEntr[$i] != NULL) {
				$check .= $i ;
			}
		}

		if ($check != "") {
			
			$errorFormEntr;
			$data = $this->entreprise->getInfosEntr();
			$this->render('espacePersoEntreprise', compact('errorFormEntr', 'data'));
			
		}else{


			$this->entreprise->createNewEvent($id, $id_formation, $datepicker, $details);
			$result = $this->entreprise->lastCreateEvent();
			$idLastEvent = $result->id;
			$this->entreprise->addParticipants($tabsNom, $tabsPrenom, $tabsDate, $idLastEvent);
			$this->render('evenement');

		}

	} 
	
	public function index()
	{

		if($_SESSION['connected'] == 1){
			$data = $this->entreprise->getInfosEntr();
			$errorFormEntr = null;
			$this->render('espacePersoEntreprise', compact('data','errorFormEntr'));
		}

        // $this->render('espacePersoEntreprise');

	} 

}