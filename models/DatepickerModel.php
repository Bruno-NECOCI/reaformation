<?php 

$dsn = 'mysql:dbname=reaformation;host=127.0.0.1';
$user = "root";
$password = "";

$pdo = new PDO($dsn,$user,$password);

$Tabs = $pdo->query("SELECT date FROM evenement")->fetchAll(PDO::FETCH_ASSOC);

$transition = [];

    for ($i=0; $i < count($Tabs) ; $i++) { 
        
        $dateOriginal = $Tabs[$i]['date'];
		
        // var_dump($dateOriginal);
    
        array_push($transition, $dateOriginal);
        
    }

    $dateTabs = [];

    for ($i=0; $i < count($transition) ; $i++) { 
        
        $dateModifie = preg_replace(
            '#([[:digit:]]{2})/([[:digit:]]{2})/([[:digit:]]{4})#', 
            "$1-$2-$3", $transition[$i]);

            array_push($dateTabs, $dateModifie);

        }
        
    var_dump($dateTabs);

json_encode($dateTabs);



