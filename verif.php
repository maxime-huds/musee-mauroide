<?php
include "connexion.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    // récupérer les valeurs du formulaire
    $login = htmlentities ($_POST['username']);
    $_SESSION['username'] = htmlentities($_POST['username']);
    $mdp = htmlentities ($_POST['password']);
    $_SESSION['password'] = $mdp;


    if (isset($login) && isset($mdp)) {
        $sql = "SELECT * FROM user WHERE `login` = :login";
        $account = $pdo->prepare($sql);
        $account->bindParam(':login', $login, PDO::PARAM_STR);
        $account->execute();
        $acc = $account->fetch(); // Utilisation de fetch() car nous nous attendons à un seul résultat
    
        if ($acc && password_verify($mdp, $acc['mdp'])) { // Utilisez password_verify pour vérifier le mot de passe
            if ($login === "admin") {
                header('Location: main-directeur.php');
                exit();
            } else if ($login === "alendroit") {
                header('Location: main-verse.php');
                exit();
            } else {
                header('Location: main-secu.php');
                exit();
            }
        } else {
            echo '<script>';
            echo 'alert("Mauvais mot de passe !");';
            echo '</script>';
            header('Location: login-musee.php');
            exit();
        }
    }
}
else{
    header('Location: login-musee.php');
}



?>