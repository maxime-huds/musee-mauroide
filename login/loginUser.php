<?php

require_once(dirname(__FILE__) . "/../website/configs/database.php");


$passwordToHash = $_POST["password"] . "YYirgzrfnd5ccdeULDheTdskXSZ";
$hash = md5($passwordToHash);

#username pas pseudo

$req = $db->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
$req->bindParam(":username", $_POST["pseudo"]);   
$req->bindParam(":password", $hash);
$req->execute();

$result = $req->fetch(PDO::FETCH_ASSOC);

if(!$result){
    header("Location: login.php?message=Identifiants incorrects");
}else{
    session_start();
    $_SESSION["username"] = $result["username"];
    $_SESSION["id"] = $result["id"];
    $_SESSION["role"] = $result["role"];


    header("Location: index.php");
}



