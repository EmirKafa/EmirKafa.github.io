<?php 

    try {
        $db = new PDO("mysql:host=localhost;port=3306;dbname=haarstudioaussergewoehnlich;charset=utf8", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOEXxecption $e) {
        die('self error!');
    }

    function getEntrys() {
        global $db;
        $stmt = $db->prepare("SELECT * FROM gaestebuch");
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            while($res = $stmt->fetch()) {
                echo('<tr>
                        <td>'.$res[1].'</td>
                        <td>'.$res[2].'</td>
                                <td>'.$res[3].'</td>
                                <td>'.$res[4].'</td>
                                <td>'.$res[5].'</td>
                                <td><a href="deleteEntry.php?id='.$res[0].'">Löschen</a></td>
                            </tr>
                            ');
            }
        }
     }

?>

<!doctype html>

<html lang="de">

<head>
    <meta charset="utf-8">

    <title>Haarstudio Aussergewöhnlich | Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="gästebuchverwaltung.css?v=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
<h1>Gästebucheinträge verwalten</h1>
    <div class="entrys-section">
    <table>
    <tr>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Eintrag</th>
        <th>Datum</th>
        <th>IP</th>
    </tr>
    <?php getEntrys();?>
    </table>
    </div>
</body>