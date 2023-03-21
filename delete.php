<?php
if(isset($_POST['confirmDelete'])){
  $id = $_GET['deleteId'];
  echo $id;
    $host ='localhost';
    $username = 'root';
    $password = '';
    $db ='gestion_immoblie';
    $conn = mysqli_connect($host,$username,$password,$db);
    if($conn){ 
     $query = "DELETE FROM `annonces 2` WHERE id=$id ";
     $excute = mysqli_query($conn,$query);
     if($excute){
   header("location: ./index.php");}}
}
if(isset($_POST['cancel'])){
  header('location: ./index.php');
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
    <link id="switch-Theme" rel="stylesheet" href="./styles/lightTheme.css" />

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
      <main  class='main-delete'>
          <section class="deleteSection">
            <form method='post'>
              <button name='cancel' id="cancel">X</button>
              <h1 class="delete-header">Confirmer la suppression de cette annonce</h1>
              <div class="delete_buttons">
                  <button name='confirmDelete' id="confirm-delete">Confirm</button>
                </form>
              </div>
          
          </section>
    </div>
    <script src="./javascript/app.js"></script>
    <!-- <script src="./main.js"></script> -->
  </body>
</html>
