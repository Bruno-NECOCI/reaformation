<?php 

class AproposModel extends Database{

    private $db;

	public function __construct()
	{
		$this->db=new Database();
		
	}
	
	public function getText()
	{
		return $this->db->query("SELECT id, contenu FROM text WHERE sujet = 'apropos'")->fetch()->contenu;
        
	}
	public function getImg()
	{
		return $this->db->query("SELECT id, nom, alt FROM images WHERE page = 'apropos' ")->fetch();
        
	}
}