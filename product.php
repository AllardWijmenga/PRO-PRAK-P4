<?php include "functions.php";
include('config.php') ?>

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
        </ul>
      </div>
    </nav>
  </header>
  <div>
    <img src="img/e520d488-3cfa-4d4e-98cf-e564dc55436b.jpg" alt="" class="productbanner">
    <!-- <button class="buttonproduct"><span><a href="#test">Lees meer </a></span></button>  -->
  </div>
  <div class="containerproduct">
    <div id="test" class="columnproduct1">
      <h1><?php $result = GetDBInfo('Info1', 8);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></h1>
      <p><?php $result = GetDBInfo('Info1', 9);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></p>
      <img src="img/starlink-rvs.jpg" alt="" class="productimg1">
    </div>
    <div class="columnproduct2">
      <h1><?php $result = GetDBInfo('Info1', 10);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></h1>
      <p><?php $result = GetDBInfo('Info1', 11);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></p>
      <img src="img/Starlink-RV.webp" alt="" class="productimg2">
    </div>
    <div class="columnproduct3">
      <h1><?php $result = GetDBInfo('Info1', 12);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></h1>
      <p><?php $result = GetDBInfo('Info1', 13);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></p>
      <img src="img/starlink-antenne-parabole-rectangulaire_2000x.webp" alt="" class="productimg3">
    </div>
  </div>
  <img src="img/Starlink.webp" alt="" class="productfooter">
  <!-- <p><?php $result = GetDBInfo('Info1', 1);
          foreach ($result as $info) {
            echo "$info->Info1";
          } ?></p> -->
  <!-- The GetDBInfo works by giving the table as a parameter and then the id of the table you want to view -->

</body>

</html>