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

// using the function to update the database
UpdateDBInfo('Info1');


$row = "";

?>
<form action="update.php" method="post">

    <label for="Content">pas de Content hier aan</label>
    <textarea id="Content" name="Content" rows="4" cols="50">
    <?php $result = GetDBInfo('Info1', 1);
    foreach ($result as $info) {
        echo "$info->Info1";
    } ?>
    </textarea>


    <input type="hidden" name="Id" value=" <?php $result = GetDBInfo('Info1', 1);
                                            foreach ($result as $info) {
                                                echo "$info->Info1ID";
                                            } ?>">
    <input type="submit" value="Update dit veld" class="button">
</form>


<form action="update.php" method="post">

    <label for="Content">pas de Content hier aan</label>
    <textarea id="Content" name="Content" rows="4" cols="50">
    <?php $result = GetDBInfo('Info1', 1);
    foreach ($result as $info) {
        echo "$info->Info1";
    } ?>
    </textarea>


    <input type="hidden" name="Id" value=" <?php $result = GetDBInfo('Info1', 1);
                                            foreach ($result as $info) {
                                                echo "$info->Info1ID";
                                            } ?>">
    <input type="submit" value="Update dit veld" class="button">
</form>



<?php

?>