<?php

/* Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */

$basketGames = [
    [
        "homeTeam" => "Squadra 1",
        "guestTeam" => "Squadra B",
        "homeScore" => 50,
        "guestScore" => 15,
    ],
    [
        "homeTeam" => "Squadra 2",
        "guestTeam" => "Squadra C",
        "homeScore" => 30,
        "guestScore" => 30,
    ],
    [
        "homeTeam" => "Squadra 3",
        "guestTeam" => "Squadra D",
        "homeScore" => 0,
        "guestScore" => 40,
    ],
    [
        "homeTeam" => "Squadra 4",
        "guestTeam" => "Squadra E",
        "homeScore" => 20,
        "guestScore" => 20,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket games</title>
</head>

<body>

    <?php foreach ($basketGames as $game) { ?>
        <div><?php echo $game['homeTeam'] . " - " . $game["guestTeam"] . " | " . $game["homeScore"] . " - " . $game["guestScore"] ?></div>

    <?php } ?>






</body>

</html>