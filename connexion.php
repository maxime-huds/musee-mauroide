<?php

try{
    $pdo=(new PDO('mysql:host=localhost;charset=utf8;dbname=musee','root',''));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

    catch (Exception $e){
        die ("erreur : ".$e->getMessage());
}

?>