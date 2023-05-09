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
      <p>Starlink is een internetdienst van SpaceX die een wereldwijd breedbandnetwerk van satellieten biedt. Het doel van de promotie van Starlink is om klanten een snelle, betrouwbare en betaalbare internetverbinding te bieden, zelfs op afgelegen locaties waar traditionele internetproviders geen dekking bieden.</p>
      <img src="img/starlink-rvs.jpg" alt="" class="productimg1">
    </div>
    <div class="columnproduct2">
      <h1>Customers</h1>
      <p>Starlink biedt voordelen voor klanten die geen toegang hebben tot betrouwbare internetverbindingen, vooral in landelijke en afgelegen gebieden. Het kan ook een goede optie zijn voor mensen die behoefte hebben aan een back-upinternetverbinding in het geval van een storing van de traditionele internetverbinding. Bovendien is het eenvoudig te installeren en is er geen kabel- of glasvezelinfrastructuur nodig.</p>
      <img src="img/Starlink-RV.webp" alt="" class="productimg2">
    </div>
    <div class="columnproduct3">
      <h1>Starlink concurreert</h1>
      <p>Starlink concurreert met traditionele internetproviders en andere satellietinternetproviders, maar onderscheidt zich door de hoge snelheid, betrouwbaarheid en lage latentie van de internetverbinding. Bovendien is het systeem ontworpen om de capaciteit te vergroten naarmate er meer satellieten in de ruimte worden gelanceerd, wat de prestaties en betrouwbaarheid in de toekomst zal verbeteren. Starlink is ook relatief goedkoop, met lage kosten voor apparatuur en installatie.</p>
      <img src="img/starlink-antenne-parabole-rectangulaire_2000x.webp" alt="" class="productimg3">
    </div>
  </div>
  <img src="img/Starlink.webp" alt="" class="productfooter">
    <!-- <p><?php $result = GetDBInfo('Info1' , 1); foreach($result as $info){echo "$info->Info1";}?></p> -->
    <!-- The GetDBInfo works by giving the table as a parameter and then the id of the table you want to view -->

</body>
</html>