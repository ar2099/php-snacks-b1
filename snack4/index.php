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
echo "----------------------</br>";
?>

<?php
$lista2 = [];
while(count($lista2) < 15){
    $numero2 = rand(1,20);
    if(in_array($numero2, $lista2) == false){ //perchè array_search(value, array) non funziona?
      $lista2[] = $numero2;
    };
    
  };
  
    echo "Metodo 2 - while con in-array";
      var_dump($lista2);
      echo "----------------------</br>";
    
  
?>
<!-- <?php 
$lista3 = [];
$lista3[] = rand(1,20);
while(count($lista3) < 16){
    $numero3 = rand(1,20);
    $stato = true;
    for($i = 0; $i < count($lista3); $i++){
      if(($numero3 != $lista3[$i]) && ($stato == true) && (count($lista3) == $i)){
        $lista3[] = $numero3;
      }
      elseif($numero3 == $lista3[$i]){
        $stato = false;
      }
    }
    
  };

?> -->
<body>
    
</body>
</html>