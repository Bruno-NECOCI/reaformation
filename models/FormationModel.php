<?php 

class FormationModel extends Database{

    private $db;

	public function __construct()
	{
		$this->db=new Database();
		
	}
	
	public function getDetails()
	{
		return $this->db->query("SELECT id, contenu FROM details_client")->fetchAll();
        
	}
	public function getImg()
	{
		return $this->db->query("SELECT id, nom, alt FROM formations_img")->fetchAll();
        
	}
	public function getResumeFormation()
	{
		return $this->db->query("SELECT id, contenu, titre FROM formations_resume")->fetchAll();
        
	}
	
}