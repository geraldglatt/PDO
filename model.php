<?php
require_once('connec.php');

function getfriendsBD(){//fonction qui récupère toutes les amis de notre BD

    $pdo = monPDO::getPDO();
    $req = "SELECT * FROM friend";
    $stmt = $pdo->prepare($req);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function createFriendsBd($firstname,$lastname){
    $pdo = monPDO::getPDO();
    $req = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
    $stmt = $pdo->prepare($req);
    $stmt->bindValue(":firstname",$firstname,PDO::PARAM_STR);
    $stmt->bindValue(":lastname",$lastname,PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    

}

?>

