<?php
include 'functions.php'; // Inclusione del file functions.php per ottenere accesso alle funzioni definite

$response = ''; // Variabile per memorizzare la risposta

if (isset($_GET['length'])) { // Verifica se è stata specificata la lunghezza della password
    $response = generatePassword($_GET['length']); // Generazione della password con la lunghezza specificata
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
   <form action="index.php" method="GET">
    <label for="length">Lunghezza</label>
    <input type="number" name="length">
    <button type="submit">Genera</button>
   </form>
   <?php if (!empty($response)) : ?>
   <p><?php echo $response; ?></p>
   <?php endif; ?>
</body>
</html>