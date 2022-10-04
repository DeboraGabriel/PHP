<?php
 
 try {
    $conexao = new PDO("mysql:host=localhost; dbname=av1_3daw", "root", "123456");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AV1 de 3DAW</title>
    </head>
    <body>
    <!-- Oi,professor!Isso é o que deu para fazer.Melhor do que nada!-->
        <form action="?act=save" method="POST" name="formulario" >

         <fieldset>
           <legend>Disciplinas</legend>

           <p>
             <label for="id_disciplina">Disciplina: </label>
             <input type="text" name="id_disciplina" id="id_disciplina" />
           </p>

           <p>
             <label for="periodo">Período: </label>
             <input type="text" name="periodo" id="periodo" />
           </p>
           
           <p>
             <label for="creditos">Créditos: </label>
             <input type="text" name="creditos" id="creditos" />
           </p>

           <p>
             <label for="id_PreRequisitos">Pré-requisitos: </label>
             <input type="text" name="id_PreRequisitos" id="id_PreRequisitos" />
           </p>

           <p>
             <label for="nome">Nome: </label>
             <input type="text" name="nome" id="nome" />
           </p>
          
           <input type="text" name="nome" />
           <input type="submit" value="salvar" />
           <input type="reset" value="Novo" />

         </fieldset>
  
       </form>

       <form action="usuarios.php" method="POST">

         <fieldset>
            <legend>Usuários</legend>

            <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" />
            </p>

            <p>
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="email" />
            </p>

            <p>
            <label for="senha">Senha: </label>
            <input type="text" name="senha" id="senha" />
            </p>

            <p>
            <label for="tipo">Tipo: </label>
            <input type="text" name="tipo" id="tipo" />
            </p>

            <p>
            <label for="perfil">Perfil: </label>
            <input type="text" name="perfil" id="perfil" />
            </p>

            <input type="text" name="nome" />
            <input type="submit" value="salvar" />
            <input type="reset" value="Novo" />

         </fieldset>

       </form>


   </body>
</html>