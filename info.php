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
    <p><?php $result = GetDBInfo('Info1'); foreach($result as $info){echo "$info->Info1";}?></p>
    <?php var_dump($result);?>
</body>
</html>