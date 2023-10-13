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
        <span onclick="envoiemdp()">Mot de passe oublié ? <a href="#">Changer ici</span>
      </div>

<script>

function envoiemdp(){
  var login = document.getElementById("username").value;
  console.log("je suis dans ma fonction et mon login vaut :"+login)
  if (login === ""){
    console.log("je suis dans la fonction et y'a pas de login")
    alert("Attention, veuillez choisir un utilisateur");
  }else{
    console.log("je fais la requete ajax la")
    $.ajax({
    url: "change_mdp.php",
    type: "POST",
    data: {login : login},
    success: function(){
      console.log("requete envoyée, login = "+login)
      window.location.href = "change_mdp.php";
      }, error: function(error){
        console.log("erreur lors de la requete : "+error)
      }
    });
  }
}


</script>

  
    </body>
</html>

