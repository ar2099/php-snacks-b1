<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
## Snack 2
<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name 
sia più lungo di 3 caratteri, che mail contenga un punto e una 
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
 altrimenti “Accesso negato” -->
<?php 
$name = isset($_GET["name"]) ? $_GET["name"] : "";
$email = isset($_GET["email"]) ? $_GET["email"] : "";
$age = isset($_GET["age"]) ? $_GET["age"] : "";
if((strlen($name) > 3) && (is_numeric($age) == 1) && (strpos($email,"@") != "") && (strpos($email,".") != "")){
    $stato = "Accesso riuscito";
} 
else {
    $stato = "Accesso negato";
}
?>
<body>
  <?php
  echo "<p>Nome: $name</p><p>Email: $email</p><p>Age: $age</p><p>$stato</p>"
  ?>  
</body>
</html>