<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift List</title>
    <link rel="stylesheet" href="./stils.css">
</head>
<body>
    <?php 
    require "functions.php"; 
    require "Database.php"; 
    $config = require("config.php");  
    $db = new Database($config["database"]); 
    $gifts = $db->query("SELECT * FROM gifts")->fetchAll();   

    echo '<div class="gift-container">';
    echo "<ul class='gift-list'>";
    foreach ($gifts as $gift){
        echo "<li>"     
            . htmlspecialchars($gift["name"]) . " " 
            . htmlspecialchars($gift["count_available"]) 
            . "</li>";
    } 
    echo "</ul>";
    echo '</div>';
    ?>
</body>
</html>