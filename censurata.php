<?php 
    $paragrafo = $_GET['paragrafo'];

    $parola_censurata = $_GET['parola_censurata'];
?>

</body>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafo e Censura</title>
</head>
<body>
    <h1>Paragrafo e Censura</h1>
    <p>
        Il paragrafo Inserito è : <br>
        <?php
        echo $paragrafo
        
        ?>
    </p>

    <!-- <p>
        La parola da censurare è : <br>
        <?php
        echo $parola_censurata
        ?>
    </p> -->
</html>