<?php

/* Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array 
mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
 */

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack 6</title>
</head>

<body>

    <?php foreach ($db as $category => $person) : ?>

        <div class="<?php echo $category === 'teachers' ? 'teachers' : 'pm' ?>">

            <?php foreach ($person as $date) {
                echo $date["name"];
            } ?>;
        <?php endforeach; ?>
        </div>
</body>

</html>