
<?php include "functions.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>
  <header>
    <nav class="nav-bar">
      <div class="container">
        <a href="index.php" class="logo"><img src="img/sl5.png" alt="Logo"></a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="product.php">Product</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="update.php">Update</a></li>
        </ul>
      </div>
    </nav>
  </header>


  <!-- vergeet niet de database te importeren voordat je deze pagina bekijkt!!!!!!!!!!!!! -->
  <div class="container">
    <div class="columnhp1">
      <h1><?php $result = GetDBInfo('Info1', 2);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></h1>
      <p> <?php $result = GetDBInfo('Info1', 3);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></p>
      <img src="img/Homepagina/camper.jpg" alt="img1">
    </div>
    <div class="columnhp2">
      <h1><?php $result = GetDBInfo('Info1', 4);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></h1>
      <p><?php $result = GetDBInfo('Info1', 5);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></p>
      <img src="img/Homepagina/roof.jpg" alt="img2">
    </div>
    <div class="columnhp3">
      <h1>EENVOUDIGE INSTALLATIE</h1>
      <p>Het standaard Starlink-pakket wordt geleverd met alles wat je nodig hebt om binnen enkele minuten online te gaan. De nieuwe Flat High Performance Starlink, ontworpen voor gebruik onderweg, is nu beschikbaar voor bestelling in geselecteerde markten. Zowel de Standaard als de Flat High Performance Starlink hebben een duidelijk zicht op de hemel nodig om verbinding te maken. Download de Starlink-app om de beste plaatsing voor jouw locatie te bepalen.</p>
      <img src="img/Homepagina/boat.jpg" alt="img3">
    </div>
  </div>




</body>

</html>