<?php
session_start();
  if(!isset($_SESSION["usuario"])){
      header("location:login.php");
  }
  $user=$_POST["pokemon"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/description_pokemon.css" />
  </head>
  <body>
    <input type="hidden" id="valorId" value="<?php echo $user?>" />
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
          <a class="navbar-brand" href="./login.html">
            <img
              src="./img/apagar.png"
              alt=""
              width="30"
              height="24"
              class="d-inline-block align-text-top"
            />
          </a>
        </div>
      </nav>
    </header>
    <main>
      <div class="container_pokemon">
        <div class="contaner_identificacion_pokemon">
          <!-- <h2 class="name_pokemon"></h2>
          <img class="img_pokemon" alt="" /> -->
        </div>
        <div class="container_caracteristicas_pokemon">
          <div class="tipo_pokemon">
            <h3>Pokemon tipo:</h3>
            <div class="datos_tipo">
              <!-- <span class="habitat">tierra</span>
              <span class="tipo">vuelo</span> -->
            </div>
          </div>
          <div class="caracteristicas_pokemon">
            <h3>Carateristicas pokemon:</h3>
            <div class="cointainer_habilitys_all">
              <div class="CONTAINER_HABILITY">
                <span id="hp_name">HP</span>
                <span id="hp_value" class="hp_value">NAN</span>
              </div>
              <div class="CONTAINER_HABILITY">
                <span>ATTACK</span>
                <span id="attack" class="attack_value">NAN</span>
              </div>
              <div class="CONTAINER_HABILITY">
                <span>DEFENSE</span>
                <span id="defense" class="defense_value">NAN</span>
              </div>
              <div class="CONTAINER_HABILITY">
                <span>SPECIAL DEFENSE</span>
                <span id="sD" class="special_defense_value">NAN</span>
              </div>
              <div class="CONTAINER_HABILITY">
                <span>SPECIAL ATTACK</span>
                <span id="sA" class="special_attack_value">NAN</span>
              </div>
              <div class="CONTAINER_HABILITY">
                <span>SPEED</span>
                <span id="speed" class="speed_value">NAN</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="btn_volver" href="./pagePokemos.php">volver</a>
    </main>
    <script src="./js/pokemon_attributes.js"></script>
  </body>
</html>
