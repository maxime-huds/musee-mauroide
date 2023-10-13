<?php
 
# Connection a la base de donnée qui a pour nous test et mot de passe root qui est le mot de passe par default xampp

try {
    $db = new PDO('mysql:host=localhost;dbname=test', "root");
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>