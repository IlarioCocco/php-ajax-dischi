<?php
require __DIR__ . "/database.php";
// var_dump ($database);
//il var_dump si utilizza per vedere il tipo di dato(array)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- style css -->
    <!-- simboli font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- simboli font-awesome -->
    <!-- font google Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- font google Open Sans -->
    <title>php-ajax-dischi</title>
</head>

<body>
    <?php include __DIR__ . "/template/header.php"; ?>

    <?php include __DIR__ . "/template/main.php"; ?>
    <!-- echo __DIR__;die; ?> utilizzato in debug per verificare il percorso dei file/cartelle -->
    <!-- C:\Users\lallo\OneDrive\Desktop\boolean 2021\esercizi\php-ajax-dischi esempio percorso-->
</body>

</html>