

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AV1 de 3DAW</title>
    </head>
    <body>
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