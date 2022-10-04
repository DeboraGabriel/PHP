
<!DOCTYPE html>
<html>
  <head>
      <title>Exercicio-2 de 3DAW </title>
  </head>
  <body>
    <!--Exercício 2: Escrever um arquivo com dados de um formulário com GET.-->

    <form action="metodoGET.php" method="GET">

    <fieldset>
      <legend>Formulário em HTML</legend>
      <p>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
      </p>

      <p>
        <label for="matricula">Matrícula: </label>
        <input type="text" name="matricula" id="matricula">
      </p>

      <p>
        <label for="av1">AV1: </label>
        <input type="text" name="av1" id="av1">
      </p>

      <p>
        <label for="av2">AV2: </label>
        <input type="text" name="av2" id="av2">
      </p>

      <p>
        <label for="media">Media: </label>
        <input type="text" name="media" id="media">
      </p>

    </fieldset>

    <p>
      <input type="submit" value="Enviar" id="enviar">
    </p>


    </form>

  </body>
</html>
