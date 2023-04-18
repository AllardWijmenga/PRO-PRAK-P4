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



function GetDBInfo($table)
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

        $sql = "SELECT $table FROM CMS order by Info1ID desc LIMIT 1";


//maakt de query gereed met de prepare method 
$statement = $pdo->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_OBJ);
return $result;

}