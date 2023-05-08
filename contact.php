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
    <!-- input to get user data  -->
<form action="contact.php" method="post">
    <label for="Naam">Uw Naam :</label>
    <input type="text" name="name" id="name">
    <label for="email">Uw email :</label>
    <input type="email" name="Email" id="Email">
    <label for="Telefoon">Telefoon :</label>
    <input type="tel" name="Telefoon" id="Telefoon">
    <label for="Opmerking">Opmerking :</label>
    <input type="text" name="Opmerking" id="Opmerking">
    <input type="submit" value="Submit">
    </form>

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