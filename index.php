<!-- Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php 
che includeremo poi nella pagina principale -->

<?php

//leggo il numero scritto dall'utente
$numb = 5;

//elenco dei caratteri per la password
$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$@#!?";

//mescolo la stringa data
$charactersMixed = str_shuffle($characters);
//genero la password casuale che ha come lunghezza i parametri dati
$pwd = substr($charactersMixed,0, $numb);

echo $pwd;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password Generator</title>
</head>
<body>
    <div class="container pt-5">
        <h1>Password Generator</h1>
        <form method="get">
            <div class="pt-4 pb-2">
                <label for="password">Lunghezza password:</label>
                <input name="password" id="password" type="number">
            </div>
            <button type="submit" class="btn btn-primary">INVIA</button>
        </form>
    </div>
</body>
</html>