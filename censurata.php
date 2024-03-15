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
        Il paragrafo Inserito è : 
        <?php
        //stamnpo a schermo il paragrafo
        echo $paragrafo ;
        
       
        
        ?>
    </p>
    <p>
        La lunghezza del paragrafo è : 

        <?php
        // salvo al variabile della lugnhezza e la calcolo con la funzione strlen(),
        $lunghezza_paragrafo = strlen($paragrafo);
        echo $lunghezza_paragrafo ;

      /*   var_dump($paragrafo); */
        
        ?>
       
    </p>
    <p>
        Il paragrafo censurato è : 
        <?php
            // Censura la parola
         $paragrafo_censurato = str_replace($parola_censurata, "***", $paragrafo);

         echo $paragrafo_censurato;
        
        ?>
    </p>

    <p>
        <?php
        // lunghezza farse con censura
        // salvo al variabile della lugnhezza e la calcolo con la funzione strlen(),
        $lunghezza_paragrafo_censurato = strlen($paragrafo_censurato);

        echo $lunghezza_paragrafo_censurato;
        ?>

    </p>