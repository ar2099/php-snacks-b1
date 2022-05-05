<!-- ## Snack 4
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta -->
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
 $lista = [];
$conteggio = 0;
// for($i = 0; $i < 15; $i++){
    
//    $lista[] = rand(1,100);
//    echo "<p>$lista[$i]</p>";
// };
while($conteggio < 10){
    $numero = rand(1,13);
  if(array_search($numero,$lista) == false){
    $lista[] = $numero;
    $conteggio = $conteggio +1;
  }

    
}
var_dump($lista);
echo count($lista);
?>
<body>
    
</body>
</html>