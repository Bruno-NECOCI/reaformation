<?php 

class EntrepriseModel extends Database{

    private $db;

	public function __construct()
	{
		$this->db=new Database();
		
	}

	public function createNewEvent($id, $id_formation, $datepicker, $details)
	{
		$this->db->query("INSERT INTO evenement SET id_client=?, id_formation=?, date= ?, message=?, etat='new'",[$id, $id_formation, $datepicker, $details]);
		
	}

	public function lastCreateEvent(){

		return $this->db->query("SELECT id FROM evenement ORDER BY id DESC LIMIT 1")->fetch();
	}
	
	public function addParticipants($tabsNom, $tabsPrenom, $tabsDate, $idLastEvent){
		
		for ($i=0; $i < count($tabsNom) ; $i++) { 
			
			$this->db->query("INSERT INTO participants SET nom=?, prenom=?, date= ?, id_event= ?",[$tabsNom[$i], $tabsPrenom[$i], $tabsDate[$i], $idLastEvent]);
		}
	
	}

	public function getInfosEntr()
	{
		return $this->db->query("SELECT 
		
		organisateur.id as idOrga,
		organisateur.nom as nom, 
		prenom, 
		login, 
		type_client as type, 
		infos_entreprises.nom as entreprise, 
		adresse, 
		mail, 
		tel, 
		siret 
		FROM organisateur 
		INNER JOIN infos_entreprises 
		ON organisateur.id = infos_entreprises.id_orga 
		WHERE session = ?",[session_id()])->fetch();

	}
	

}