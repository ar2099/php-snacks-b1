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
 
// for($i = 0; $i < 15; $i++){
    
//    $lista[] = rand(1,100);
//    echo "<p>$lista[$i]</p>";
// };
while(count($lista) < 15){
    
    for($i = 0; $i <= count($lista); $i++){
        $numero = rand(1,20);
        if($numero == $lista[$i]){}
        else{
         $lista[] = $numero  ;
         
 
        }
    }
}

?>
<body>
    
</body>
</html>