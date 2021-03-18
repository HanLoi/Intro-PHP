<?php 

$me = [
    "firstname" => "Loïc",
    "lastname"=> "Hannecart",
    "hobbie" => array('histoire','science','jeux vidéo')
];

$soulmate =[
    "firstname" => "mon_ordi",
    "lastname"=> "pc_master_race",
    "hobbie" => array('ventiller','calculer des données','afficher des jeux')
];

$combine=array_combine($me["hobbie"], $soulmate["hobbie"]);

$fusion = array_merge($me["hobbie"],$soulmate["hobbie"]);

$remplace = array_replace($me["hobbie"],$soulmate["hobbie"]);

echo '<pre>';
print_r($remplace);
print_r($combine);
print_r($fusion);
echo '</pre>';