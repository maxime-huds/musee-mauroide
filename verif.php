<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // récupérer les valeurs du formulaire
    $login = htmlentities ($_POST['username']);
    $_SESSION['username'] = htmlentities($_POST['username']);
    $mdp = htmlentities ($_POST['password']);
    $_SESSION['mdp'] = $mdp;


    if (isset($login) && isset($mdp)){
        $sql=("SELECT * FROM users WHERE `username`='$login' AND `hash`='$mdp'");
        $account= $pdo->prepare($sql);
        $account->execute();
        $acc=$account->fetchAll();

        $nbr_lignes=count($acc);
        if ($nbr_lignes==1){
            $requete=("SELECT `id` FROM user WHERE `login`='$login' AND `mdp`='$mdp'");
            $ad = $pdo->prepare($requete);
            $ad -> execute();
            $admin = $ad->fetch(PDO::FETCH_ASSOC);
            if($admin['id'] == '1'){
                $_SESSION['auth-adminOK'] = TRUE;
                header('Location: index.php');
                exit();
            }
            else{
                $_SESSION["authOK"] = TRUE;
                header('Location: index-musee.php');
                exit();
            }
        }
        else{
            header('Location: login.php');
            echo '<script>';
            echo 'alert("Mauvais mot de passe !");';
            echo '});';
            echo '</script>';
        }
}

}
else{
    
}



?>