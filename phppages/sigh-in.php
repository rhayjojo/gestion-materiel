<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "gestion_materiel";

$conn = mysqli_connect($host, $user, $pass, $db);

// Vérification de la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

// Récupération des données du formulaire
if(isset($_POST['boutton-valider'])){ 
if (isset($_POST['nom'], $_POST['email'], $_POST['pass']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    
    $nom = strip_tags($_POST["nom"]);
    $email = $_POST["email"];
    $password = $_POST['pass'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "L'adresse email est incorrecte.";
        echo "<script>alert('$errorMessage');</script>";
    } else {
        $sql = "SELECT * FROM utilisateur WHERE nom = '$nom' AND email = '$email'";
        $result = mysqli_query($conn, $sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $utilisateur = mysqli_fetch_assoc($result);
            
            if (password_verify($password, $utilisateur['mot_de_passe'])) {
                switch ($utilisateur['role']){
                    case 'ADMINISTRATEUR':
                        header('Location:http://localhost/GESMAT/htmlpages/Amind.php', true, 303);
                        exit();

                    case 'utilisateur':
                        header("Location:http://localhost/GESMAT/htmlpages/users.html" , true, 303);
                        exit();
                    default : 
                        echo "redirection echouer";
                }
            } else {
                $errorMessage = "Mot de passe incorrect.";
                echo "<script>alert('$errorMessage');</script>";
            }
        } else {
            $errorMessage = "Utilisateur non trouvé. Veuillez vérifier vos informations de connexion.";
            echo "<script>alert('$errorMessage');</script>";
        }
    }
}else{
    $errorMessage = "formulaire incomplet ";
    echo "<script>alert('$errorMessage');</script>";
}
}
mysqli_close($conn);
?>