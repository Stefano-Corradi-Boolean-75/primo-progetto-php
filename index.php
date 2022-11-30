<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>primo PHP</title>
</head>
<body>
  <h1>questo è un file php</h1>

  <?php
  
    // codice PHP

    // dicharo una variabile
    $nome = 'Ugo';
    
    
    
    echo '<h2>ciao</h2>';
    
    echo '<h3>';
    echo $nome;
    echo '</h3>';
    
    // col punto concateno le stringhe (per stringhe con apice singolo)
    echo '<h4> ciao ' . $nome . '</h4>';
    
    // con apice doppi posso inseire la variabile nella striga
    echo "<h4> ciaoooo  $nome </h4>";
    
    $saluto = 'Ciao come stai?';
    // trasformo stringa in Array tramite un delimitatore
    $saluto_esploso = explode(' ',$saluto);

    echo $saluto_esploso[1];

    echo '<br>';

    // str_replace(elemento da modificare, con cosa, stringa)
    echo str_replace('come','quanto', $saluto);

    echo '<br>';
    // lunghezza stringa
    echo 'La stringa è lunga ' . strlen($saluto) . ' caratteri';

    echo '<br>';
    // maiuscolo il primo carattere di ogni parola
    echo ucwords($saluto);

    	

    var_dump($saluto_esploso);
    	


  ?>

  <p>Benvenuto <?php echo $nome; ?></p>

  <form action="./pagina-di-atterraggio.php" method="POST">
    <input type="text" name="nome" placeholder="nome" /><br>
    <input type="text" name="cognome" placeholder="cognome" /><br>
    <button type="submit">invia</button>
  </form>

</body>
</html>