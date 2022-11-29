<?php
include __DIR__ . '/function.php';

$frase = 'PHP Strong Password Generator';
$password = '';
$alphabetNumber = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()[]';
$i = 1;

if (isset($_GET['password'])) {
    $password = createPassword();
}

?>

<!DOCTYPE html>
<!--Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza)
sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una
password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
____________________

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi
nella pagina principale
____________________

Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION
recupererà la password da mostrare all’utente.
____________________

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti
singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre
insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <section>
        <div class="container"></div>
        <h1><?php echo $frase; ?></h1>

        <form action="index.php" method="GET" name="generator">
            <label for="password"></label>
            <p>Inserisci il numero di caratteri della tua password</p>
            <input type="text" name="password" id="idPassword">
            <button type="submit">Invia</button>
            <button type="reset">Annulla</button>
        </form>
        </div>
    </section>
</body>


</html>