


<!-- je creer un envoi de formulaire à la base de données  -->
<?php




if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
 
    require_once './connect.php';

    $req=$db->prepare("INSERT INTO `newsletter` (`nom`, `email`, `telephone`) VALUES(:firstname, :email, :telephone NOW())");

    $req->bindParam('firstname',$firstname, PDO::PARAM_STR);
    $req->bindParam('email',$email, PDO::PARAM_STR);
    $req->bindParam('phone',$phone, PDO::PARAM_STR);
    
    $req->execute();
    // var_dump($req);

}
?>