<?php 

class ParticulierModel extends Database{

    private $db;

	public function __construct()
	{
		$this->db=new Database();
		
	}

	public function getInfosPart()
	{
		return $this->db->query("SELECT 
		
		organisateur.nom as nom, 
		prenom, 
		login, 
		type_client as type, 
		adresse, 
		mail, 
		tel, 
		FROM organisateur 
		INNER JOIN infos_particulier
		ON organisateur.id = infos_particulier.id_orga 
		WHERE session = ?",[session_id()])->fetch();

	}

}