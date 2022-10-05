<?php

 //var_dump($_POST);

  
echo 'Nome: ' .($_POST['nome'] ?? ' ') . "<br>";
echo 'E-mail: ' .($_POST['email'] ?? ' ') . "<br>";
echo 'Senha: ' .($_POST['senha'] ?? ' ') . "<br>";
echo 'Tipo: ' .($_POST['tipo'] ?? ' ') . "<br>";
echo 'Perfil: ' .($_POST['perfil'] ?? ' ') . "<br>";

?>