<?php
if (!isset($_SESSION)) {
    session_start();
}

$do = filter_input(INPUT_GET, 'do', FILTER_SANITIZE_STRING);
if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST') {
    if (!isset($do)) {
        header("location:../index.php");
        exit();
    }
}

# Controllers:
if ($do === 'registerAuthor') {
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $passwordCheck = filter_input(INPUT_POST, 'passwordCheck', FILTER_SANITIZE_STRING);
    // ONAYLAYAN ADMİN EKLENECEK // 
    if (isset($firstname) && isset($lastname) && isset($mail) && isset($phone) && isset($password) && isset($passwordCheck)) {
        if ($password === $passwordCheck) {
            registerAuthor($firstname, $lastname, $mail, $phone, $password);
        } else {
            header("location:../register.php?message=match");
        }
    }
} else if ($do === 'registerNormalUser') {
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $passwordCheck = filter_input(INPUT_POST, 'passwordCheck', FILTER_SANITIZE_STRING);
    if (isset($firstname) && isset($lastname) && isset($mail) && isset($phone) && isset($password) && isset($passwordCheck)) {
        if ($password === $passwordCheck) {
            registerNormalUser($firstname, $lastname, $mail, $phone, $password);
        } else {
            header("location:../register.php?message=match");
        }
    }
} else if ($do === 'login') {
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $enteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if (isset($mail) && isset($enteredPassword)) {
        login($mail, $enteredPassword);
    }
} else if ($do === 'adminLogin') {
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $enteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if (isset($mail) && isset($enteredPassword)) {
        adminLogin($mail, $enteredPassword);
    }
} else if ($do === 'logout') {
    logout();
} else if ($do === 'approveAuthor') {
    $idMember = filter_input(INPUT_GET, 'idMember', FILTER_SANITIZE_STRING);
    $approval = filter_input(INPUT_GET, 'approval', FILTER_SANITIZE_STRING);
    if (isset($userID) && isset($approval)) {
        approveUser($idMember, $approval);
    }
} else if ($do === 'suggestItem') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $protein = filter_input(INPUT_POST, 'protein', FILTER_SANITIZE_STRING);
    $vitamin = filter_input(INPUT_POST, 'vitamin', FILTER_SANITIZE_STRING);
    $fat = filter_input(INPUT_POST, 'fat', FILTER_SANITIZE_STRING);
    $carbonhydrate = filter_input(INPUT_POST, 'carbonhydrate', FILTER_SANITIZE_STRING);
    $mineral = filter_input(INPUT_POST, 'mineral', FILTER_SANITIZE_STRING);
    $time = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_STRING);
    $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    if (isset($name) && isset($protein) && isset($vitamin) && isset($fat) && isset($carbonhydrate) && isset($mineral) && isset($time) && isset($location) && isset($description)) {
        suggestItem($name, $protein, $vitamin, $fat, $carbonhydrate, $mineral, $time, $location, $description);
    }
} else if ($do === 'comment') {
    $Blog_idBlog = filter_input(INPUT_GET, 'Blog_idBlog', FILTER_SANITIZE_STRING);
    if (isset($Blog_idBlog)) {
        $commentor = filter_input(INPUT_POST, 'commentor', FILTER_SANITIZE_STRING);
        $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
        if (isset($commentor) && isset($comment)) {
            if (trim($comment) == '') {
                header('location:../404.html');
            } else {
                comment($Blog_idBlog, $commentor, $comment);
            }
        }
    }
} else if ($do === 'changeMemberDetails') {
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    changeMemberDetails($firstname, $lastname, $mail, $phone);
} else if ($do === 'changeLocation') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    changeLocation($name);
} else if ($do === 'changeMemberPassword') {
    $password0 = filter_input(INPUT_POST, 'password0', FILTER_SANITIZE_STRING);
    $password1 = filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_STRING);
    if ($password0 === $password1) {
        changeMemberPassword($password0);
    } else {
        header('location:../profile.php?message=passwordError');
    }
} else if ($do === 'changeLocalMarket') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    changeLocalMarket($name, $phone, $mail, $address, $description);
} else if ($do === 'uploadProfilePicture') {
    $file = $_FILES['file'];
    changeMemberProfilePicture($file);
} else if ($do === 'changeProfilePicture') {
    $file = $_FILES['file'];
    changeMemberProfilePicture($file);
} else if ($do === 'addNewLocation') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    addNewLocation($name);
} else if ($do === 'addNewLocalMarket') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $location_name = filter_input(INPUT_POST, 'location_name', FILTER_SANITIZE_STRING); 
    if (isset($name) && isset($phone) && isset($mail) && isset($address) && isset($description) && isset($location_name)){
        addNewLocalMarket($name, $phone, $mail, $address, $description, $location_name);
    }
} else if ($do === 'addNewItem') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $protein = filter_input(INPUT_POST, 'protein', FILTER_SANITIZE_STRING);
    $vitamin = filter_input(INPUT_POST, 'vitamin', FILTER_SANITIZE_STRING);
    $fat = filter_input(INPUT_POST, 'fat', FILTER_SANITIZE_STRING);
    $carbonhydrate = filter_input(INPUT_POST, 'carbonhydrate', FILTER_SANITIZE_STRING);
    $mineral = filter_input(INPUT_POST, 'mineral', FILTER_SANITIZE_STRING);
    $reference = filter_input(INPUT_POST, 'reference', FILTER_SANITIZE_STRING);
    if (isset($name) && isset($protein) && isset($vitamin) && isset($fat) && isset($carbonhydrate) && isset($mineral) && isset($reference)) {
        addNewItem($name, $protein, $vitamin, $yagorani, $carbonhydrate, $mineral, $reference);
    }
} else if ($do === 'addNewBlog') {
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    if (isset($title) && isset($text) && isset($category)) {
        addNewBlog($title, $text, $category);
    }
} else if ($do === 'addNewComment') { 
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
    $commentor = filter_input(INPUT_POST, 'commentor', FILTER_SANITIZE_STRING);
    addNewComment($comment, $commentor); 
} 

    ### AŞAĞIYA DOĞRU KONTROL EDİLECEK (BAZI FUNCTIONLAR YAZILMAMIŞ) ###

