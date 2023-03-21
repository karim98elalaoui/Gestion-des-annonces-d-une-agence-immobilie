<?php
while($row = mysqli_fetch_assoc($query)){
  $id = $row['id'];
  $title = $row['titre'];
  $image = $row['image'];
  $description = $row['discription'];
  $superficie = $row['Superficie'];
  $adresse = $row['adresse'];
  $montant = $row['montant'];
  $date = $row['date'];
  $type = $row['type'];
  if($type =='vente'){
    echo '
    <div class="card">
      <div  class="type"><h3 style="  background-color: yellow; color:black; padding:1rem;"class="typehead"> '.$type.'</h3></div>
      <div class="img-part">
          <img src="./images/'.$image.'" alt="apartemet">
      </div>
      <div class="content-part">
          <div class="card-content flex">
              <h3 class="name">'.$title.'</h3>
              <h3 class="name">'.$superficie.' <span class="small">m2</span></h3>
          </div>
          <div class="card-top flex">
              <h3 class="montant">'.$montant.' <span class="small">Mad</span></h3>
              <div class="adresse-info flex">
                  <i class="fa-sharp fa-solid fa-location-dot"></i>
                  <h3 class="adresse">'.$adresse.'</h3>
              </div>
          </div>
          
          <div class="card-discription">
              <p class="discription">'.$description.'</p>
          </div>
          <div class="card-buttons">
            <a href="./update.php?updateId='.$id.'" id='.$id.'  class="updateBtn"> Update</a>
            <a href="./delete.php?deleteId='.$id.'" type="submit" id='.$id.' class="deleteBtn">Delete</a>
          </div>
      </div>
    </div>';
  }else{
    echo '
      <div class="card">
        <div  class="type"><h3 style=" margin-left:2rem ; background-color: green; padding:1rem;" class="typehead"> '.$type.'</h3></div>
        <div class="img-part">
            <img src="./images/'.$image.'" alt="apartemet">
        </div>
        <div class="content-part">
            <div class="card-content flex">
                <h3 class="name">'.$title.'</h3>
                <h3 class="name">'.$superficie.' <span class="small">m2</span></h3>
            </div>
            <div class="card-top flex">
                <h3 class="montant">'.$montant.' <span class="small">Mad</span></h3>
                <div class="adresse-info flex">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                    <h3 class="adresse">'.$adresse.'</h3>
                </div>
            </div>
            
            <div class="card-discription">
                <p class="discription">'.$description.'</p>
            </div>
            <div class="card-buttons">
              <a href="./update.php?updateId='.$id.'" id='.$id.'  class="updateBtn"> Update</a>
              <a href="./delete.php?deleteId='.$id.'" type="submit" id='.$id.' class="deleteBtn">Delete</a>
            </div>
        </div>
      </div>';
  }

}
?>

