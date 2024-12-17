<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Children List</title>
    <link rel="stylesheet" href="./stils.css">
</head>


<body>
    <?php

    require "functions.php";
    require "Database.php";
    $config = require("config.php");

    $db = new Database($config ["database"]);
        $children = $db->query("SELECT * FROM children")->fetchAll();


    echo "<ul>";
        foreach ($children as $child){
            echo 
                "<li>" . $child["firstname"] 
                . $child["middlename"] . " "
                . $child["surname"] . " "
                . $child["age"] . " " .
                "</li>"
            ;
        }
    echo "</ul>";
    ?>
</body>
</html>