else if ($do === 'deleteComment') {
    $Blog_idBlog = filter_input(INPUT_GET, 'Blog_idBlog', FILTER_SANITIZE_STRING);
    $commentor = filter_input(INPUT_GET, 'commentor', FILTER_SANITIZE_STRING);
    $comment = filter_input(INPUT_GET, 'comment', FILTER_SANITIZE_STRING);
    deleteComment($Blog_idBlog, $commentor, $comment);
} else if ($do === 'deleteLocation') {
    deleteLocation(filter_input(INPUT_GET, 'deleteLocation', FILTER_SANITIZE_STRING));
} else if ($do === 'deleteLocalMarket') {
    $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
    deleteLocalMarket($name);
} else if($do ==='deleteItem') {
    $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
    $protein = filter_input(INPUT_GET, 'protein', FILTER_SANITIZE_STRING);
    $vitamin = filter_input(INPUT_GET, 'vitamin', FILTER_SANITIZE_STRING);
    $fat = filter_input(INPUT_GET, 'fat', FILTER_SANITIZE_STRING);
    $carbonhydrate = filter_input(INPUT_GET, 'carbonhydrate', FILTER_SANITIZE_STRING);
    $mineral = filter_input(INPUT_GET, 'mineral', FILTER_SANITIZE_STRING);
    $reference = filter_input(INPUT_GET, 'reference', FILTER_SANITIZE_STRING);
    deleteItem($name, $protein, $vitamin, $fat, $carbonhydrate, $mineral, $reference);
} else if($do === 'deleteMember') {
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    deleteMember($firstname, $lastname, $mail, $phone, $password);
} else if($do === 'deleteAdmin') {
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    deleteAdmin($firstname, $lastname, $mail, $phone, $password);
} else if ($do === 'changeLocalMarket') {
    $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_GET, 'phone', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_GET, 'mail', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_GET, 'address', FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_GET, 'description', FILTER_SANITIZE_STRING);
    $Location_idLocation = filter_input(INPUT_GET, 'Location_idLocation', FILTER_SANITIZE_STRING);
    changeLocalMarket($name, $phone, $mail, $address, $description, $Location_idLocation);
} else if ($do === 'createAdmin') {
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $passwordCheck = filter_input(INPUT_POST, 'passwordCheck', FILTER_SANITIZE_STRING);
    if (isset($firstname) && isset($lastname) && isset($mail) && isset($phone) && isset($password) && isset($passwordCheck)) {
        if ($password === $passwordCheck) {
            createAdmin($firstname, $lastname, $mail, $phone, $password);
        } else {
            header("location:../register.php?message=match");
        }
    }
}

