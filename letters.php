<?php

require "functions.php";
require "Database.php";
$config = require("config.php");

$db = new Database($config ["database"]);
$letters = $db->query("SELECT * FROM letters")->fetchAll();


echo "<ul>";
    foreach ($letters as $letter){
        echo 
            "<li>" . $letter["sender_id"] . " "
            . $letter["letter_text"] . " "
            . "</li>"
        ;
    }
echo "</ul>";
