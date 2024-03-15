<!-- 
    Descrizione:
Creare un form PHP che permetta di inviare due campi: 
    un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati 
e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza 
  (con un design accettabile)
- stampare di nuovo il paragrafo e la sua lunghezza, 
   dopo aver sostituito con tre asterischi (***) 
   tutte le occorrenze della parola da censurare.
(cercate nella documentazione online quale sia 
la funzione corretta di PHP da utilizzare per sostituire 
la stringa corretta)
P. S.
Per debuggare la vostra pagina utilizzate la funzione var_dump(),
ma una volta completato l'esercizio fate sparire le stampe di debug,
scrivete tutto con echo e in maniera ordinata e piacevole per l'utente
 -->

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP-BADWORDS</title>
</head>
<body>
    <div class="container">

    <h1> PHP-BADWORDS </h1>
    <form action="censurata.php">
        <label for="paragrafo">Paragrafo:</label>
        <br>
        <textarea name="paragrafo" id="paragrafo" rows="5" cols="50"></textarea>
        <br>
        <label for="parola_censurata">Parola da censurare:</label>
        <br>
        <input type="text" name="parola_censurata" id="parola_censurata">
        <br><br>
        <input type="submit" value="Invia">
    </form>

   <!-- <form action="result.php">
    <label for="">Inserisci una parola</label>
    <input type="text">
    <input type="submit">
   </form> -->
   <!-- <?php 
   $name = 'GianMarco';
   $eta = 27;

   echo " ciao sono " + $name + " e ho $eta anni." ;
   ?> -->
    </div>
</body>
</html>