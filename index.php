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
  stampaSaluto();
  
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
    $saluto .= ' Tutto bene?';
    // trasformo stringa in Array tramite un delimitatore

    $saluto_esploso = [];

    // isset restituisce true se l'elemento esiste anche se è vuoto
    var_dump(isset($saluto_esploso));

    // empty restituisce true se l'elemento, oltre che esistere NON è stato valorizzato
    var_dump(empty($saluto_esploso));

    $saluto_esploso = explode(' ',$saluto);
    var_dump(empty($saluto_esploso));
    

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

    	

    var_dump(  $saluto );

    

    var_dump($saluto_esploso);
    	
    var_dump(isset($variabile_che_non_ho_inizializzato));
    var_dump(empty($variabile_che_non_ho_inizializzato));
    var_dump(isset($saluto));


    // i numeri messi fra virgolette possono non essere utilizzati come stringhe
    $numero = '5';
    $numero += '3';
    var_dump($numero);
    // is_numeric restituisce true se la stringa è numerica
    var_dump(is_numeric($numero));

    $var = '0';

    if($var){
      echo 'VERO';
    }else{
      echo 'FALSO';
    }

    // in mancanza di assegnazione delle chiavi, le chiavi saranno numeriche
    $colori = ['rosso', 'giallo', 'blu'];
    // push -> aperta chiusa quadra dopo l'array = valore da pushare
    $colori[] = 'verde';

    var_dump($colori);
    // true se esiste l'elemnto nell'array (equivalente di includes())
    var_dump(in_array('verde',$colori));
    // restituisce la chiave dell'occorrenza trivata, altrimenti false
    var_dump(array_search('verde',$colori));

    // con foreach ciclo l'array scrivendo prima l'array da ciclare as elemeto ciclato
    foreach($colori as $colore){
      echo '<br>' . $colore;
    }

    // assegnando le chiavi trattiamo l'array in modo simile all'oggetto JS
    // la relazione chiave / valore la si scrive così: =>
    $utente = [
      'nome' => 'Ugo',
      'cognome' => 'De Ughi'
    ];
    $utente['age'] = 30;

    var_dump($utente);
    // verifico l'esistenza di una chiava in un array
    var_dump(array_key_exists('nome',$utente));
    var_dump(array_keys($utente));

    foreach($utente as  $valore){
      echo "<br> $valore";
    }
    foreach($utente as $chiave => $valore){
      echo "<br>$chiave: $valore";
    }

    // quasta chiave non esiste
    //var_dump($utente[0]);

    echo '<h1>' . $utente['nome'] . ' ' . $utente['cognome']  .'</h1>';

    	
$team = [ // primo livello: array "contenitore" con indici numerici
  [ // secondi livelli: array associtativi
      "name" => "Fabio",
      "lastname" => "Forghieri",
      "role" => "Co-Founder",
  ],
  [
      "name" => "Michele",
      "lastname" => "Papagni",
      "role" => "Head of Teaching",
  ]
];

var_dump($team);

for($i = 0; $i < 10; $i++){
  echo '<br> ' . $i;
}
	
$animals = [	
  "mammals" => ["cow", "pig", "horse", "dog"],
  "birds" => ["duck", "chicken"]
];

foreach ($animals as $animalClass) {
 foreach($animalClass as $animal) {
     echo "<br>$animal";
 }
}

function stampaSaluto(){
  echo 'Caio!!!!';
}

function stampaNomeCognomeConReturn($user){
  return $user['nome'] . ' ' . $user['cognome'];
}

function stampaNomeCognomeConEcho($user){
  echo $user['nome'] . ' ' . $user['cognome'];
}

echo "<br> ------------ OOP -------------------------------";
class User{
  public $name;
  public $email;
  public function __construct($_name, $_email = null)
  {
    $this->name = $_name;
    $this->email = $_email;
  }

  public function getFullInfo(){
    return "Nome: $this->name - Email: $this->email ";
  }

  public function saluta($saluto){
    // 
    return "$saluto $this->name";
  }


}

$ugo = new User("Ugo","ugo@gmail.com");
$martina = new User("Martina", "martina@gmail.com");
$filippo = new User("Filippo");

var_dump($ugo);
var_dump($martina);
var_dump($filippo);
var_dump($ugo->name);
var_dump($martina->name);
var_dump($martina->getFullInfo());
var_dump($ugo->saluta('Ciao'));


echo "<br> ------------ /OOP -------------------------------";


  ?>

  <p>Benvenuto <?php echo $nome; ?></p>
  <p>Benvenuto con return <?php echo stampaNomeCognomeConReturn($utente); ?></p>
  <p>Benvenuto con echo <?php stampaNomeCognomeConEcho($utente); ?></p>

  <form action="./pagina-di-atterraggio.php" method="POST">
    <input type="text" name="nome" placeholder="nome" /><br>
    <input type="text" name="cognome" placeholder="cognome" /><br>
    <button type="submit">invia</button>
  </form>

</body>
</html>