<?php


require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//fucntion to send a mail using PHP mailer and gmail
function send_email($to_address)
{
    // Instantiate a new PHPMailer object
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'dsibdisdiuy63fduvsv@gmail.com'; // SMTP username
        $mail->Password = 'xdqevpeiaxidjkyz'; // SMTP password
        $mail->SMTPSecure = "tls"; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom('341652165a@gmail.com');
        $mail->addAddress($to_address); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'nieuwsbrief';


        $mail->Body = "Dankuwel voor het geven van uw data wij nemen snel contact met u op";

        // Send the email
        $mail->send();
        // echo 'Email has been sent to ' . $to_address;
    } catch (Exception $e) {
        echo 'Message could not be sent. Error: ' . $mail->ErrorInfo;
    }
}


// function to get the info from the database 
function GetDBInfo($table, $ID)
{
    include('config.php');

    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

    try {
        $pdo = new PDO($dsn, $dbUser, $dbPass);
    } catch (PDOException $e) {
        echo "er is helaas geen verbinding met de DB";
        echo $e->getMessage();
        die();
    }

    $sql = "SELECT $table , Info1ID FROM CMS where Info1ID = $ID order by Info1ID desc LIMIT 1 ";


    //maakt de query gereed met de prepare method 
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_OBJ);
    return $result;
}

// function to update databse info for the cms tables

function UpdateDBInfo($table)
{
    include('config.php');
    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

    try {
        $pdo = new PDO($dsn, $dbUser, $dbPass);
        if ($pdo) {
            // echo "er is een verbinding";
        } else {
            echo "er is een error";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        try {
            // Maak een update query voor het updaten van een record
            $sql = "UPDATE CMS
                    SET Info1ID = :Id,
                        Info1 = :Content
                    WHERE Info1ID = :Id";


            // Roep de prepare-method aan van het PDO-object $pdo
            $statement = $pdo->prepare($sql);

            // We moeten de placeholders een waarde geven in de sql-query
            $statement->bindValue(':Id', $_POST['Id'], PDO::PARAM_INT);
            $statement->bindValue(':Content', $_POST['Content'], PDO::PARAM_STR);


            $statement->execute();

            echo "Het record is geupdate";
        } catch (PDOException $e) {
            echo "Het record is niet geupdate";
            echo $e;
        }
        var_dump($_POST);

        exit();
    }
}