### DB FUNCTIONS ###

# db configurations:
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



### ADMIN FUNCTIONS ###

# Create Admin:
function createAdmin($firstname, $lastname, $mail, $password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $conn = getDB();
    $stmt = $conn->prepare("INSERT INTO Admin (firstname, lastname, password, mail) "
        . "VALUES (:firstname, :lastname, :password, :mail)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':mail', $mail);
    $result = $stmt->execute();
    closeDB($conn);
}

# Get Admin:
function getAdmin() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Admin");
    $stmt->execute();
    $result = $stmt->fetch();
    closeDB($conn);
    return $result;
}


### EKSİK
function approveUser($idMember, $approval) {
    //onay 1, bekleme 0, red -1
    $conn = getDB();
    $stmt = $conn->prepare("UPDATE Member SET role = :approval WHERE idMember = :idMember");
    $stmt->bindParam(':approval', $approval);
    $stmt->bindParam(':idMember', $idMember);
    $result = $stmt->execute();
    closeDB($conn);

    if ($approval === "0") {
        header('location:../admin-panel.php?message=rejectedList');
        exit();
    }
}

### MEMBERSHIP FUNCTIONS ###

# Suggest Item:
function suggestItem($name, $protein, $vitamin, $fat, $carbonhydrate, $mineral, $time, $location, $description) {
    $conn = getDB();
    $stmt = $conn->prepare("INSERT INTO Suggestion (name, protein, vitamin, fat, carbonhydrate, mineral, time, location, description) VALUES (:name, :protein, :vitamin, :fat, :carbonhydrate, :mineral, :time, :location, :description");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':protein', $protein);
    $stmt->bindParam(':vitamin', $vitamin);
    $stmt->bindParam(':fat', $fat);
    $stmt->bindParam(':carbonhydrate', $carbonhydrate);
    $stmt->bindParam(':mineral', $mineral);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':description', $description);
    $result = $stmt->execute();
    if ($result) {
        header('location:../suggest-item.php?message=succesful');
    }
    closeDB($conn);
}

# Comment:
function comment($commentor, $comment, $Blog_idBlog) {
    $conn = getDB();
    $stmt = $conn->prepare("INSERT INTO Comment (commentor, comment, Blog_idBlog) VALUES (:commentor, :comment, :Blog_idBlog)");
    $stmt->bindParam(':commentor', $commentor);
    $stmt->bindParam(':comment', $comment);
    $stmt->bindParam(':Blog_idBlog', $Blog_idBlog);
    $result = $stmt->execute();
    if ($result) {
        header('location:../comment.php?message=succesful');
    }
    closeDB($conn);
}


### REGISTER FUNCTIONS ###

