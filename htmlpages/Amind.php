<!DOCTYPE html>
<html lang="eGestion du materiel d'epfa pron">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo-ct.png">
  <link rel="icon" type="image/png" href="../assets/img/logo-ct.png">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/1.4.0/css/searchPanes.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>
    Gestion du materiel d'Epfa Pro
  </title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
 
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-200">

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"  id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" ../htmlpages/amind.php " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white"  style="font-size: 20px;">Administrateur</span>
        
      </a>

    </div>
    <h3 style="color: white;">M.DONGMO</h3>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " style="font-size: 25px;" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/admin.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Tableau de bord</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8"></h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../htmlpages/register.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Ajouter un utilisateur</span>
          </a>
        </li>

        <li class="nav-item">
        <button class="nav-link text-white " id="showmodal1" style="background-color: transparent; border: none;">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons">add_shopping_cart</i>
            </div>
            <span class="nav-link-text ms-1">Commander</span>
          
        </li>
       </button>
        <li class="nav-item" >
          <button class="nav-link text-white " id="showmodal" style="background-color: transparent; border: none;">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons circle-icon">add</i>
            </div>
            <span class="nav-link-text ms-1">Ajouter un materiel</span>
          
        </li>
      </button>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons circle-icon">group</i>
            </div>
            <span class="nav-link-text ms-1">Visiter les comptes </span>
          </a>
        </li>



        <li class="nav-item">
            <a class="nav-link text-white " href="">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons list-icon">format_list_bulleted</i>
              </div>
              <span class="nav-link-text ms-1">Tout le materiel</span>
            </a>
        </li>

      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="main-content position-relative max-height-vh-100 h-100">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3"   >
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">EPFA PRO</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Materiel</li>
            </ol>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" style="justify-content: end;"  id="navbar">
         
            <ul class="navbar-nav  justify-content-end">
              
              
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
              </li>

              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell cursor-pointer"></i>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Laur
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New album</span> by Travis Scott
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            Payment successfully completed
                          </h6>
                          <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              
            </ul>
           
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
  <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg');">
          <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
          
    
    
        <div class="modal-container " id="modal-container">
      <?php   
          $host = "localhost";
          $user ="root";
          $pass ="";
          $db ="gestion_materiel";
          
          
          
          $errormessage = "";
          $messagereussi = "";
          
          $conn = mysqli_connect($host, $user, $pass, $db);
          
          //verrification de la connection 
          
          if(!$conn) {
              die("erreur de connexion:" . mysqli_connect_error());
          }
      ?>
      

    <div class="modal bg-gradient-dark" id="modal">
        <h3 style="color: black; ">Ajouter un matériel</h3><br>
        <button id="closemodal" style="float: right; margin-top: -65px; border-radius: 50%; font-weight: 700; border: none;   background-color: transparent; width: 20px; ">x</button>
        <?php  
        
          if(!empty($errormessage)){
            echo"
              <div class='alert alert-warning alert-dismissible fade show ' role = 'alert'>
                <strong>$errormessage</strong>
                <button type='button' class = 'btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>
            
            ";
          }
        
        ?>
      <form action="../phppages/Create.php" method="POST" role="form">
        <div class="input-group input-group-outline mb-3">
          <label class="form-label" >libellé </label>
          <input type="text" name="libelle" class="form-control"  required>
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label">Description</label>
          <input type="text" name="description" class="form-control" required>
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label">prix</label>
          <input type="number" name="prix" class="form-control" required>
        </div>

        <div class="input-group input-group-outline mb-3">
          <label class="">salle  :  </label>
          <select name="salle" class="form-control" value = "">
            <option value="Secretariat">Secrétairiat</option>
            <option value="Caisse">Caisse</option>
            <option value="Académie direction">Académie direction</option>
            <option value="Direction générale">Direction générale</option>
            <option value="Informatique (annexe) ">Informatique (annexe) </option>
            <option value="Graphiste">Graphiste</option>
            <option value="Magasin">Magasin</option>
          </select>
        </div>

        <div class="input-group input-group-outline mb-3">
          <label class="">Etat :  </label>
          <select name="etat" class="form-control" value = "">
            <option value="OK">OK</option>
            <option value="defectieux">defectieux</option>
          </select>
        </div>
        <button name = "ajouter" type="submit" class="ajouter" id="ajouter">AJOUTER</button><br>
      </form>
    </div>
  </div>

