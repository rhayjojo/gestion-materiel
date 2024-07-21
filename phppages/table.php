<?php
              $host = "localhost";
              $user ="root";
              $pass ="";
              $db ="gestion_materiel";
              
              $conn = mysqli_connect($host, $user, $pass, $db);
              
              //verrification de la connection 
              
              if(!$conn) {
                  die("erreur de connexion:" . mysqli_connect_error());
               }
               $sql = "SELECT * FROM materiels";
               $result = $conn->query($sql);
               
               if (!$result) {
                   die("Requête invalide : " . $conn->error);
               }
               
               while ($row = $result->fetch_assoc()) {
                   echo " 
                   <td>" . $row['id'] . "</td>
                   <td>" . $row['libelle'] . "</td>
                   <td>" . $row['description'] . "</td>
                   <td>" . $row['prix'] . "</td>
                   <td>" . $row['salle'] . "</td>
                   <td>" . $row['Enregistré_le'] . "</td> 
                   <td>
                       <a class='button button-primary button-sm' href='../phppages/edit.php?id=" . $row['id'] . "'>Modifier</a>
                       <a class='button button-danger button-sm' href='../phppages/delete.php?id=" . $row['id'] . "'>Supprimer</a>
                   </td>";
               }
               
               $result->free_result();
               $conn->close();
?>