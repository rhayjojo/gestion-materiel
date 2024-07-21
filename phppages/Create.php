<?php

//connnection a la base de donnees

$host = "localhost";
$user ="root";
$pass ="";
$db ="gestion_materiel";


$conn = mysqli_connect($host, $user, $pass, $db);

//verrification de la connection 

if(!$conn) {
    die("erreur de connexion:" . mysqli_connect_error());
 }

//recuperation des donnees du formulaire
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $libelle = $_POST["libelle"];
    $description = $_POST["description"];
    $prix = $_POST["prix"];
    $salle = $_POST["salle"];
    $etat = $_POST["etat"];

    do{
        if(isset($_POST['ajouter'])){

            if(empty($libelle) || empty($description) || empty($prix) || empty($salle) || empty($etat)){
                $errormessage = "tout les champs sont obligatoire !!!";
            }else{
                //insertion des donnes dans la base de donnees

                $sql = "INSERT INTO materiels (libelle, description, prix, salle, etat) VALUES ('$libelle', '$description', '$prix', '$salle', '$etat')";


                if (mysqli_query($conn, $sql)) {
                    // Redirection vers la même page
                    $messagereussi = "materiel ajouter correctement";
                    header("Location: ../htmlpages/Amind.php");
                    exit();
                } else {
                    echo "Une erreur est survenue : " . mysqli_error($conn);
                }
            }
        }

    }while(false);

}




// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>