# Register Author:
function registerAuthor($firstname, $lastname, $mail, $phone, $password) {
    try {
        $hashedPassword = $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $admin = getAdmin();
        if ($Admin == null || $Admin['idAdmin'] == null) {
            createAdmin('admin', 'admin', 'admin@admin.com', '123456', 'inner');
            $admin = getAdmin();
        }
        $role = 'author';
        $conn = getDB();
        $stmt = $conn->prepare("INSERT INTO Member (firstname, lastname, mail, phone, password, Admin_idAdmin) "
            . "VALUES (:firstname, :lastname, :mail, :phone, :password, :Admin_idAdmin)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':Admin_idAdmin', $admin['idAdmin']);
        $result = $stmt->execute();
        if ($result) {
            header("location:../login.php?message=register");
        }
        closeDB($conn);
    } catch (PDOException $e) {
        //echo "Error: " . $e->getMessage();
        if ($e->errorInfo[1] == 1062) {
            header("location:../register.php?message=duplicate");
        }
        closeDB($conn);
    }
}

# Register Normal User:
function registerNormalUser($firstname, $lastname, $mail, $phone, $password) {

        $conn = getDB();
        $stmt = $conn->prepare("INSERT INTO Member (firstname, lastname,phone, mail , password,picture,  role, Admin_idAdmin) "
            . "VALUES (:firstname, :lastname,:phone, :mail, :password,  :picture,  :role, :Admin_idAdmin)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
		$stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':picture', $picture);
		$stmt->bindParam(':role', $role);
        $stmt->bindParam(':Admin_idAdmin', $admin['idAdmin']);
        $result = $stmt->execute();
        if ($result) {
            header("location:../login.php?message=register");
        }
        closeDB($conn);
}

### LOGIN FUNCTIONS ###

# Member login:
function login($email, $enteredPassword) {
    if (!isset($_SESSION)) {
        session_start();
    }
    $redirect = 'my-profile.php';
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Member AS member WHERE member.mail = :mail");
    $stmt->bindParam(':mail', $mail);
    $stmt->execute();
    $result = $stmt->fetch();
    if ($stmt->rowCount() > 0) {
        if ($result['approved'] === -1) {
            header("location:../login.php?message=rejected");
            exit();
        }
        $userPassword = $result['password'];
        if (password_verify($enteredPassword, $userPassword)) {
            $_SESSION['idUser'] = $result['idUser'];
            $_SESSION['mail'] = $result['mail'];
            $_SESSION['lastame'] = $result['lastname'];
            $_SESSION['role'] = $result['role'];
            $_SESSION['login'] = true;
            header("location:../" . $redirect);
        } else {
            header("location:../login.php?message=invalidPassword");
        }
    } else {
        header("location:../login.php?message=invalidEmail");
    }
    closeDB($conn);
}

# Admin login:
function adminLogin($mail, $enteredPassword) {
    $role = 'admin';
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Admin AS admin WHERE admin.mail = :mail");
    $stmt->bindParam(':mail', $mail);
    $stmt->execute();
    $result = $stmt->fetch();
    if ($stmt->rowCount() > 0) {
        $password = $result['password'];
        if (password_verify($enteredPassword, $password)) {
            $_SESSION['idAdmin'] = $result['idAdmin'];
            $_SESSION['mail'] = $result['mail'];
            $_SESSION['lastname'] = $result['lastname'];
            $_SESSION['role'] = $role;
            $_SESSION['login'] = true;
            header("location:../admin-panel.php");
        } else {
            header("location:../admin-login.php?message=invalidPassword");
        }
    } else {
        header("location:../admin-login.php?message=invalidEmail");
    }
}

# Logout:
function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    session_unset();
    session_destroy();
}

### CHANGE FUNCTIONS ###

# Change Member Details (Profile):
function changeMemberDetails($firstname, $lastname, $mail, $phone) {
    if (!isset($_SESSION)) {
        session_start();
    }
    $idMember = $_SESSION['idMember'];
    $conn = getDB();
    $stmt = $conn->prepare("UPDATE Member SET firstname = :name, lastname = :lastname, mail = :mail, phone = :phone WHERE idMember = :idMember");
    $stmt->bindParam(':firstname', $fistname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':idMember', $idMember);
    $result = $stmt->execute();
    closeDB($conn);
    if ($result) {
        header('location:../my-profile.php?message=successDetails');
    } else {
        header('location:../my-profile.php?message=error');
    }
}

