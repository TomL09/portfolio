<?php
$competencesData = yaml_parse_file('fichieryaml/Compétences.yaml');
?>

<section id="compétence">
    <div class="accueil">
        <h2>Compétences</h2>
        <?php
        $Competence = $competencesData["Competence"];
        foreach ($Competence['domaines'] as $domaine) {
            echo '<h3>' . $domaine['titre'] . "</h3>";
            echo "<ul>";
            foreach ($domaine['items'] as $item) {
                echo "<li>" . $item . "</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</section>