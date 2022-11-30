<?php

$name = $_POST['nome'];
$lastname = $_POST['cognome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pagina di atterraggio</title>
</head>
<body>

<h1>
Ciao <?php echo $name ?> <?php echo $lastname ?>

</h1>
  
</body>
</html>