<?php include "functions.php";
        include ('config.php')?>

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
  <img src="img/e520d488-3cfa-4d4e-98cf-e564dc55436b.jpg" alt="" class="productbanner">
  <div class="container">
    <div class="columnproduct1">
      <h1>Promotie</h1>
      <img src="img/starlink-rvs.jpg" alt="" class="productimg1">
    </div>
    <!-- <p><?php $result = GetDBInfo('Info1'); foreach($result as $info){echo "$info->Info1";}?></p> -->
</body>
</html>