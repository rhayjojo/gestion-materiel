<?php
    $user_id = $_GET['id'];

    $user="root";
    $pass="";
    $DB="gestion_materiel";
    $host="localhost";
    $conn = mysqli_connect($host,$user,$pass,$DB);
    if(!$conn){
        echo "erreur de connexion".mysqli_connect_error();
    }

    $sql = "DELETE FROM materiels where id = $user_id";

    if(mysqli_query($conn,$sql)){
        header("location:../phppages/delete.php?id=$user_id");
        header("location:../htmlpages/Amind.php");
    }else{
        header("location:tableau.php?message=DeleteFail");
    }
?>