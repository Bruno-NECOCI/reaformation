<?php 

class EcoleModel extends Database{

    private $db;

	public function __construct()
	{
		$this->db=new Database();
		
	}

	public function getInfosEcole()
	{
		return $this->db->query("SELECT 
		
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