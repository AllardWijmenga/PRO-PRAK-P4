<?php
include('config.php');
require_once('functions.php');

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




// var_dump($result);


// echo $result[0]->Voornaam;

$row = "";

?>
<form action="info.php" method="post">

    <label for="Content">pas de Content hier aan</label>
    <textarea id="Content" name="Content" rows="4" cols="50">
    <?php $result = GetDBInfo('Info1', 1);
    foreach ($result as $info) {
        echo "$info->Info1";
    } ?>
    </textarea>

    <label for="Content2">Pas hier de content aan testing </label>
    <textarea id="Content" name="Content" rows="4" cols="50">
    <?php $result = GetDBInfo('Info1', 2);
    foreach ($result as $info) {
        echo "$info->Info1";
    } ?>
    </textarea>

</form>

<?php

?>
<tabler>
    <thead>
        <th>Voornaam</th>
        <th>Tussenvoegsel</th>
    </thead>
    <tbody>
        <?php echo $row ?>
    </tbody>
    </table>