<?php

/* Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

$randNumbers = [];

for ($i = 0; $i < 15; $i++) {
    $n = rand(1, 50);
    if (in_array($n, $randNumbers, false)) {
        $randNumbers[] = $n;
        var_dump($randNumbers);
    };
}
var_dump($randNumbers[]);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>