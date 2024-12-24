<?php
$formationsData = yaml_parse_file('fichieryaml/Formation.yaml');
?>


<section id="formation">
    <div class="accueil">
        <h2>Formations</h2>
        <?php
        $Formations = $formationsData["Formations"];
        echo "<h3>" . $Formations["titre"] . "</h3>\n";
        echo "<ul>";
        foreach ($Formations["etudes"] as $etude) {
            ?>
             <li> <?=$etude?> </li>
        <?php
        }
        echo "</ul>";
        ?>
    </div>
</section>