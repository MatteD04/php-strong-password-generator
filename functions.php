<?php
//leggo il numero scritto dall'utente
$numb = isset($_GET['password']) ? $_GET['password'] : '';

//elenco dei caratteri per la password
$characters = "abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ0123456789$@#!?";
//mescolo la stringa data
$charactersMixed = str_shuffle($characters);
//genero la password casuale che ha come lunghezza i parametri dati
$pwd = substr($charactersMixed,0, $numb);
?>