# Change Admin Details (Profile):
function changeAdminDetails($firstname, $lastname, $mail) {
    if (!isset($_SESSION)) {
        session_start();
    }
    $idAdmin = $_SESSION['idAdmin'];
    $conn = getDB();
    $stmt = $conn->prepare("UPDATE Admin SET firstname = :name, lastname = :lastname, mail = :mail WHERE idAdmin = :idAdmin");
    $stmt->bindParam(':firstname', $fistname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':idAdmin', $idAdmin);
    $result = $stmt->execute();
    closeDB($conn);
    if ($result) {
        header('location:../my-profile.php?message=successDetails');
    } else {
        header('location:../my-profile.php?message=error');
    }
}

# Change Password:
function changeMemberPassword($password0) {
    $hashedPassword = password_hash($password0, PASSWORD_DEFAULT);
    if (!isset($_SESSION)) {
        session_start();
    }
    $idMember = $_SESSION['idMember'];
    $conn = getDB();
    $stmt = $conn->prepare("UPDATE Member SET password =:hashedPassword WHERE idMember = :idMember");
    $stmt->bindParam(':hashedPassword', $hashedPassword);
    $stmt->bindParam(':idMember', $idMember);
    $result = $stmt->execute();
    closeDB($conn);
    if ($result) {
        header('location:../my-profile.php');
    } else {
        header('location:../404.php');
    }
}

# Change Local Market:
function changeLocalMarket($name, $phone, $mail, $address, $description) {
    $conn = getDB();
    $Location_idLocation = $_SESSION['Location_idLocation'];
    $stmt = $conn->prepare("UPDATE LocalMarket SET name = :name, phone = :phone, mail = :mail, address = :address, description = :description WHERE Location_idLocation = :Location_idLocation");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':description', $description);
    $result = $stmt->execute();
    closeDB($conn);
}

# Change Location:
function changeLocation($name) {
    $conn = getDB();
    $idLocation = $_SESSION['idLocation'];
    $stmt = $conn->prepare("UPDATE Location SET name =:name WHERE idLocation=:idLocation");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(':idLocation', $idLocation);
    $result = $stmt->execute();
    closeDB($conn);
}

### GET FUNCTIONS ###

# Local Market is displayed:
function getLocalMarkets () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM LocalMarket ORDER BY idLocalMarket DESC");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getLocalMarketsbypoint () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT LocalMarket.idLocalMarket,LocalMarket.name,LocalMarket.phone,LocalMarket.mail,LocalMarket.address, LocalMarket.picture,LocalMarket.description, AVG(LocalMarket_Puan.Local_Market_Puan) AS ort
FROM LocalMarket_Puan, LocalMarket
WHERE LocalMarket.idLocalMarket = LocalMarket_Puan.idLocalMarket
GROUP BY LocalMarket.idLocalMarket
HAVING 0 <= (SELECT AVG(LocalMarket_Puan.Local_Market_Puan) FROM LocalMarket_Puan) ORDER by AVG(LocalMarket_Puan.Local_Market_Puan) DESC
LIMIT 10");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}


