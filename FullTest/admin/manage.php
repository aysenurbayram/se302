<?php
function getDB() {
    $servername = "localhost";
    $username = "yazilimt_user";
    $password = "283467OOoo+";
    $dbname = "yazilimt_todays";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
    ];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password, $options);
    return $conn;
}

function closeDB($conn) {
    $conn = null;
}
function getItems () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Item");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}
?>