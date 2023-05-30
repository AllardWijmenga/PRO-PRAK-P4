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
<img src="img/Contactpagina/background2.png" alt="" class="productbannercontact2">
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