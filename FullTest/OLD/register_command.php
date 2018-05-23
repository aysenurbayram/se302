<?php
			include "db_baglan.php";	
			
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$phone = $_POST['phone'];
			$mail = $_POST['mail'];
			$password = $_POST['password'];	
			$picture = $_POST['picture'];
			$role = $_POST['role'];
				
			
	if((!(is_numeric($phone))) or ((strlen($password) < 6) and (ctype_alnum($password) ) ) or (empty($firstname)) or (empty($lastname)) or (empty($mail))  ){
						echo'<div id = "kayitbasarilicart">';
		echo "<h3>Kayıt Başarısız</h3>";
		header("Location:register.php");
		include('404-content.php');
						echo'</div>';
	}else{
		$sorgu = mysql_query("insert into Member(firstname, lastname, phone,mail, password,picture, role) VALUES ('$firstname','$lastname','$phone','$mail','$password','$picture','$role')");

			if($sorgu){
								echo'<div id = "kayitbasarilicart">';
					echo "<h3>Kayıt Başarılı</h3>";
					header("Location:index.php");
					include('basarili.php');
					echo'</div>';
			}
	}
	
 			

?>