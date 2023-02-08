<?php 
require("../Controller/Controllerr.php");
$frase="";
if(isset($_POST["get_into"])){
  $user=$_POST["email_Login"];
  $pass=$_POST["password_login"];
  $controller=new Controller();
  $frase=$controller->valideUser($user,$pass);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/log-style.css" />
  </head>
  <body>
    <main>

        <div class="container_login">
          <div class="container_banner">

          </div>

          <div class="container-inputs">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <h1 href="" method="post" class="title_s">POKEDEX</h1>
            <h2>Log In</h2>
            <label class="form-label">Email</label>
            <input
              type="email"
              name="email_Login"
              class="input-100"
              placeholder="Enter your email"
              required
            />

            <label class="form-label">Password</label>
            <input
              type="password"
              class="input-100"
              placeholder="Enter your password"
              name="password_login"
              required
            />
            <?php
                echo $frase;
            ?>

            <input type="submit" value="Get Into" name="get_into" class="btn-start" />
            <p class="form__link">
              You do not have an account?<a href="./sign-up.php">Sign up</a>
            </p>
          </form>
          </div>
        </div>
      
    </main>
  </body>
</html>
