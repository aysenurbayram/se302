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
	mysql_query("SET NAMES UTF8");
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

function getItemDetails () {
   $conn = getDB();
   $duzenle=$_GET["deger"];
   $stmt = $conn->prepare("SELECT * FROM Item WHERE idItem = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getLocalMarkets () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM LocalMarket ORDER BY idLocalMarket DESC");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getlAllLocalMarketostsDetails () {
   $conn = getDB();
   $duzenle=$_GET["deger"];
   $stmt = $conn->prepare("SELECT * FROM LocalMarket l WHERE l.idLocalMarket = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getlAllBlogPosts() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Blog ORDER BY idBlog DESC");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

function getlAllBlogPostsDetails () {
   $conn = getDB();
   $duzenle=$_GET["deger"];
   $stmt = $conn->prepare("SELECT * FROM Blog b WHERE b.idBlog = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getAdmin() {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Admin");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getMember() {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Member");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getMember_Normal() {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Member WHERE role = 'Normal_Uye'");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}


function getMember_EngelliKullanici() {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Member WHERE isBaned = 'true'");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getMember_EngelliOlmayanKullanici() {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Member WHERE isBaned = 'false'");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getMember_Yazar() {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Member WHERE role = 'Onayli_Uye'");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getMember_Yazarolmakisteyen_Kullanici() {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Member WHERE role = 'Onay_Bekliyor'");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getAdminID() {
	$conn = getDB();
   $duzenle=$_GET["deger"];
   $stmt = $conn->prepare("SELECT * FROM Admin a WHERE a.idAdmin = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getMemberID() {
	$conn = getDB();
   $duzenle=$_GET["deger"];
   $stmt = $conn->prepare("SELECT * FROM Member m WHERE m.idMember = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getComment () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Comment C");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getComment_LocalMarket () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Comment_localmarket C");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getSuggestItem () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM suggest_item");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getContact () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM contact");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}
function getAbone () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM abone");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}


?>