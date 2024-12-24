<?php
require_once("yaml/yaml.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$imagePath = "images/pp.JPG";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Portfolio</title>
    <style>
        .profile-image {
            max-width: 200px;
            border-radius: 50%;
            margin-top: 20px;
            border: 3px solid #ccc;
        }
    </style>
</head>
<body>

<div class="menu">
    <ul>
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#compétence">Compétences</a></li>
        <li><a href="#formation">Formation</a></li>
        <li><a href="#réalisations">Réalisation</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</div>

<section id="accueil">
    <div class="accueil">
        <h2>Accueil</h2>
        <div>
            <p>Bonjours, Je m'appelle Tom Laisney, j'ai 18 ans et je suis étudiant en 1ère année de BTS SIO à CaenSup
                Sainte Ursule ! </p>
            <?php if (file_exists($imagePath)): ?>
                <img src="<?= htmlspecialchars($imagePath) ?>" alt="Photo de Tom Laisney" class="profile-image">
            <?php endif; ?>
        </div>
    </div>
</section>

<?php require_once("php/Compétence.php"); ?>


<?php require_once("php/Formation.php"); ?>


<?php require_once("php/Réalisations.php"); ?>


<?php require_once("php/Contact.php"); ?>




</body>
</html>