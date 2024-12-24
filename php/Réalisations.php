<?php
$realisationData = yaml_parse_file('fichieryaml/Réalisation.yaml');
?>


<section id="réalisations">
    <div class="accueil">
        <h2>Réalisation</h2>
        <?php
        $Réalisation = $realisationData["Réalisation"];
        echo "<h3>" . $Réalisation["titre"] . "</h3>\n";
        foreach ($Réalisation['projets'] as $projet) {
            echo "<p>" . $projet['titre'] . "</p>";
            echo "<ul>";
            foreach ($projet["technos"] as $techno) {
                echo "<li>" . $techno . "</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</section>