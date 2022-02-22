


<!-- je creer un envoi de formulaire à la base de données  -->
<?php

require_once './connect.php';


if(isset($_POST['submit'])){
    $name = $_POST['Nom'];
    $email = $_POST['Adresse email'];
    $phone = $_POST['Telephone'];
 
}
    $req=$db->prepare("INSERT INTO `newsletter` (`Name`, `Adresse_email`, `Telephone`) VALUES(:Nom, :Prenom, : Adresse email, NOW())");

    $req->bindParam('Nom',$name, PDO::PARAM_STR);
    $req->bindParam('Adresse_email',$email, PDO::PARAM_STR);
    $req->bindParam('Telephone',$phone, PDO::PARAM_STR);
    
    $req->execute();
    var_dump($req);

}
?>