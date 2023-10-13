<?php
$a = session_id(); if(empty($a)) session_start();
include "verif.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Musee Mauroide</title>
  <link rel="stylesheet" href="style-index-musee.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<h1>Formulaire de connexion</h1>
  <div class="container">
    <div class="cta-form">
      <h2>Connexion</h2> 
    <p>Il va falloir chercher le login et le mot de passe pour pouvoir vous connecter !</p>
    </div>
    <form class="form" id="monform">
      
      <input type="text" placeholder="Name" class="form__input" id="name" required/>
      <label for="name" class="form__label">Login</label>

      <input type="password" placeholder="Mdp" class="form__input" id="mdp" required/>
      <label for="mdp" class="form__label">Mot de passe</label>

    </form>
  </div>

<script>

var champmdp = document.getElementById("mdp");
var login = document.getElementById("name");
/*
var i = 0;


champmdp.addEventListener("input", function() {
  if (i === 0){
    vraimdp = champmdp.value;
    i += 1;
    }else{
      vraimdp += champmdp.value.slice(-1);
    }
  
 //vraimdp = champmdp.value;
    
    var valeurSaisie = champmdp.value;
    var longueurValeur = valeurSaisie.length;
    var valeurMasquee = "*".repeat(longueurValeur);
    champmdp.value = valeurMasquee;
});
*/



var form = document.getElementById("monform");

form.addEventListener("keydown", function(event) {
    if (event.keyCode === 13) {
      $.ajax({
        url: "verif.php",
        type: "POST",
        data: {mdp:champmdp.value, login:login.value},
        success: function(){
          console.log("")
        }
      })
        console.log("La touche Entrée a été cliquée");
        event.preventDefault();
        var nameInput = document.getElementById("name").value;
        console.log(" et le login c'est : " + nameInput + " et le mdp : ");
        
        if (nameInput !== "" && champmdp.value !== "") {
            console.log("J'envoie login :"+nameInput+" et en mdp:");
            form.submit();
        } else {
            alert("Veuillez remplir tous les champs avant de soumettre le formulaire.");
        }
    }
});




</script>


</body>

</html>