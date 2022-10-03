<?php 

class InscriptionsModel extends Database{

    private $db;

	public function __construct()
	{
		$this->db=new Database();
	}
	
	public function insertInfoPart($nom,$prenom, $type_client,$identifiant, $mdpHash, $adresse, $mail,$tel){
		$this->db->query("INSERT INTO organisateur SET nom= ?, prenom=?, type_client=?, login=?, mdp= ? ",[$nom, $prenom, $type_client, $identifiant, $mdpHash]);
		$this->db->query("INSERT INTO infos_particulier SET adresse= ?, mail=?, tel=?, id_orga= LAST_INSERT_ID() ",[$adresse, $mail, $tel]);
	}
	public function insertInfoEntr($nom,$prenom, $type_client,$identifiant, $mdpHash, $adresse, $mail, $tel, $siret, $nom_entreprise){
		$this->db->query("INSERT INTO organisateur SET nom= ?, prenom=?, type_client=?, login=?, mdp= ? ",[$nom, $prenom, $type_client, $identifiant, $mdpHash]);
		$this->db->query("INSERT INTO infos_entreprises SET adresse= ?, mail=?, tel=?, siret= ?, nom=?, id_orga= LAST_INSERT_ID() ",[$adresse, $mail, $tel, $siret, $nom_entreprise]);
	}
	public function insertInfoEcole($nom,$prenom, $type_client,$identifiant, $mdpHash, $adresse, $mail, $tel, $uai, $nom_ecole){
		$this->db->query("INSERT INTO organisateur SET nom= ?, prenom=?, type_client=?, login=?, mdp= ? ",[$nom, $prenom, $type_client, $identifiant, $mdpHash]);
		$this->db->query("INSERT INTO infos_ecole SET adresse= ?, mail=?, tel=?, uai=?, nom=?, id_orga= LAST_INSERT_ID()  ",[$adresse, $mail, $tel, $uai, $nom_ecole]);
	}
}

