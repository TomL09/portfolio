<section id="formation">
	<div class=accueil>
<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('fichieryaml/Formation.yaml');

echo "<h2>Formations</h2>\n";
$Formations=$data["Formations"] ;
echo "<p>".ucfirst($Formations["Etudes"])."</p>\n";
echo "<p>".ucfirst($Formations["etude1"])."</p>\n";
echo "<p>".ucfirst($Formations["etude2"])."</p>\n";

?>