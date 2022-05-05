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
$unica = [];
$vuota = [];
// for($i = 0; $i < 15; $i++){
    
//    $lista[] = rand(1,100);
//    echo "<p>$lista[$i]</p>";
// };
while(count($unica) < 15){
    $numero = rand(1,20);
  
    $lista[] = $numero;

   $unica = array_unique($lista);
    
  };

  //Ho fatto questo passaggio per rendere continue le chiavi  
$stampa1 = array_merge($unica, $vuota);
echo "Metodo 1 = array-unique";
var_dump($stampa1);
echo "----------------------";
?>
<body>
    
</body>
</html>