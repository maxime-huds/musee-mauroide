<?php
include "connexion.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    // récupérer les valeurs du formulaire
    $login = htmlentities ($_POST['username']);
    $_SESSION['username'] = htmlentities($_POST['username']);
    $mdp = htmlentities ($_POST['password']);
    $_SESSION['password'] = $mdp;


    if (isset($login) && isset($mdp)){
        $sql=("SELECT * FROM user WHERE `login`='$login' AND `mdp`='$mdp'");
        $account= $pdo->prepare($sql);
        $account->execute();
        $acc=$account->fetchAll();

        $nbr_lignes=count($acc);
        if ($nbr_lignes==1){
            if ($login === "admin"){
                header('Location: main-directeur.php');
            } else if ($login === "alendroit"){
                header('Location: main-verse.php');
            }else {
                header('Location: main-secu.php');
            }
            exit();
        }
        else{
            echo '<script>';
            echo 'alert("Mauvais mot de passe !");';
            echo '});';
            echo '</script>';
            header('Location: login-musee.php');
        }
}

}
else{
    
}



?>