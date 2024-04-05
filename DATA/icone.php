<?php 

require "../DATA/db-connect.php";



$query = $dbh -> prepare("SELECT * FROM `techniques_id` 
LEFT JOIN classe ON classe.Id_classe=techniques_id.Id_classe
LEFT JOIN techniques_races ON techniques_races.Id_technique = techniques_id.Id_technique
LEFT JOIN races ON races.Id_race = techniques_races.Id_race
LEFT JOIN factions ON factions.Id_faction= techniques_id.Id_faction
LEFT JOIN noms ON noms.Id_technique = techniques_id.Id_technique
LEFT JOIN icones ON icones.Id_icone=techniques_id.Id_icone");

$query->execute();

$data = $query->fetchAll();


echo(json_encode($data));