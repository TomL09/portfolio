<section id="contact">
    <div class=accueil>
<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('fichieryaml/Contact.yaml');

echo "<h2>Contact</h2>\n";
$Contact=$data["Contact"] ;
echo "<p>".ucfirst($contact["email"])."</p>\n";
echo "<p>".ucfirst($contact["numéro"])."</p>\n";
?>