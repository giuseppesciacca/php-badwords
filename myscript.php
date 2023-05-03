<!-- Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.

Il primo file (index.php) dovrà permettere all’utente di inserire i dati (tramite un form) e inviare la richiesta al server.

Il secondo file (nome a piacere) riceverà la richiesta ed eseguirà queste operazioni:
    stampare a schermo il paragrafo e la sua lunghezza
    stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

Consigli:
per lo svolgimento vi occorretanno:
    due file, index.php e myscript.php
    un form in index.php con gli attributi action e method
    due campi nel form, per inviare paragrafo e parola da censurare (ricordatevi di usare l'attributo name )
    ricercare metodo php per sostituire una porzione di una stringa (prova a googlare: string replace in php)
    ricercare un metodo php per contare la lunghezza di una stringa (prova a googlare string.length in php). -->

<?php
$paragraph = $_POST["paragraph"];