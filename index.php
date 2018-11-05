<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Palíndromo</title>
  </head>

  <body class="mt-5 h-50">
    
      <h1 class="display-4 text-center"> Palíndromo </h1>
      
      <div align="center">
        <form action="" method="post">

          <fieldset>   

            <label class="d-block"> Forneça uma frase: </label> 
            <div class="mx-5  w-50">
            <input class="form-control text-center" type="text" name="frase" autofocus>  <br> 
            </div>
          </fieldset> 

          <button class="btn text-center btn-outline-dark" type="submit" name="enviar"> Conferir frase </button>

        </form>
      </div>

      <?php
      if(isset($_POST["enviar"])){
        $frase = $_POST["frase"];
      
        require "palindromo.inc.php";

        $palindromo = new Palindromo($frase);

        $resposta = $palindromo->Conferir();
    
        echo "<p class=\"text-center mt-5\"> $frase $resposta</p>";
        }
      ?>

  </body>
</html>