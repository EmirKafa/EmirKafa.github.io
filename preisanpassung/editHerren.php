<?php 


try {
    $db = new PDO("mysql:host=localhost;port=3306;dbname=haarstudioaussergewoehnlich;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOEXxecption $e) {
    die('self error!');
}

function getHerren() {
    global $db;
    $stmt = $db->prepare("SELECT * FROM herren");
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        while($res = $stmt->fetch()) {
            echo('<tr>
                    <td>'.$res[1].'</td>
                    <td>'.$res[2].'</td>
                    <td><a href="editHerren.php?id='.$res[0].'">Bearbeiten</a></td>
                        </tr>
                        ');
        }
    }
 }


 function openPopup($id) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM herren WHERE id = :id");
    $stmt->bindParam("id", $id);
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        while($res = $stmt->fetch()) {
            echo('
        <div class="popup-input">
            <form style="position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 40%;
            height: 500px;
            background-color: #000;" method="post">
                <h1>Bearbeiten</h1>
                <input style="width: 70%;
                height: 20px;
                border: solid 2px #fff;
                margin-bottom: 20px;
                padding: 5px;
                color: #fff;
                background-color: #000;" name="service" type="text" placeholder="Service" value="'.$res[1].'">
                <input style="width: 70%;
                height: 20px;
                border: solid 2px #fff;
                margin-bottom: 20px;
                padding: 5px;
                color: #fff;
                background-color: #000;" name="price" type="text" placeholder="Preis" value="'.$res[2].'">
                <button style="width: 70%;
                padding: 10px 0;
                border: solid 2px #fff;
                background-color: #000;
                color: #fff;
                font-weight: bold;" name="submit" type="submit">Bearbeiten</button>
            </form>
        </div>
        ');
    }
 }
 }

 if(isset($_GET["id"])) {
    openPopup($_GET["id"]);
 }

 if(isset($_POST["submit"])) {
    $service = $_POST["service"];
    $price = $_POST["price"];
    saveEntry($service, $price);
 }

 function saveEntry($service, $price) {
    global $db;
    $stmt = $db->prepare("UPDATE herren SET service = :service, price = :price WHERE id = :id");
    $stmt->bindParam("service", $service);
    $stmt->bindParam("price", $price);
    $stmt->bindParam("id", $_GET["id"]);
    $stmt->execute();
    header("Location: editHerren.php");
 }


?>

<!doctype html>

<html lang="de">

<head>
    <meta charset="utf-8">

    <title>Haarstudio Aussergewöhnlich | Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="editHerren.css?v=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
    <h1>Willkommen im Dashboard</h1>
    <div class="entrys-section">
        
    <table>
    <tr>
        <th>Service</th>
        <th>Preis</th>
    </tr>
    <?php getHerren();?>
    </table>
    </div>
</body>