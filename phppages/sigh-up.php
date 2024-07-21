<?php

//connnection a la base de donnees

$host = "localhost";
$user ="root";
$pass ="";
$db ="gestion_materiel"; 

$conn = mysqli_connect($host, $user, $pass, $db);

//verrification de la connection 
$errorMessage = "";
if(!$conn) {
    die("erreur de connexion:" . mysqli_connect_error());
    }

//recuperation des donnees du formulaire
if (isset($_POST['nom'], $_POST['email'], $_POST['pass']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $nom = strip_tags($_POST["nom"]);
    $email = $_POST["email"];
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "L'adresse email est incorrecte.";
        $errorClass = "error"; 
    }
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    

    $sql = "INSERT INTO utilisateur (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo " inscription reussi !!!";
    } else {
        echo "Une erreur est survenue : " . mysqli_error($conn);
    }
}else{
    echo "formulaire incomplet " ;
}




