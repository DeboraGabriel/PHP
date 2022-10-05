<?php
  $host="localhost";
  $user="root";
  $pass="";
  $db="av1_3daw";

  $link=mysqli_connect($host,$user,$pass,$db);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AV1 de 3DAW</title>
   </head>
   <body>
    <!-- Incompleto!Terminar depois.Computador travando toda hora.-->
        <h1>Tela Disciplina</h1>
    
        <form action="?act=save" method="POST" name="formulario" >

         <fieldset>
           <legend>Disciplinas</legend>

           <p>
             <label for="id">Id: </label>
             <input type="text" name="id" id="id" />
           </p>

           <p>
             <label for="nome">Nome: </label>
             <input type="text" name="nome" id="nome" />
           </p>

           <p>
             <label for="periodo">Período: </label>
             <input type="text" name="periodo" id="periodo" />
           </p>

           <p>
             <label for="PreRequisitos">Pré-requisitos: </label>
             <input type="text" name="PreRequisitos" id="PreRequisitos" />
           </p>
           
           <p>
             <label for="creditos">Créditos: </label>
             <input type="text" name="creditos" id="creditos" />
           </p>

          
           <input type="reset" value="Novo" />
           <input type="submit" value="salvar" />

         </fieldset>
  
       </form>

   </body>
</html>