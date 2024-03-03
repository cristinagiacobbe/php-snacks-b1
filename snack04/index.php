<?php

/* Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$randNumbers = [];


while (count($randNumbers) < 15) {
    $n = rand(1, 50);
    if (!in_array($n, $randNumbers)) {
        $randNumbers[] = $n;
    }
};
var_dump($randNumbers)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Random numbers</title>
</head>

<body>



</body>

</html>