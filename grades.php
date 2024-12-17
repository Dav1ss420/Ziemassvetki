<?php

require "functions.php";
require "Database.php";
$config = require("config.php");

$db = new Database($config ["database"]);
$grades = $db->query("SELECT * FROM grades")->fetchAll();


echo "<ul>";
    foreach ($grades as $grade){
        echo 
            "<li>" . $grade["student_id"] . " "
            . $grade["subject"] . " "
            . $grade["grade"] . " "
            . "</li>"
        ;
    }
echo "</ul>";
