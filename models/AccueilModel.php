<?php 

class AccueilModel extends Database{

    private $db;

	public function __construct()
	{
		$this->db=new Database();
		
	}
	
	public function getSpeach()
	{
		return $this->db->query("SELECT id, contenu FROM text WHERE sujet = 'speach'")->fetch()->contenu;
        
	}
	public function getExplication()
	{
		return $this->db->query("SELECT id, contenu FROM text WHERE sujet = 'explication'")->fetch()->contenu;
        
	}
	public function getImg()
	{
		return $this->db->query("SELECT id, nom, alt FROM images WHERE page = 'accueil' AND active = 1")->fetch();
        
	}
	public function getFlipCard()
	{
		return $this->db->query("SELECT id, chiffre, contenu FROM flip_card")->fetchAll();
        
	}
}