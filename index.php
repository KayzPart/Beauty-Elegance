


<!-- je creer un envoi de formulaire à la base de données  -->
<?php




if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    echo "Bonjour " .$firsname. "nous vous remercions pour votre inscription à notre newsletter, et vous confirmons sa prise en compte !";
 
    try{
        $db = new PDO('mysql:host=localhost;dbname=beautyelegance;charset=UTF8','root');
    } catch (PDOException $e){
        echo 'Echec de la connexion : ' . $e->getMessage();
    }

    $req = $db->prepare("INSERT INTO `newsletter` (`nom`, `email`, `telephone`) VALUES(:firstname, :email, :phone NOW())");

    $req->bindParam('firstname',$firstname, PDO::PARAM_STR);
    $req->bindParam('email',$email, PDO::PARAM_STR);
    $req->bindParam('phone',$phone, PDO::PARAM_STR);
    
    $req->execute();
    // var_dump($req);

}
?>