function getLocalMarketDetails () {
   $conn = getDB();
   $duzenle=$_GET["view"];
   $stmt = $conn->prepare("SELECT * FROM LocalMarket WHERE idLocalMarket = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}
# Item  is displayed:
function getItems () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Item ORDER BY `LocalMarket_idLocalMarket` ASC");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getItems_yaz () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Item WHERE time = 'yaz' ORDER BY `LocalMarket_idLocalMarket` ASC");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getItems_kis () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Item WHERE time = 'kis' ORDER BY `LocalMarket_idLocalMarket` ASC");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getItems_ilkbahar () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Item WHERE time = 'ilkbahar' ORDER BY `LocalMarket_idLocalMarket` ASC");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getItems_sonbahar () {
   $conn = getDB();
   $stmt = $conn->prepare("SELECT * FROM Item WHERE time = 'sonbahar' ORDER BY `LocalMarket_idLocalMarket` ASC");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getItemDetails () {
   $conn = getDB();
   $duzenle=$_GET["view"];
   $stmt = $conn->prepare("SELECT * FROM Item WHERE idItem = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getItemDetails_item () {
   $conn = getDB();
   $duzenle=$_GET["view"];
   $stmt = $conn->prepare("SELECT * FROM Item i, LocalMarket l WHERE i.LocalMarket_idLocalMarket = l.idLocalMarket AND i.idItem = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}


# (Approved or not approved) Author  is displayed:
function getAllAuthors() {
    $role = 'author';
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Member AS member WHERE member.role = :role");
    $stmt->bindParam(':role', $role);
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

# Normal User  is displayed:
function getAllNormalUsers() {
    $role = 'normalUser';
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Member AS member WHERE member.role = :role");
    $stmt->bindParam(':role', $role);
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

# Admin is displayed:
function getAllAdmins() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Admin");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

# Blog posts are displayed:
function getlAllBlogPosts() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Blog ORDER BY idBlog DESC");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

function getlAllSaglikliYasamBlogPosts() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM `Blog` WHERE `category`= 'saglikli_yasam' ORDER BY idBlog DESC");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

function getlAllSporBlogPosts() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM `Blog` WHERE `category`= 'spor' ORDER BY idBlog DESC");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}
function getlAllDogaBlogPosts() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM `Blog` WHERE `category`= 'doga' ORDER BY idBlog DESC");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}
function getlAllOrganikBlogPosts() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM `Blog` WHERE `category`= 'organik' ORDER BY idBlog DESC");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}


function getlAllBlogPostsDetails () {
   $conn = getDB();
   $duzenle=$_GET["view"];
   $stmt = $conn->prepare("SELECT * FROM Blog b WHERE b.idBlog = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getlAllLocalMarketostsDetails () {
   $conn = getDB();
   $duzenle=$_GET["view"];
   $stmt = $conn->prepare("SELECT * FROM LocalMarket l WHERE l.idLocalMarket = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

# (Approved)Author is displayed:
function getAllApprovedAuthor() {
    $role = 'author';
    $approved = 1;
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Member AS member WHERE member.role = :role AND member.approved =:approved");
    $stmt->bindParam(':role', $role);
    $stmt->bindParam(':approved', $approved);
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

# (Waiting approve)Author is displayed:
function getWaitingApproveList() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Member AS  member WHERE member.approved = 0");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

# (Not approved)Author is displayed:
function getRejectedList() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Member AS  member WHERE member.approved = -1");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

# Location ID is displayed through location name:
function getLocationID($location_name) {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Location WHERE name=:location_name");
    $stmt->bindParam(':location_name', $location_name);
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

# Comment is displayed through blog ID:

function getComment () {
   $conn = getDB();
$duzenle=$_GET["view"];
   $stmt = $conn->prepare("SELECT * FROM Comment C WHERE C.Blog_idBlog = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}

function getComment_LocalMarket () {
   $conn = getDB();
$duzenle=$_GET["view"];
   $stmt = $conn->prepare("SELECT * FROM Comment_localmarket C WHERE C.idLocalMarket = $duzenle");
   $stmt->execute();
   $result = $stmt->fetchAll();
   closeDB($conn);
   return $result;
}


### EKLENECEK ###
### PROFILE PICTURE FUNCTIONS ###

# Change Member Profile Picture:
function changeUserProfilePicture($file) {
    if (!isset($_SESSION)) {
        session_start();
    }
    $userID = $_SESSION['userID'];
    $fileAddress = uploadProfilePicture($file);
    $conn = getDB();
    $stmt = $conn->prepare("UPDATE user SET profilePicture =:fileAddress WHERE idUser = :userID");
    $stmt->bindParam(':fileAddress', $fileAddress);
    $stmt->bindParam(':userID', $userID);
    $result = $stmt->execute();
    closeDB($conn);
    if ($result) {
        header('location:../profile.php?message=successPP');
    } else {
        header('location:../profile.php?message=error');
    }
}

# Upload Profile Picture:
function uploadProfilePicture($file) {
    $target_dir = "../uploads/pictures/";
    $fileName = preg_replace("/[^a-zA-Z0-9.]/", "", basename($file['name']));
    $target_file = $target_dir . $fileName;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        $fileName = date("dmYHis") . $fileName;
        $target_file = $target_dir . $fileName;
    }
    if ($file['size'] > 5000000) {
        header('location:../profile.php?message=fileSize');
        exit();
    }
    if ($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png") {
        header('location:../profile.php?message=fileExtension');
        exit();
    }
    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        return 'uploads/pictures/' . $fileName;
    } else {
        header('location:../profile.php?message=unkownError');
        exit();
    }
}


### ADD FUNCTIONS ###

# Add New Local Market:
function addNewLocalMarket($name, $phone, $mail, $address, $description, $location_name) {
    if (!isset($_SESSION)) {
        session_start();
    }
    $Admin_idAdmin = $_SESSION['idAdmin'];
    $conn = getDB();
    $Location_idLocation = getLocationID($location_name);
    $stmt = $conn->prepare("INSERT INTO LocalMarket (name, phone, mail, address, description, Location_idLocation, Admin_idAdmin) VALUES (:name, :phone, :mail, :address, :description, :Location_idLocation, :Admin_idAdmin");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':Location_idLocation', $Location_idLocation);
    $stmt->bindParam(':Admin_idAdmin', $Admin_idAdmin);
    $result = $stmt->execute();
    if ($result) {
        header('location:../admin-panel.php');
    }
    closeDB($conn);
}

# Add New Location:
function addNewLocation($name) {
    try {
        $conn = getDB();
        $stmt = $conn->prepare("INSERT INTO Location (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        $result = $stmt->execute();
        if ($result) {
            header('location:../admin-panel.php');
        }
        closeDB($conn);
    } catch (PDOException $e) {
        //echo "Error: " . $e->getMessage();
        if ($e->errorInfo[1] == 1062) {
            header("location:../admin-panel.php");
        }
    }
}

# Add Comment:
function addNewComment($comment, $commentor) {
    if (!isset($_SESSION)) {
        session_start();
    }
    $Blog_idBlog = $_SESSION['Blog_idBlog'];
    $conn = getDB();
    $stmt = $conn->prepare("INSERT INTO Comment (commentor, comment, Blog_idBlog) VALUES (:commentor, :comment, :Blog_idBlog)");
    $stmt->bindParam(':commentor', $commentor);
    $stmt->bindParam(':comment', $comment);
    $stmt->bindParam(':Blog_idBlog', $Blog_idBlog);
    $result = $stmt->execute();
    if ($result) {
        header('location:../succesful-comment.php');
    }
    else {
        header('location:../404.php');
    }
}

# Add Blog:
function addNewBlog($title, $text, $category, $picture) {
    if (!isset($_SESSION)) {
        session_start();
    }
    $Member_idMember = $_SESSION['idMember'];
    $date = date_timezone_get();
    $conn = getDB();
    $stmt = $conn->prepare("INSERT INTO Blog (title, text, category, date, picture) VALUES (:title, :text, :category, :picture, :Member_idMember, :date");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':text', $text);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':Member_idMember', $Member_idMember);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':picture', $picture);
    $result = $stmt->execute();
    if ($result) {
        header('location:../succesful-post.php');
    }
    else {
        header('location:../404.php');
    }

}

### DELETE FUNCTIONS ###

# Delete Location: 
function deleteLocation($location) {
    $conn = getDB();
    $stmt = $conn->prepare("DELETE FROM Location WHERE name=:name");
    $stmt->bindParam(':name', $location);
    $result = $stmt->execute();
    if ($result) {
        header('location:../admin-panel.php');
    }
    closeDB($conn);
}

# Delete Local Market:
function deleteLocalMarket($name) {
    $conn = getDB();
    $stmt = $conn->prepare("DELETE FROM LocalMarket WHERE name=:name");
    $stmt->bindParam(':name', $name);
    $result = $stmt->execute();
    if ($result) {
        header('location:../admin-panel.php');
    }
    closeDB($conn);
}

# Delete Item:
function deleteItem($item) {
    $conn = getDB();
    $stmt = $conn->prepare("DELETE FROM Item WHERE name=:name");
    $stmt->bindParam(':name', $item);
    $result = $stmt->execute();
    if ($result) {
        header('location:../admin-panel.php');
    }
    closeDB($conn);
}

# Delete Member:
function deleteMember($mail) {
    $conn = getDB();
    $stmt = $conn->prepare("DELETE FROM Member WHERE mail=:mail");
    $stmt->bindParam(':mail', $mail);
    $result = $stmt->execute();
    if ($result) {
        header('location:../admin-panel.php');
    }
    closeDB($conn);
}

# Delete Admin:
function deleteAdmin($mail) {
    $conn = getDB();
    $stmt = $conn->prepare("DELETE FROM Admin WHERE mail=:mail");
    $stmt->bindParam(':mail', $mail);
    $result = $stmt->execute();
    if ($result) {
        header('location:../admin-panel.php');
    }
    closeDB($conn);
}

# Delete Blog: 
function deleteBlog($idBlog) {
    $conn = getDB();
    $stmt = $conn->prepare("DELETE FROM Blog WHERE idBlog=:idBlog");
    $stmt->bindParam('idBlog', $idBlog);
    $result = $stmt->execute();
    if ($result) {
        header('location:../admin-panel.php');
    }
    closeDB($conn);
}

# Delete Comment: 
function deleteComment($idComment) {
    $conn = getDB();
    $stmt = $conn->prepare("DELETE FROM Comment WHERE idComment=:idComment");
    $stmt->bindParam('idComment', $idComment);
    $result = $stmt->execute();
    if ($result) {
        header('location:../admin-panel.php');
    }
    closeDB($conn);
}

### SEARCH FUNCTIONS ###

# Konuma göre ürün bulma:
function getItemByLocation($location) {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Item WHERE location = :location");
    $stmt->bindParam(':location', $location);
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

# Konuma göre yerel market bulma:
function getLocalMarketByLocation($location) {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM LocalMarket WHERE name =:location");
    $stmt->bindParam(':location', $location);
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $result;
}

### STATISTICAL FUNCTIONS ###

# Onaylanan yazar sayısı:
function getAllAuthorCount() {
    $role = 'author';
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Member WHERE role =:role ");
    $stmt->bindParam(':role', $role);
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $stmt->rowCount();
}

# Normal üye sayısı:
function getAllNormalUserCount() {
    $role = 'normalUser';
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Member WHERE role =:role ");
    $stmt->bindParam(':role', $role);
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $stmt->rowCount();
}

# Yerel Market sayısı:
function getAllLocalMarketCount() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM LocalMarket");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $stmt->rowCount();
}

# Eklenmiş ürün sayısı:
function getAllItemCount() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Item");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $stmt->rowCount();
}

# Blog sayısı:
function getAllBlogCount() {
    $conn = getDB();
    $stmt = $conn->prepare("SELECT * FROM Blog");
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDB($conn);
    return $stmt->rowCount();
}

# Yorum sayısı:


// ----- !DB FUNCTIONS ----- //
?>