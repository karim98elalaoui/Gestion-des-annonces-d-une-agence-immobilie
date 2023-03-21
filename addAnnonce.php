<?php
if(isset($_POST['addBtn'])){
  $hostName ='localhost';
  $userName ='root';
  $passWord ='';
  $db ='gestion_immoblie';
  $connection = mysqli_connect($hostName,$userName,$passWord,$db);
  if ($connection) {
   if(empty( $_POST['title']) || empty( $_POST['imgPath']) ||empty( $_POST['superficie']) || empty( $_POST['adresse']) || empty( $_POST['montant']) ||empty( $_POST['date']) ||empty( $_POST['type']) || empty( $_POST['description'])){
  }else{
     $titre = $_POST['title'];
     $imgPath = $_POST['imgPath'];
     $superficie = $_POST['superficie'];
     $adresse = $_POST['adresse'];
     $montant = $_POST['montant'];
     $date = $_POST['date'];
     $type = $_POST['type'];
     $description = $_POST['description'];
      $query = "INSERT INTO `annonces 2`(`titre`, `image`, `discription`, `superficie`, `adresse`, `Montant`, `Date`, `Type`) VALUES ('$titre','$imgPath','$description','$superficie','$adresse','$montant','$date','$type')";
      $excute = mysqli_query($connection, $query);
      if($excute){
        header('location: ./index.php');
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
            ></a>;
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
            <input name="title" autocomplete="off" type="text"  placeholder='Titre' class="title" >
          </div> 
          <div class="mb-3">
            <input type="text" autocomplete="off" name='adresse' placeholder='adresse' class='adresse' >
          </div>
          <div class="mb-3 flex">
            <input type="number"  name='montant' placeholder='Montant'   class='montant'  >
            <input  type="number"  class="superficie" name="superficie" placeholder='Superficie'>
          </div>
          <div class="mb-3 flex">
            <input type="text"autocomplete="off" name='type' placeholder='Type'  class='typeInp'  >
            <input type="date" class="date"  name='date' placeholder='Date'  >
          </div>
          <div class="mb-3 flex">
            <input type="file" id="imgInput"  class='imagpath'  name="imgPath" accept="image/*">
          </div>
          <div class="mb-3 ">
            <textarea name="description"  placeholder='Description'  class='discription'   cols="50" rows="3"></textarea>
          </div>
          <?php echo "<span class='text-danger'>* All Fields Required !!</span>"?>
          <div class="Form-buttons">
              <button   name='addBtn' id="confirmAdd" class="btn btn-primary fs-4">Submit</button>
          </div>
        </form>
    </section>
    </div>
    <!-- <script src="./javascript/verfication.js"></script> -->
    <script src="./javascript/app.js"></script>
  </body>
</html>
