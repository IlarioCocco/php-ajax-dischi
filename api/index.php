<?php
// phpinfo();
require __DIR__ . "/../database.php";
header("Content-Type: application/json");
echo json_encode($database); 
// var_dump ($database);
// var_dump (json_encode ($database)); die;
// il var_dump si utilizza per vedere il tipo di dato(array)
// require interrompe tutto il programma generando un fatal error
?>

