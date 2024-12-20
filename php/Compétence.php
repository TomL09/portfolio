<section id="compétence">
	<div class=accueil>
<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('fichieryaml/Compétences.yaml');

echo "<h2>Competence</h2>\n";
$Competence=$data["Competence"] ;
echo "<p>".ucfirst($Competence["domaines1"])."</p>\n";
echo "<p>".ucfirst($Competence["item"])."</p>\n";
?>