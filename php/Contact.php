<section class="contact">
    <h2>Contact</h2>
        <?php
        if (isset($_GET['succes'])) { ?>
            <div id="succes">Votre message a bien été envoyé !</div>
        <?php }elseif (isset($_GET['failCaptcha'])) {?>
            <div id="succes">Erreur dans le Captcha</div>
        <?php }elseif (isset($_GET['failSubmit'])) {?>
            <div id="succes">Veillez à remplir tout les champs</div>
        <?php }else{ ?>
            <form action="php/utils/mail.php" method="post" class="form-container">
                <div>
                    <div>
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div>
                        <label for="subject">Sujet</label>
                        <input id="subject" name="subject">
                        <label for="message">Message</label>
                        <textarea id="message" name="message"></textarea>
                    </div>
                        <div class="g-recaptcha" data-sitekey="6LcZRZ4jAAAAACxFp_SoRGxpa7dWNhvFhYE7b6n-"></div>
                        <input type="hidden" name="captcha" id="captcha">
                        <input type="submit" value="Envoyer" id="btn_submit">
                </div>
            </form>
        <?php } ?>
</section>
<script>
    if (captchaIsValid) {
        // Met à jour la valeur du champ caché
        document.getElementById('captcha').value = 'valid';
    }
</script>