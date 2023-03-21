<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font awsome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
    crossorigin="anonymous"
    />
    <!-- font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Joti+One&family=Montserrat:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <style>
    
    </style>
  <link rel="stylesheet" href="./styles/lighttheme.css"">
    <title>Gestion des annonces</title>
  </head>
  <body>
    <form action="#" method="post">
    <div class="container-fluid">
      <nav class="navbar">
        <h1 class="logo">Haven Homes</h1>
        <ul class="nav-links">
          <li><a href="./index.php">Home</a></li>
          <li><a href="#">Properties</a></li>
          <li><a href="#">About</a></li>
          <li id="dark" >
            <a href=""
              ><i class="fa-solid fa-circle-half-stroke"></i
            ></a>
          </li>
        </ul>
      </nav>
      <main>
        <!-- filter section  -->
        <section class="filters">
          <div class="typeFilter">
            <!-- <label class="label" for="type">Type</label> -->
            <div id="typeFilter">
              <select name="selectType" class='selectType' style='padding:1rem; border:none; outline:none;   border-radius: 10px;' >
                <option selected value='all' style=' padding:1rem; border:none;' name='allBtn'  id="all">All</option>
                <option  value='location' style='outline:none; padding:1rem; border:none;' name='locationBtn' id="location">location</option>
                <option value='vente' style='outline:none; padding:1rem; border:none;' name='venteBtn'  id="vente">Vente</option>
              </select>
            </div>
          </div>
          <div class="montantFilter">
            <!-- <label  class="label" for="montant">Montant</label> -->
            <div id="montantFilter">
                <input value='' name="minInp"   placeholder="Min" type="number" >
                <input  value=''  name="maxInp" placeholder="Max" type="number">
                <button type='submit' name='searchBtn' class="searchBtn">Search</button>
                <!-- <div class="search-div">
          </div> -->
            </div>
          </div>
         
          <div class="add-div">
            <button ><a href='./addAnnonce.php'class="addBtn">Add new annonce</a></button>
          </div>
        </section>
        <section class="output flex">
        <?php
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $dbName = 'gestion_immoblie';
        $conn = mysqli_connect($server,$username,$password,$dbName);
        if($conn){
          //if filter button is clicked 
          if(isset($_POST['searchBtn'])){
            //select all 
              $selectValue = $_POST['selectType'];
              if($selectValue == 'all'){
                //if ALL selected
                    if($_POST['maxInp'] && $_POST['minInp']){
                      $maxInp = $_POST['maxInp'];
                      $minInp = $_POST['minInp'];
                      $data = "SELECT * FROM `annonces 2` WHERE montant BETWEEN $minInp AND $maxInp";
                      $query = mysqli_query($conn,$data);
                      include("./php/display.php");
                      exit;
                    }else if($_POST['minInp']){
                          $minInp = $_POST['minInp'];
                          $data = "SELECT * FROM `annonces 2` WHERE montant>$minInp";
                          $query = mysqli_query($conn,$data);
                          include("./php/display.php");
                          exit;
                    }else if ($_POST['maxInp']){
                          $maxInp = $_POST['maxInp'];
                          $data = "SELECT * FROM `annonces 2` WHERE montant<$maxInp  ";
                          $query = mysqli_query($conn,$data);
                          include("./php/display.php");
                          exit;
                    }else{
                          $data = "SELECT * FROM `annonces 2`";
                          $query = mysqli_query($conn,$data);
                          include("./php/display.php");
                    }
              }else{
                if($_POST['maxInp'] && $_POST['minInp']){
                  $maxInp = $_POST['maxInp'];
                  $minInp = $_POST['minInp'];
                  $data = "SELECT * FROM `annonces 2` WHERE montant BETWEEN $minInp AND $maxInp AND type='$selectValue'";
                  $query = mysqli_query($conn,$data);
                  include("./php/display.php");
                  exit;
                }else if($_POST['minInp']){
                      $minInp = $_POST['minInp'];
                      $data = "SELECT * FROM `annonces 2` WHERE montant>$minInp AND type='$selectValue'";
                      $query = mysqli_query($conn,$data);
                      include("./php/display.php");
                      exit;
                }else if ($_POST['maxInp']){
                      $maxInp = $_POST['maxInp'];
                      $data = "SELECT * FROM `annonces 2` WHERE montant<$maxInp  AND type='$selectValue'";
                      $query = mysqli_query($conn,$data);
                      include("./php/display.php");
                      exit;
                }else{
                      $data = "SELECT * FROM `annonces 2` WHERE type='$selectValue'";
                      $query = mysqli_query($conn,$data);
                      include("./php/display.php");
                }
                
              }
            }else{
            $data = "SELECT * FROM `annonces 2`";
            $query = mysqli_query($conn,$data);
            include("./php/display.php");
            }
        }
    
        ?> 
        </section>
      </main>
      <footer></footer>
    </div>
    </form>
   <script src="./javascript/app.js"></script>

    
  </body>
</html>
