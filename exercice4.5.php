<?php
    $string = "Frodo Baggins";
    $integer = 2968;
    function result($string,$integer) : string 
    {
        return $string . $integer;
    }?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4.5</title>
</head>
<body>
    <h1>Exercice 5 Partie 4 : Les fonctions PHP</h1>
    <p><?=$string?> est né en l'an <?=$integer?> T.A.</p>  
</body>
</html>