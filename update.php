
<?php
    $id = $_GET['updateId'];
    $hostName ='localhost';
    $userName ='root';
    $passWord ='';
    $db ='gestion_immoblie';
    $connection = mysqli_connect($hostName,$userName,$passWord,$db);
    if($connection){
        $data = "SELECT * FROM `annonces 2` WHERE id=$id";
        $excute = mysqli_query($connection,$data);
        if($excute){
            $row = mysqli_fetch_assoc($excute);
            $title = $row['titre'];
            $image = $row['image'];
            $description = $row['discription'];
            $superficie = $row['Superficie'];
            $adresse = $row['adresse'];
            $montant = $row['montant'];
            $date = $row['date'];
            $type = $row['type'];
            if(isset($_POST['updateBtn'])){
                if(empty( $_POST['title']) || empty( $_POST['superficie']) || empty( $_POST['adresse']) || empty( $_POST['montant']) ||empty( $_POST['date']) ||empty( $_POST['type']) || empty( $_POST['description'])){
                }else{
                    $titreInp = $_POST['title'];
                    $imgPathInp = $_POST['imgPath'];
                    $superficieInp = $_POST['superficie'];
                    $adresseInp = $_POST['adresse'];
                    $montantInp = $_POST['montant'];
                    $dateInp = $_POST['date'];
                    $typeInp = $_POST['type'];
                    $descriptionInp = $_POST['description'];
                    if ($connection) {
                    $query = "UPDATE `annonces 2` SET `titre`='$titreInp',`image`='$imgPathInp',`discription`='$descriptionInp',`Superficie`='$superficieInp',`adresse`='$adresseInp',`montant`='$montantInp',`date`='$dateInp',`type`='$typeInp' WHERE id=$id ";
                    $excute = mysqli_query($connection, $query);
                    if($excute){
                    header('location: ./index.php');
                    }
                  
                    }

                }
            }
            
        }
    }
  



?>
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
    <link id="switch-Theme" rel="stylesheet" 
    href="./styles/lightTheme.css" />
    <title>Gestion des annonces</title>
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar">
        <h1 class="logo">Haven Homes</h1>
        <ul class="nav-links">
          <li><a href="./index.php">Home</a></li>
          <li><a href="#">Properties</a></li>
          <li><a href="#">About</a></li>
          <li id="dark" >
            <a href="#"
              ><i class="fa-solid fa-circle-half-stroke"></i
            ></a>
          </li>
          <!-- <li id="notifaction" >
            <a href="#"><i class="fa-solid fa-bell"></i></a>
          </li> -->
        </ul>
      </nav>
      <section class='addAnnonce'>
        <form   class="addForm" method="post">
          <h3 class="addHeader">Add New Announce </h3>
          <div class="mb-3">
            <input name="title" value=<?php echo $title?> autocomplete="off" type="text"  placeholder='Titre' class="title" >
          </div> 
          <div class="mb-3">
            <input type="text" value=<?php echo $adresse?>  autocomplete="off" name='adresse' placeholder='adresse' class='adresse' >
          </div>
          <div class="mb-3 flex">
            <input type="number"  value=<?php echo $montant?>  name='montant' placeholder='Montant'   class='montant'  >
            <input  type="number"  value=<?php echo $superficie?>  class="superficie" name="superficie" placeholder='Superficie'>
          </div>
          <div class="mb-3 flex">
            <input type="text"autocomplete="off"  value=<?php echo $type?>  name='type' placeholder='Type'  class='typeInp'  >
            <input type="date" class="date" value=<?php echo $date?>   name='date' placeholder='Date'  >
          </div>
          <div class="mb-3 flex">
            <input type="file" id="imgInput" value=<?php $image?>  class='imagpath'  name="imgPath" accept="image/*">
          </div>
          <div class="mb-3 ">
            <textarea name="description"  placeholder='Description'  class='discription'   cols="50" rows="3"> <?php echo $description?> </textarea>
          </div>
          <?php echo "<span class='text-danger'>* All Fields Required !!</span>"?>
          <div class="Form-buttons">
              <button  type='submit' name='updateBtn' id="confirmAdd" class="btn btn-primary fs-4">update</button>
          </div>
        </form>
    </section>
    </div>
    <!-- <script src="./javascript/verfication.js"></script> -->
    <script src="./javascript/app.js"></script>
  </body>
</html>
