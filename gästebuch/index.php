<?php 
try {
    $db = new PDO("mysql:host=localhost;port=3306;dbname=haarstudioaussergewoehnlich;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 } catch (PDOEXxecption $e) {
    die('self error!');
 }


if(isset($_POST["postEntry"])) {
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = htmlspecialchars(strip_tags(trim($_POST["email"])));
    $entry = htmlspecialchars(strip_tags(trim($_POST["entry"])));
    postEntry($name, $email, $entry);
} 

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$ip = getIPAddress();  

 function postEntry($name, $email, $entry) {
    global $db;
    $stmt = $db->prepare("INSERT INTO gaestebuch  (name, email, entry, time, ip) VALUES (:name, :email, :entry, :time, :ip)");
    $stmt->bindParam("name", $name);
    $stmt->bindParam("email", $email);
    $stmt->bindParam("entry", $entry);
    $stmt->bindParam("time", $timestamp);
    //d.m.Y - H:i:s
    $timestamp = date("d.m.Y");
    $ip = getIPAddress();
    $stmt->bindParam("ip", $ip);
    $stmt->execute();
 }

 function getEntrys() {
    global $db;
    $stmt = $db->prepare("SELECT name, entry, time FROM gaestebuch");
    $stmt->execute();
    if($stmt->rowCount() > 0) {
        while($res = $stmt->fetch()) {
            echo('<div class="entry">
                    <div>'.$res[0].'</div>
                    <div>'.$res[1].'</div>
                    <div>'.$res[2].'</div>
                </div>');
        }
    }
 }

?>


<!doctype html>

<html lang="de">

<head>
    <meta charset="utf-8">

    <title>Haarstudio Aussergewöhnlich | Gästebuch</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="gaestebuch.css?v=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
    <div class="form-entry-section">
        <h1>Ins Gästebuch eintragen</h1>
        

        <form action="" method="post">
        <h2>Sehr geehrte Kundschaft,<br>
        Sie waren mit unserem Service zufrieden? Wir sind für jeden Lob, Anregung oder Kritik dankbar. Tragen Sie sich dafür in unserem Gästebuch ein.</h2>
            <input name="name" class="name-input" type="text" placeholder="Ihr Name">
            <input name="email" type="email" placeholder="E-Mail">
            <textarea name="entry" placeholder="Ihr Eintrag"></textarea>
            <div
                class="h-captcha"
                data-sitekey="2878a927-a652-4b6b-9a9f-58d84d405f6e"
                data-theme="dark"
                data-error-callback="onError">
            </div>
            <button name="postEntry" type="submit">Eintragen</button>
        </form>
    </div>
    <div class="entrys-section">
    <h1>Einträge</h1>
        <?php getEntrys(); ?>
    </div>


    <script src="https://hcaptcha.com/1/api.js?hl=de" async defer></script>
    <script type="text/javascript">
        hcaptcha.render('captcha-1', {
        sitekey: '2878a927-a652-4b6b-9a9f-58d84d405f6e',
        theme: 'dark',
        'error-callback': 'onError',
  });
</script>
</body>