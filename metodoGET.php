<?php
  //var_dump($_GET);

  
echo 'Nome: ' .($_GET['nome'] ?? ' ') . "<br>";
echo 'Matrícula: ' .($_GET['matricula'] ?? ' ') . "<br>";
echo 'AV1: ' .($_GET['av1'] ?? ' ') . "<br>";
echo 'AV2: ' .($_GET['av2'] ?? ' ') . "<br>";
echo 'Média: ' .($_GET['media'] ?? ' ') . "<br>";
    
?>