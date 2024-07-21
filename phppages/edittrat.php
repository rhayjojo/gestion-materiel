<?php
 $user_id = $_GET['id'];
var_dump($user_id);
if (isset($_POST['modifier'])) {
    $user = "root";
    $pass = "";
    $DB = "gestion_materiel";
    $host = "localhost";
    $conn = mysqli_connect($host, $user, $pass, $DB);
    if (!$conn) {
        echo "erreur de connexion" . mysqli_connect_error();
    }
    extract($_POST);

    $sql = "UPDATE materiels SET libelle = '$libelle', description = '$description', prix = '$prix', salle = '$salle', etat = '$etat' where id = $user_id";

    if (mysqli_query($conn, $sql)) {
        header("location:../phppages/Admin.php");
        exit;
    } else {
        header("location:../phppages/edit.php?message=ModificationFail");
        exit;
    }
}

?>