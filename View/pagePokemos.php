<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location:login.php");
}
if(isset($_POST["close_session"])){
  echo "hola";
   session_destroy();
   header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/pagePakemons.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <nav class="navbar bg-light shadow-lg">
        <div class="container d-flex justify-content-between">
          <a class="navbar-brand" href="#">
            <img
              src="./img/pokebola.png"
              alt=""
              width="30"
              height="24"
              class="d-inline-block align-text-top"
            />
          </a>
          <h1 class="navbar-brand">POKEDEX</h1>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="post">
              <button class="navbar-brand" name="close_session">
                <img
                  src="./img/apagar.png"
                  alt=""
                  width="30"
                  height="24"
                  class="d-inline-block align-text-top"
                />
              </button>
          </form>
        </div>
      </nav>
    </header>
    <main>
      <div class="container_title_Page">
        <img src="./img/Icon_title.png" class="img_title" alt="" />
        <h1>lista de Pokemones</h1>
      </div>
      <form action="./descriptionPokemon.php" method="post">
        <div class="container_pokemons">
        </div>
      </form>
      <nav class="pagination">
        <ul class="pagination">
          <li id="previous" class="page-item">
            <a class="page-link bg-danger text-light" href="#">Anterior</a>
          </li>
          <li id="next" class="page-item">
            <a class="page-link bg-primary text-light" href="#">Siguiente</a>
          </li>
        </ul>
      </nav>
    </main>
    <script src="./js/Allpokemons.js"></script>
  </body>
</html>
