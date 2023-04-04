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
    <!-- input to get user email  -->
<form action="contact.php" method="post">
    <input type="email" name="Email" id="Email">
    <label for="Email">Voer hier uw email in voor onze nieuwsbrief</label>
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

    $sql = "INSERT INTO user ( Email

                             )
        VALUES                  (:email);";

//maakt de query gereed met de prepare method 
$statement = $pdo->prepare($sql);
$statement->bindValue(':email', $_POST['Email'], PDO::PARAM_STR);
$statement->execute();
    }?>
</body>
</html>