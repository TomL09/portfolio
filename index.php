<?php
require_once("yaml/yaml.php");

$competencesData = yaml_parse_file('fichieryaml/Compétences.yaml');
$formationsData = yaml_parse_file('fichieryaml/Formation.yaml');
$realisationData = yaml_parse_file('fichieryaml/Réalisation.yaml');
$contactData = yaml_parse_file('fichieryaml/Contact.yaml');

$imagePath = "images/pp.JPG";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
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
            <p>Bonjours, Je m'appelle Tom Laisney, j'ai 18 ans et je suis étudiant en 1ère année de BTS SIO à CaenSup Sainte Ursule ! </p>
            <?php if (file_exists($imagePath)): ?>
                <img src="<?= htmlspecialchars($imagePath) ?>" alt="Photo de Tom Laisney" class="profile-image">
        </div>
    </section>

    <section id="compétence">
        <div class="accueil">
            <h2>Compétences</h2>
            <?php
            $Competence = $competencesData["Competence"];
            echo "<p>" . ucfirst($Competence["domaines1"]) . "</p>\n";
            echo "<p>" . ucfirst($Competence["item"]) . "</p>\n";
            ?>
        </div>
    </section>

    <section id="formation">
        <div class="accueil">
            <h2>Formations</h2>
            <?php
            $Formations = $formationsData["Formations"];
            echo "<p>" . ucfirst($Formations["Etudes"]) . "</p>\n";
            echo "<p>" . ucfirst($Formations["etude1"]) . "</p>\n";
            echo "<p>" . ucfirst($Formations["etude2"]) . "</p>\n";
            echo "<p>" . ucfirst($Formations["etude3"]) . "</p>\n";
            ?>
        </div>
    </section>

    <section id="réalisations">
        <div class="accueil">
            <h2>Réalisation</h2>
            <?php
            $Réalisation = $realisationData["Réalisation"];
            echo "<p>" . ucfirst($Réalisation["Projets"]) . "</p>\n";
            ?>
        </div>
    </section>

    <section id="contact">
        <div class="accueil contact-section">
            <h2>Contact</h2>
            <?php if (!empty($error)): ?>
                <div class="message error"><?= $error ?></div>
            <?php endif; ?>
            <?php if (!empty($success)): ?>
                <div class="message success"><?= $success ?></div>
            <?php endif; ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="email">Votre email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Objet :</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Votre message :</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </section>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $to = 'tom.laisney@sts-sio-caen.info';
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $subject = htmlspecialchars(trim($_POST['subject']));
        $message = htmlspecialchars(trim($_POST['message']));

        if (!$email || empty($subject) || empty($message)) {
            $error = 'Tous les champs sont obligatoires et l\'email doit être valide.';
        } else {
            $headers = "From: $email\r\n" .
                       "Reply-To: $email\r\n" .
                       "Content-Type: text/plain; charset=UTF-8";

            if (mail($to, $subject, $message, $headers)) {
                $success = 'Votre message a été envoyé avec succès.';
            } else {
                $error = 'Une erreur est survenue lors de l\'envoi de votre message.';
            }
        }
    }
    ?>

</body>
</html>
