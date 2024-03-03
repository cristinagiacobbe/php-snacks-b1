<?php

/* ## Snack 2
Con un form passare come parametri GET name, mail e age 
e verificare (cercando i metodi che non conosciamo nella documentazione) che 
name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola 
e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <p>
        <?php if ((strlen($_GET["name"])) > 3 && (str_contains($_GET["mail"], "@")) && (str_contains($_GET["mail"], ".")) && (is_numeric($_GET["age"]))) : ?>
            Accesso riuscito
        <?php else : ?>
            Accesso negato

        <?php endif; ?>


    </p>




    <form action="" method="$_GET">
        <label for="name">Inserisci il tuo nome</label>
        <input type="name" name="name" id="name">
        <label for="mail">Inserisci la tua mail</label>
        <input type="mail" name="mail" id="mail">
        <label for="age">Inserisci la tua età</label>
        <input type="age" name="age" id="age">
        <button type="submit">Invia dati</button>
    </form>
</body>

</html>