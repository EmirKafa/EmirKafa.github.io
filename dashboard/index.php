<?php 


    session_start();

    if(isset($_SESSION["loggedIn"])) {
        if($_SESSION["loggedIn"] == true) {
            
        } else {
            header("Location: login.php");
        }
    }

?>


<!doctype html>

<html lang="de">

<head>
    <meta charset="utf-8">

    <title>Haarstudio Aussergewöhnlich | Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
    <h1>Willkommen im Dashboard</h1>
    <div class="options">
        <a href="preisanpassung.php">Preise anpassen</a>
        <a href="gästebuchverwaltung.php">Gästebucheinträge verwalten</a>
    </div>
</body>