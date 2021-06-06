<?php 

try {
    $db = new PDO("mysql:host=localhost;port=3306;dbname=haarstudioaussergewoehnlich;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOEXxecption $e) {
    die('self error!');
}

?>


<!doctype html>

<html lang="de">

<head>
    <meta charset="utf-8">

    <title>Haarstudio Aussergewöhnlich | Preisanpassung</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="preisanpassung.css?v=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
    <h1>Preiskategorien</h1>
    <div class="options">
        <a href="../preisanpassung/editDamen.php">Damen</a>
        <a href="../preisanpassung/editFarbe.php">Farben / Strähnen</a>
        <a href="../preisanpassung/editHerren.php">Herren</a>
        <a href="../preisanpassung/editKosmetik.php">Kosmetik</a>
    </div>

</body>