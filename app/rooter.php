<?php 

require ('../classes/validatorForm.php');

$url=($_GET['url'])??null;

$url=explode("-",filter_var($url,FILTER_SANITIZE_URL));

$ctrl_url=$url[0]??null;
$param1_url=($url[1])??null;
$param2_url=($url[2])??null;

$controller = new Logincontroller();
	$controller->stayCoPart();
	$controller->stayCoOrga();

if($ctrl_url=="contact"){

	$controller= new Contactcontroller();
	$controller->index();
}
else if($ctrl_url=="apropos"){

	$controller= new Aproposcontroller();
	$controller->index();
}
else if($ctrl_url=="evenement"){

	$controller= new Evenementcontroller();
	$controller->index();
}
else if($ctrl_url=="espacepersoentreprise"){
	
	$controller= new EspacePersoEntreprisecontroller(new validatorForm);
	
	if ($param1_url=='newEvent') {
		$controller->createNewEvent();
	}
	$controller->index();
}
else if($ctrl_url=="espacepersoecole"){

	$controller= new EspacePersoEcolecontroller();
	$controller->index();
}
else if($ctrl_url=="espacepersoparticulier"){

	$controller= new EspacePersoParticuliercontroller();
	$controller->index();
}
else if($ctrl_url=="espacepersoparticipant"){

	$controller= new EspacePersoParticipantcontroller();
	$controller->index();
}
else if($ctrl_url=="formations"){

	$controller= new Formationscontroller();
	$controller->index();
}
else if($ctrl_url=="inscriptionPart"){
	
	$controller= new InscriptionsPartcontroller(new validatorForm);
	if ($param1_url=='check') {	
		$controller->inscriptionPart();
	}else{
		$controller->index();
	}
}
else if($ctrl_url=="inscriptionEcole"){
	
	$controller= new InscriptionsEcolecontroller(new validatorForm);
	if ($param1_url=='check') {	
		$controller->inscriptionEcole();
	}else{
		$controller->index();
	}
}
else if($ctrl_url=="inscriptionEntreprise"){
	
	$controller= new InscriptionsEntrcontroller(new validatorForm);
	if ($param1_url=='check') {	
		$controller->inscriptionEntreprise();
	}else{
		$controller->index();
	}
}
else if($ctrl_url=="login"){

	if($param1_url == "organisateur"){
		$controller = new Logincontroller();
		
			$controller->verifIdentidiantsOrga();
		
	}else if($param1_url == "participant"){
	       $controller = new Logincontroller();

			$controller->verifIdentidiantsPart();
	}else{
			$controller= new Logincontroller();
			$controller->index();
	}
}

else if($ctrl_url=="mentionsLegales"){

	$controller= new MentionsLegalescontroller();
	$controller->index();
}
else if($ctrl_url=="deconnexion"){

	$controller= new Deconnexioncontroller();
	$controller->logout();
}
else{

	$controller= new Accueilcontroller();
	$controller->index();
}

?>