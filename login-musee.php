<?php
$a = session_id(); if(empty($a)) session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Musée Mauroide</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="login-musee.css">
        <link rel="icon" href="logo.png">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
      <div class="main">
        <div class="texte">
          <span>Se Connecter</span>
        </div>
        <div class="formulaire">
            <form method="post" action="verif.php">
                <input type="text" placeholder="Nom d'utilisateur" id="username" name="username" required>  
                <input type="password" placeholder="Mot de passe" id="password" name="password" required>
                <input type="submit" value="Sign In">
            </form>
        </div>
        <span id="text" style="display:none;">Mot de passe oublié ? <a href="change_mdp.php">Changer ici</span>
      </div>

<script>
  var login = document.getElementById("username");
  var span = document.getElementById("text");

  login.addEventListener("input", function(){
    if (login.value === "alendroit"){
      span.style.display = "block";
    }else{
      span.style.display = "none";
    }
  });


</script>




    </body>
</html>

