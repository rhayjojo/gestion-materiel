
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo-ct.png">
  <link rel="icon" type="image/png" href="../assets/img/logo-ct.png">
  <title>
    Gestion du materiel d'epfa pro
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/customize.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-200">
  <aside class="sidenav navbar navbar-verticals navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white" style="font-size: 30px;">utilisateur</span>
        
      </a> 
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8"></h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../htmlpages/users.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item" >
          <button class="nav-link text-white " id="showmodal" style="background-color: transparent; ">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons circle-icon">add</i>
            </div>
            <span class="nav-link-text ms-1">Demander un materiel</span>
          
        </li>
      </button>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="main-content position-relative max-height-vh-100 h-100">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">EPFA PRO</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Materiel</li>
            </ol>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 "  style="justify-content: end;" id="navbar">
         
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item" >
                <button class="nav-link text-white " id="showmodal" style="background-color: transparent; border-radius: 15px;">
                  
                  <span class="nav-link-text ms-1" style="margin-top: -40px;">Demander un materiel</span>
                
              </li>
            </button>
              
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
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg');">
          <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
       
    <div class="modal-container" id="modal-container">
      <div class="modal" id="modal">
        <h3 style="color: black; ">Demander un matériel</h3><br>
        <button id="closemodal" style="float: right; margin-top: -70px; border-radius: 50%; font-weight: 700; border: none;   background-color: transparent; width: 20px; ">x</button>
        
  
        <div class="input-group input-group-outline mb-3">
          <label class="form-label">nom du materiel</label>
          <input type="text" class="form-control">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label class="form-label">Specialite</label>
          <input type="text" class="form-control" required>
        </div>
        <button class="demander" id="demander">Demander</button><br>
        
      </div>
    </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
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
        <!-- <div class="row">
            <div class="row">
              <div class="col-12 col-xl-4">
                <div class="card card-plain h-100">
                  <div class="card-header pb-0 p-3">
                    <h6 class="mb-0"></h6>
                  </div>
                  <div class="card-body p-3">
                  
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
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
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
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
</body>
</html>