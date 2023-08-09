<?php

$naslovSajta = "Postani Programer";

$navigacija = ["Glavna", "O nama", "Kontakt"];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Postani programer</title>
    </head>
    <body>

        <h1> <?= $naslovSajta; ?> </h1>

        <p> <?= "$navigacija[0] $navigacija[1] $navigacija[2]"; ?> </p>

    </body>
</html>

