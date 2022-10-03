<?php 

class LoginModel extends Database{

    private $db;

	public function __construct()
	{
		$this->db=new Database();
	}
	public function checkOrgaExist($admin)
	{
		return $this->db->query("SELECT count(id) as result FROM organisateur WHERE login=?",[$admin])->fetch()->result;
    }
	public function updateSession($admin){
		$this->db->query("UPDATE organisateur SET session =? WHERE login=? ",[session_id(), $admin]);
	}
	public function getIdentifiantOrga($admin)
	{
		return $this->db->query("SELECT  login, mdp, type_client as type  FROM organisateur WHERE login=?",[$admin])->fetch();
    }
	public function getInfosPart($admin)
	{
		return $this->db->query(
			"SELECT 
		
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
		WHERE login = ?",[$admin])->fetch();

	}

	public function getInfosEcole($admin)
	{
		return $this->db->query(
			
		"SELECT 
		organisateur.nom as nom, 
		prenom, 
		login, 
		type_client as type, 
		infos_ecole.nom as nom, 
		adresse, 
		mail, 
		tel, 
		uai
		FROM organisateur 
		INNER JOIN infos_ecole
		ON organisateur.id = infos_ecole.id_orga 
		WHERE login = ?",[$admin])->fetch();
    }

	public function getInfosEntr($admin)
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
		WHERE login = ?",[$admin])->fetch();

	}

	public function checkParticipantExist($admin)
	{
		return $this->db->query("SELECT count(id) as result FROM participants WHERE login=?",[$admin])->fetch()->result;
    }

	public function getIdentifiantPart($admin)
	{
		return $this->db->query("SELECT  login, mdp, nom, prenom, date, token FROM participants WHERE login=?",[$admin])->fetch();
    }

}