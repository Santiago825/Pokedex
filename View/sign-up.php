<?php
require("../Controller/Controllerr.php");
$frase="";
if(isset($_POST["get_into"])){
    $name=$_POST["name_singup"];
    $lastname=$_POST["lastname_signup"];
    $user=$_POST["user_name"];
    $email=$_POST["email_singUp"];
    $pass=$_POST["password_singUp"];
    $controller=new Controller();
    $frase=$controller->createUser($name,$lastname,$user,$email,$pass); 
    
    } 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/sign-up-style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <title>Document</title>
  </head>
  <body>
    <a href="index.html"
      ><h1 href="" method="post" class="logo-principal">POKEDEX</h1></a
    >

    <form
      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
      class="form-register"
      method="post"
      
    >
      <h2 class="form_tittle">Creat your account</h2>
      <div class="contenedor-inputs">
        <div class="input-labe-50">
          <label class="">Name</label>
          <input
            type="text"
            name="name_singup"
            placeholder="Enter your name"
            id="name"
            required
          />
        </div>
        <div class="input-labe-50">
          <label class="">Last name</label>
          <input
            type="text"
            name="lastname_signup"
            class=""
            id="lastname"
            placeholder="Enter your Last name"
            required
          />
        </div>
        <div class="input-labe-100">
          <label class="">User name</label>
          <input
            type="text"
            name="user_name"
            class=""
            id="user_name"
            placeholder="Enter your Last name"
            required
          />
        </div>
        <div class="input-labe-100">
          <label class="">Email</label>
          <input
            type="email"
            name="email_singUp"
            class=""
            id="email"
            placeholder="Enter your email"
            required
          />
        </div>
        <div class="input-labe-50">
          <label class="">Password</label>
          <input
            type="password"
            id="password"
            placeholder="Enter your password"
            name="password_singUp"
            required
          />
        </div>
        <div class="input-labe-50">
          <label class="form-label">Confirm password</label>
          <input
            type="password"
            class="input-50"
            id="confirm-pass"
            placeholder="Confirm password"
            name="Conf-password"
            required
          />
        </div>

        <div class="input-label-100">
          <input type="checkbox" id="rules" name="rules" required />
          <label for="rules">
            Declaro que he leído y autorizo el uso de mis datos personales de
            acuerdo a la Autorización y acepto los Términos y Condiciones de
            POKEDEX.</label
          >
        </div>
        <?php
            echo $frase;
        ?>
        <div class="inputs-btn-sign">
          <input type="submit" value="Get Into" name="get_into" class="btn-start" />
        </div>
      </div>
    </form>
    <script src="./js/countrys.js"></script>
    <script src="./js/Validation_sign-up.js"></script>
  </body>
</html>
