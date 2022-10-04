<?php
  //var_dump($_POST);

  
echo 'Nome: ' .($_POST['nome'] ?? ' ') . "<br>";
echo 'Matrícula: ' .($_POST['matricula'] ?? ' ') . "<br>";
echo 'AV1: ' .($_POST['av1'] ?? ' ') . "<br>";
echo 'AV2: ' .($_POST['av2'] ?? ' ') . "<br>";
echo 'Média: ' .($_POST['media'] ?? ' ') . "<br>";
    
?>