<div class="card card-body mx-3 mx-md-4 mt-n6 " style="color: black; ">
       
<div class="div-container my-5 ">
      <h2>Liste du Materiel</h2>

     
      <br>
      <table class="table dataTable " id="mytable">
          <thead>
            <tr> 
              <th>ID</th>
              <th>Libelle</th>
              <th>Description</th>
              <th>prix</th>
              <th>salle</th>
              <th>Etat</th>
              <th>Enregistrer le : </th>
              <th>Actions </th>
            </tr>
          </thead>
         <tbody class = "bg-gradient-dark">
          
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
              if (mysqli_num_rows($result) > 0) { 
             
                while ($row = $result->fetch_assoc()) {
              ?>
                    <tr class = "bg-gradient-dark   ps bg-white" >
                        <td><?=$row['id']?></td>
                        <td><?=$row['libelle']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['prix']?></td>
                        <td><?=$row['salle']?></td>
                        <td><?=$row['etat']?></td>
                        <td><?=$row['Enregistré_le']?></td>
                        <td>
                            <a class="btn btn-primary btn-sm edit-btn" href="../phppages/edit.php?id=<?=$row['id']?>">Modifier</a>
                            <a class="btn btn-danger  btn-sm"  href="../phppages/delete.php?id=<?=$row['id']?>">Supprimer</a>
                        </td>
                    </tr>
    <?php
        }
      }else { 
        echo "Aucun materiel trouvé."; 
    } 
    ?>         
            <?php
               $result->free_result();
               $conn->close();
            ?>
          
         </tbody>
      </table>
  </div>
</div>

    
</div>
</div>

<div class="modal1-container " id="modalcom-container">
      <?php   
          $host = "localhost";
          $user ="root";
          $pass ="";
          $db ="gestion_materiel";
          
          $errormessage = "";
          $messagereussi = "";
          
          $conn = mysqli_connect($host, $user, $pass, $db);
          
          //verrification de la connection 
          
          if(!$conn) {
              die("erreur de connexion:" . mysqli_connect_error());
          }
      ?>
      

   <div class="modal1 bg-gradient-dark" id="modalcom">
        <h3 style="color: black; ">Commander</h3><br>
        <button id="closemodalcom" style="float: right; margin-top: -65px; border-radius: 50%; font-weight: 700; border: none;   background-color: transparent; width: 20px; ">x</button>
        
      <form action="../phppages/mail.php" method="POST" role="form">
        <div class="input-group input-group-outline mb-3">
          <label class="form-label" >libellé </label>
          <input type="text" name="libelle" class="form-control"  required>
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label">Description</label>
          <input type="text" name="description" class="form-control" required>
        </div>    
        <div class="input-group input-group-outline mb-3">
          <label class="form-label">Quantite</label>
          <input type="number" name="qte" class="form-control" required>
        </div>  
        <div class="input-group input-group-outline mb-3">
          <select class ="form-control" name="fournisseur" required>
            <option value="" disabled selected>Choisissez un fournisseur</option>
            <option class=" bg-gradient-dark" value="fournisseur1">mahima</option>
            <option class="bg-gradient-dark" value="fournisseur2">electroshop</option>
          </select>  
        </div>
        <button name = "commander" type="submit" class="ajouter" id="commander">commander</button><br>
      </form>
    </div>
  </div>
  </main>

  <!-- paramettres -->
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configuration du theme </h5>
        </div>
       
        <!-- End Toggle Button -->
      </div>
      <div class="card-body pt-sm-3 pt-0">
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Blanc / Noir</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox"  id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    } 
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const showmodal = document.getElementById("showmodal");
      const closemodal = document.getElementById("closemodal");
      const modalContainer = document.getElementById("modal-container");
      const modal = document.getElementById("modal");
      const ajouterBtn = document.getElementById("ajouter");
      const navbar = document.getElementById("iconSidenav");
      


      ajouterBtn.addEventListener("click",function() {
        modalContainer.style.display = "none";
        modal.style.display = "none";
      });
      showmodal.addEventListener("click", function() {
        modalContainer.style.display = "block";
        modal.style.display = "block";
        document.body.classList.add("showmodal");
        closenav();
      });
  
      closemodal.addEventListener("click", function() {
        modalContainer.style.display = "none";
        modal.style.display = "none";
      });
  
      function closenav() {
        navbar.click();
      }
    });
  </script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
  const showmodal1 = document.getElementById("showmodal1");
  const closemodalcom = document.getElementById("closemodalcom");
  const modalcomContainer = document.getElementById("modalcom-container");
  const modalcom = document.getElementById("modalcom");
  const commander = document.getElementById("commander");
  const navbar = document.getElementById("iconSidenav");

  commander.addEventListener("click", function() {
    modalcomContainer.style.display = "none";
    modalcom.style.display = "none";
  });

  showmodal1.addEventListener("click", function() {
    modalcomContainer.style.display = "block";
    modalcom.style.display = "block";
    document.body.classList.add("showmodal1");
    closenav();
  });

  closemodalcom.addEventListener("click", function() {
    modalcomContainer.style.display = "none";
    modalcom.style.display = "none";
  });

  function closenav() {
    navbar.click();
  }
});
</script>

