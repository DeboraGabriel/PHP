
//Exercício 1:Imprimir uma lista de nomes e notas,percorrendo arrays de notas e nomes com for.
<?php
$tamanho=sizeof($nome);
 $nome=array("Maria","Carla","Gustavo","Lucas","Antonio");
 $nota=array(7.2,9.0,8.5,6.0,7.7);
 $i;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
  <title>Exercício 1 de 3 DAW</title>
</head>
  
<body>
  <table>
  <tr>
  <th>Nomes</th>
  <th>Notas</th>
  </tr>
    <?php
    for($i=0;$i<=$tamanho;$i++)
    {
        echo"<tr>
        <td>$nome[$i]</td>
        <td>$nota[$i]</td>
        </tr>";
    }
    ?>
  </table>

</body>
</html>

