<?php
/* Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. */

$students = [
    [
        "name" => "Cristina",
        "cognome" => "Giacobbe",
        "voti" => [9, 8, 6, 7]
    ],
    [
        "name" => "Gianluca",
        "cognome" => "Bagante",
        "voti" => [10, 8, 8, 7]
    ],
    [
        "name" => "Davide",
        "cognome" => "Tumolo",
        "voti" => [9, 8, 6, 6]
    ],
];

foreach ($students as $student) {
    var_dump($student["name"] . "" . $student["cognome"] . ":" . (array_sum($student["voti"]) / count($student["voti"])));
};



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