<?php include "functions.php";
    include ('config.php');?>

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
  <div class="container-contact">
<header>
    <nav class="nav-bar">
      <div class="container">
      <a href="index.php" class="logo"><img src="img/sl5.png" alt="Logo"></a>
        <ul>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="product.php">Product</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="aboutus.php">About us</a></li>
        </ul>
      </div>
    </nav>
  </header>
</div>

<img src="img/Contactpagina/background1.png" alt="" class="productbannercontact1">

<div class="container-contactform">
    <div class="contacttext">
        <h1>CONTACT ONS!</h1>
        <img src="img/Contactpagina/arrowdown.png" class="contactarrowdown">
       
    </div>
    <div class="contact-form">
    <form action="" method="POST"><br><br><br>
    <input type="text" id="naam" name="naam" placeholder="NAAM" required><br><br>
    <input type="email" id="email" name="email" placeholder="EMAIL" required><br><br>
    <input type="tel" id="telefoon" name="telefoon" placeholder="TELEFOON" required><br><br>
    <textarea id="bericht" name="bericht" placeholder="UW BERICHT..." rows="4" cols="50" required></textarea><br><br>

    <input class="submitcontact" type="submit" value="STUREN!">
    </div>

   
    <img src="img/Contactpagina/background2.png" alt="" class="productbannercontact2">
    <div class="contact-bottom">
      <h3>Wil jij up to date blijven van Starlink!</h3>
      <div class="contactuptodateform">
        <form action="" method="POST">
          <input class="emailsignup" type="email" id="Email" name="Email" placeholder="EMAIL"><br><br>
          <input class="submitsignup" type="submit" value="SIGN UP">
      </div>
    </div>
    <img src="img/Contactpagina/background3.png" alt="" class="productbannercontact3">


</div>

<?php 
    // running the function if the users email is set
    if(isset($_POST['Email']))
    {
    send_email($_POST['Email']);

    //inserting data into the databse
    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";
    
    try {
        $pdo = new PDO($dsn, $dbUser, $dbPass);
    } catch (PDOException $e) {
        echo "er is helaas geen verbinding met de DB";
        echo $e->getMessage();
    }

    $sql = "INSERT INTO Contact (  Name,
                                Email,
                                Telefoon,
                                Opmerking

                             )
        VALUES                  (:name,
                                 :email,
                                 :Telefoon,
                                 :Opmerking);";

//maakt de query gereed met de prepare method 
$statement = $pdo->prepare($sql);
$statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
$statement->bindValue(':email', $_POST['Email'], PDO::PARAM_STR);
$statement->bindValue(':Telefoon', $_POST['Telefoon'], PDO::PARAM_STR);
$statement->bindValue(':Opmerking', $_POST['Opmerking'], PDO::PARAM_STR);
$statement->execute();
    }?>
</body>
</html>