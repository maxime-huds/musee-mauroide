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

</head>
<body>

<h1>Formulaire de connexion</h1>
  <div class="container">
    <div class="cta-form">
      <h2>Connexion</h2> 
    <p>Il va falloir chercher le login et le mot de passe pour pouvoir vous connecter !</p>
    </div>
    <form action="verif.php" class="form" method="POST" id="monform">
      
      <input type="text" placeholder="Name" class="form__input" id="name" required/>
      <label for="name" class="form__label">Login</label>

      <input type="text" placeholder="Mdp" class="form__input" id="mdp" required/>
      <label for="mdp" class="form__label">Mot de passe</label>

    </form>
  </div>

<script>
var champmdp = document.getElementById("mdp");
var vraimdp = "";

if (champmdp.value === ""){
    vraimdp = champmdp.value;
  }else{
    vraimdp += champmdp.value.slice(-1);
  }

champmdp.addEventListener("input", function() {
  
  
 //vraimdp = champmdp.value;
    
    var valeurSaisie = champmdp.value;
    var longueurValeur = valeurSaisie.length;
    var valeurMasquee = "*".repeat(longueurValeur);
    champmdp.value = valeurMasquee;
});

var form = document.getElementById("monform");

form.addEventListener("keydown", function(event) {
    if (event.keyCode === 13) {
        console.log("La touche Entrée a été cliquée");
        event.preventDefault();
        var nameInput = document.getElementById("name").value;
        console.log(" et le login c'est : " + nameInput + " et le mdp : " + vraimdp);
        
        if (nameInput !== "" && vraimdp !== "") {
            console.log("J'envoie login :"+nameInput+" et en mdp:"+vraimdp);
            //form.submit();
        } else {
            alert("Veuillez remplir tous les champs avant de soumettre le formulaire.");
        }
    }
});




</script>


</body>

</html>