<?php 

try {
    $db = new PDO("mysql:host=localhost;port=3306;dbname=haarstudioaussergewoehnlich;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOEXxecption $e) {
    die('self error!');
}


function checkPassword($username, $password) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM account WHERE username = :username");
    $stmt->bindParam("username", $username);
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        while($res = $stmt->fetch()) {
            $password_getted = $res[1];
            $password_hash = hash('sha256', $password);
            if($password_getted == $password_hash) {
                $_SESSION['loggedIn'] = true;
                header("Location: index.php");
            } else {
                echo("<script>alert('Passwort ist falsch!')</script>");
            }
        }
    } else {
        echo("<script>alert('Dieser Benutzer existiert nicht!')</script>");
    }
 }


if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    checkPassword($username, $password);
    
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
    <div class="form-entry-section">
        <h1>Einloggen</h1>
        <form action="" method="post">
            <input name="username" class="name-input" type="text" placeholder="Benutzername">
            <input name="password" type="password" placeholder="Password">
            <button name="submit" type="submit">Eintragen</button>
        </form>
    </div>
</body>