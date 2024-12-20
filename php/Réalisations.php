<section id="réalisations">
	<div class=accueil>
<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('fichieryaml/Réalisation.yaml');

echo "<h2>Réalisation</h2>\n";
$Réalisation=$data["Réalisation"] ;
echo "<p>".ucfirst($Réalisation["Projets"])."</p>\n";

?>