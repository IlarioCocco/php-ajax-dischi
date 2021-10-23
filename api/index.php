<?php
require __DIR__ . "/../database.php";
header("Content-Type: application/json");

if( !empty($_GET["genre"])) {
    $genre = $_GET["genre"];

    $databaseFiltered = [];

    foreach($database as $database) {
        if($genre == $database["genre"]) {

            $databaseFiltered[] = $database;
        }
    }
    echo json_encode($databaseFiltered); 
} else {
    echo json_encode($database); 
}

?>

