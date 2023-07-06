<?php
// Definizione della funzione per generare un numero casuale tra un minimo e un massimo
function numerocasuale($min, $max) {
    return rand($min, $max);
}

// Definizione della funzione per generare una password casuale con una determinata lunghezza
function generatePassword($length) {
    $result = ''; // Variabile per memorizzare il risultato
    $password = ''; // Variabile per memorizzare la password generata
    $numbers = '0123456789'; // Numeri consentiti nella password
    $symbols = '_-@'; // Simboli consentiti nella password
    $letters = 'ABCDEFGHILMNOPQRSTUVZabcdefghilmnopqrstuvz'; // Lettere consentite nella password
    $characters = $numbers . $symbols . $letters; // Caratteri consentiti nella password

    if (empty($length)) {
        $result = 'Inserisci un parametro valido'; // Lunghezza non specificata
    } else if ($length < 8 || $length > 32) {
        $result = 'Inserire una password compresa tra 8 e 32 caratteri'; // Lunghezza non valida
    } else {
        while (strlen($password) < $length) {
            $index = numerocasuale(0, strlen($characters) - 1); // Generazione di un indice casuale
            $char = $characters[$index]; // Carattere corrispondente all'indice generato
            $password .= $char; // Aggiunta del carattere alla password
        }
        $result = $password; // Assegnazione della password generata al risultato
    }

    return $result; // Restituzione del risultato
}
?>