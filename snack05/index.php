<?php



/* Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */

$text = "Quando si aggiungono nuovi elementi ad un array e non si specifica un indice, PHP riprende la numerazione partendo dall'indice numerico più alto. Dunque un nuovo elemento inserito avrà indice pari all'indice più grande incrementato di uno.
Nel nostro esempio, prima di inserire nuovi elementi, l'indice più alto è 2, quindi l'elemento inserito alla riga 3 avrà indice pari a 3. Alla riga 7 abbiamo invece specificato 25 come indice, dunque un eventuale nuovo elemento inserito avrebbe indice pari a 26";


$explodedText = explode(".", $text);
var_dump($explodedText)
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