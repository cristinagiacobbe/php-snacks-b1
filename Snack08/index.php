<?php
/* Challenge Description:
Create a simple PHP script that takes a user's name through a GET request 
and prints a greeting message to the user. 
If no name is provided, it should print a default greeting message.
Hint:
You can access the parameters passed through a GET request using the $_GET superglobal array. 
Check if the 'name' key exists and is not empty before using it.
*/

$message = "";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanck 8</title>
</head>

<body>



    <form action="" method="get">
        <label for="name">User name:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Invio</button>
    </form>


    <?php


    if (!isset($_GET["name"])) {
        var_dump("Unavailable function");
    } elseif (!empty($_GET["name"])) {

        echo ("Ciao " . $_GET["name"] . "!");
    } else {
        $message = "Benvenuto chiunque tu sia";
        echo $message;
    }

    ?>





</body>

</html>