<?php



// Je créer la connexion à la base de données

try{
    $db = new PDO('mysql:host=localhost;dbname=beautyelegance;charset=UTF8','root');
} catch (PDOException $e){
    echo 'Echec de la connexion : ' . $e->getMessage();
}

?>