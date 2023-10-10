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
    <p>Le login pour se connecter au portail d'administration est "admin" <br>et le mot de passe : "*******"</p>
    </div>
    <form action="verif.php" class="form" method="POST" id="monform">
      
      <input type="text" placeholder="Name" class="form__input" id="name" required/>
      <label for="name" class="form__label">Login</label>

      <input type="email" placeholder="Email" class="form__input" id="email" required/>
      <label for="email" class="form__label">Mot de passe</label>

    </form>
  </div>

<script>
var form = document.getElementById("monform");

form.addEventListener("keydown", function(event) {
  console.log("je suis dans la fonction qui écoute la touche entrée")
    if (event.keyCode === 13) {
      console.log("La touche Entrée a été cliquée");
      // Empêchez la soumission par défaut du formulaire
      event.preventDefault();
      
      // Vérifiez si les champs sont remplis
      var nameInput = document.getElementById("name");
      var emailInput = document.getElementById("email");
      
      if (nameInput.value.trim() !== "" && emailInput.value.trim() !== "") {
          // Si les champs sont remplis, soumettez le formulaire
          form.submit();
      } else {
          // Si les champs ne sont pas remplis, affichez un message d'erreur
          alert("Veuillez remplir tous les champs avant de soumettre le formulaire.");
      }
    }
});

</script>


</body>

</html>