<?php
include "connexion.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // récupérer les valeurs du formulaire
    $login = htmlentities ($_POST['name']);
    $_SESSION['username'] = htmlentities($_POST['name']);
    $mdp = htmlentities ($_POST['mdp']);
    $_SESSION['mdp'] = $mdp;


    if (isset($login) && isset($mdp)){
        $sql=("SELECT * FROM users WHERE `username`='$login' AND `hash`='$mdp'");
        $account= $pdo->prepare($sql);
        $account->execute();
        $acc=$account->fetchAll();

        $nbr_lignes=count($acc);
        if ($nbr_lignes==1){
            header('Location: index-musee.php');
            exit();
        }
        else{
            echo '<script>';
            echo 'alert("Mauvais mot de passe !");';
            echo '});';
            echo '</script>';
            //header('Location: login-musee.php');
        }
}

}
else{
    
}



?>