<?php

class Testcontroller extends Controller{

	
	public function __construct(){

		$this->date = new DatepickerModel();

	}


	public function date()
	{
		$Tabs = $this->date->getDates();

		// echo '<pre>';
		// var_dump($Tabs);
		// echo '</pre>';


		$transition = [];

		// foreach ($Tabs as $obj) {
        //     array_push($dates, $obj->date);
        // }

		for ($i=0; $i < count($Tabs) ; $i++) { 
        
			$dateOriginal = $Tabs[$i]['date'];
					
			    // var_dump($dateOriginal);
				
			array_push($transition, $dateOriginal);
					
		}

		// echo '<pre>';
		// var_dump($dates);
		// echo '</pre>';
		// echo '<pre>';
		// var_dump($transition);
		// echo '</pre>';

		$dateTabs = [];

    	for ($i=0; $i < count($transition) ; $i++) { 
        
        $dateModifie = preg_replace(
            '#([[:digit:]]{2})/([[:digit:]]{2})/([[:digit:]]{4})#', 
            "$1-$2-$3", $transition[$i]);

            array_push($dateTabs, $dateModifie);

        }

		return $dateTabs;

		echo '<pre>';
		var_dump($dateTabs);
		echo '</pre>';


	} 
	public function index()
	{
		$dates = $this->date();
        $this->render('test', compact('dates'));

	} 

}