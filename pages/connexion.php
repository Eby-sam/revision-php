<?php
require __DIR__ . '/../part/header.php';
?>

    <div id="divForm">
        <form action="" method="post" id="formConnect">
            <div class="partForm">
                <label for="nom">Entré votre nom</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div class="partForm">
                <label for="mail">Entré votre mail</label>
                <input type="email" name="mail" id="mail" required>
            </div>
            <div class="partForm">
                <label for="password">Mot de passe SVP</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="partForm">
                <label for="password-repeat">Répétez le mot de passe SVP</label>
                <input type="password" name="password-repeat" id="password-repeat" required>
            </div>
            <div class="partForm" id="envoi">
                <input type="submit" name="Envoyé">
            </div>
        </form>
    </div>




<?php
require __DIR__ . '/../part/footer.php';
?>

