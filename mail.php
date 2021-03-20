<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('deepershades6@gmail.com', 'Envoi depuis la page Ectoplasma', $_POST['message'], 'From : webmaster@ectoplasma.fr');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>