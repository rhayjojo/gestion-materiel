<?php
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
} else {
    echo "ID non spécifié dans l'URL.";
}


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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/edit.css">
    <title>Document</title>
</head>

<body>

    <!-- modal edit -->

    <div class="modal-container" id="modal-contain">
        <div class="modal" id="modalEdit">
            <?php
            $user = "root";
            $pass = "";
            $DB = "gestion_materiel";
            $host = "localhost";
            $conn = mysqli_connect($host, $user, $pass, $DB);
            if (!$conn) {
                echo "erreur de connexion" . mysqli_connect_error();
                exit;
            }

            $sql = "SELECT * FROM materiels where id = $user_id";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
             ?>
                <h3 style="color: black; ">modifier</h3><br>
                <button id="close" style="float: right; margin-top: -65px; border-radius: 50%; font-weight: 700; border: none;   background-color: transparent; width: 20px; ">x</button>
                <form action="../phppages/edit.php" method="POST" role="form">
                    <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Libellé </label>
                        <input type="text" name="libelle" class="form-control" value="<?= $row['libelle'] ?>" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" value="<?= $row['description'] ?>" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">prix</label>
                        <input type="number" name="prix" class="form-control" value="<?= $row['prix'] ?>" required>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">salle </label>
                        <input type="text" name="salle" class="form-control" value="<?= $row['salle'] ?>" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="">Etat : </label>
                        <select name="etat" class="form-control">
                            <option value="OK" <?php if ($row['etat'] == 'OK') echo 'selected'; ?>>OK</option>
                            <option value="defectieux" <?php if ($row['etat'] == 'defectieux') echo 'selected'; ?>>defectieux</option>
                        </select>
                    </div>

                    <button name="modifier" type="submit" class="ajouter" id="modifier">Enregistrer</button><br>
                </form>
            <?php
            } else {
                echo "No data found.";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>

</html> 