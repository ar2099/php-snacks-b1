<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

$classe = [
    [
        'nome' => 'Giovanni',
        'cognome' => 'Boseghin',
        "voti" => [6, 5, 7, 8],
    ],
    [
        'nome' => 'Pippo',
        'cognome' => 'Lardo',
        "voti" => [2, 9, 10, 2],
    ],
    [
        'nome' => 'Beppe',
        'cognome' => 'Senega',
        "voti" => [9, 6, 5, 4],
    ],
    [
        'nome' => 'Chiara',
        'cognome' => 'Severini',
       "voti" => [8, 7, 9, 8],
    ],
    

];
 var_dump($classe);
// echo (array_sum($classe[3]["voti"]) / 4);

?>
<body>
 <?php for($i = 0; $i < count($classe); $i++){
        
        ?>
        <p>
            <?php echo $classe[$i]["nome"]?> <?php echo $classe[$i]["cognome"]?> - Media voti: <?php echo (array_sum($classe[$i]["voti"]) / 4)?>
        </p>
  <?php  }?>   
</body>
</html>