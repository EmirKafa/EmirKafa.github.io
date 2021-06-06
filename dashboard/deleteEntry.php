<?php 

try {
    $db = new PDO("mysql:host=localhost;port=3306;dbname=haarstudioaussergewoehnlich;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOEXxecption $e) {
    die('self error!');
}

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    global $db;
        $stmt = $db->prepare("DELETE FROM gaestebuch WHERE id = :id");
        $stmt->bindParam("id", $id);
        $stmt->execute();
        header("Location: gästebuchverwaltung.php");
} else {
    echo("<script>alert('Fehler');</script>");
    header("Location: gästebuchverwaltung.php");
}

?>