<script>
    
  document.addEventListener("DOMContentLoaded", function() {
      const close = document.getElementById("close");
      const navbar = document.getElementById("iconSidenav");
      const edit = document.getElementById("edit");
      const modalContain = document.getElementById("modal-contain");
      const modifier = document.getElementById("modifier");
      const editButtons = document.getElementsByClassName("edit-btn");

      
      modifier.addEventListener("click",function() {
        modalContain.style.display = "none";
        modal.style.display = "none";
      });

      
      for (let i = 0; i < editButtons.length; i++) {
            editButtons[i].addEventListener("click", function() {
                const id = this.getAttribute("data-id");
                const modalEdit = document.getElementById("modalEdit");
                modalContain.style.display = "block";
                modalEdit.style.display = "block";
            });
        }

      close.addEventListener("click", function() {
        modalContain.style.display = "none";
        modalEdit.style.display = "none";
      });

      function closenav() {
        navbar.click();
      }

    });
    $(document).ready(function() {
  $(".modifier").click(function() {
    var id = $(this).data("id");

    // Ouvrir la fenêtre modale de modification
    $("#modal-contain").show();
  });

  // Gérer la fermeture de la fenêtre modale
  $("#close").click(function() {
    $("#modal-contain").hide();
  });
 });
</script>
<script>

  $(document).ready(function() {
      var table = $('#mytable').DataTable();
      
      $('#search-input').on('keydown', function(e) {
          if (e.keyCode === 13) { // Vérifie si la touche Entrée est pressée (keyCode 13)
              table.search(this.value).draw(); // Effectue la recherche et redessine le tableau
          }
      });
      if ($.fn.dataTable.isDataTable('#mytable')) {
    // La table est déjà une instance DataTable, vous pouvez utiliser l'API DataTable pour interagir avec elle.
    $('#mytable').DataTable().destroy();
  } else {
      // La table n'est pas encore une instance DataTable, vous pouvez l'initialiser ici.
      $('#mytable').DataTable();
  }
        $('#mytable').DataTable({
          language: {
              "sInfo": "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
              "sInfoEmpty": "Affichage de 0 à 0 sur 0 entrée",
              "sInfoFiltered": "(filtré à partir de _MAX_ entrées au total)",
              "sEmptyTable": "Aucune donnée disponible dans le tableau",
              "sZeroRecords": "Aucun enregistrement correspondant trouvé",
              "sSearch": "Rechercher :",
              "oPaginate": {
                  "sFirst": "Premier",
                  "sLast": "Dernier",
                  "sNext": "Suivant",
                  "sPrevious": "Précédent"
              }
          }
      });
      
    });
</script>
<script>
    function toggleDarkMode() {
    var body = document.body;
    var elements = document.getElementsByClassName('dark-theme');

    if (body.classList.contains('dark-mode')) {
      body.classList.remove('dark-mode');
      for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove('dark-theme');
      }
    } else {
      body.classList.add('dark-mode');
      for (var i = 0; i < elements.length; i++) {
        elements[i].classList.add('dark-theme');
      }
    }
 }
</script>
<style>
  @media screen and (max-width: 767px) {
    #mytable {
      overflow-x: auto;
    }

    #mytable thead {
      display: none;
    }

    #mytable tbody,
    #mytable tr {
      display: block;
      width: 100%;
    }

    #mytable td {
      display: inline-block;
      width: 50%;
      border-bottom: 1px solid #ddd;
      text-align: left;
      padding: 8px;
    }

    #mytable tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  }
</style>
</body>
</html>