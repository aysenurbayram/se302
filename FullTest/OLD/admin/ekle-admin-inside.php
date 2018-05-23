		<form action="#" method="POST" id="update_blog" class="comment-form frm-contact">
<input type="submit" name='update_blog' class="button--common button--border button--white button--hover-main" value="Admin Ekle">

							<h5>Ad</h5>
									<input type="text" name="firstname" value=""  placeholder="Ad" id="input-name1" class="form-control">
							<h5>Soyad</h5>
									<input type="text" name="lastname" value=""  placeholder="Soyad" id="input-name1" class="form-control">
							<h5>Mail Adresi</h5>
									<input type="text" name="mail" value=""  placeholder="Mail Adresi" id="input-name1" class="form-control">
							<h5>Parola</h5>
									<input type="password" name="password" value=""  placeholder="Parola" id="input-name1" class="form-control">

						<br/><br/><br/>
					</form>
<?php
if(isset($_POST['update_blog'])){
	include ("services/db_baglan.php");
			$idAdmin = $_POST['idAdmin'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$mail = $_POST['mail'];
			$password = $_POST['password'];
			$role = $_POST['role'];

			
if((empty($firstname)) || (empty($lastname)) || (empty($mail)) || (empty($password)) ){			
	if((empty($firstname))  ){
		echo'<div id = "kayitbasarilicart">';
		header("Location:suggest-item.php");
		echo '<script type="text/javascript">alert("Admin ekleme işlemi başarısız! Ad giriniz");</script>';
		echo'</div>';
	}
	if((empty($lastname)) ){
		echo'<div id = "kayitbasarilicart">';
		header("Location:suggest-item.php");
		echo '<script type="text/javascript">alert("Admin ekleme işlemi başarısız! Soyad giriniz.");</script>';
		echo'</div>';
	}
	if((empty($mail))){
		echo'<div id = "kayitbasarilicart">';
		header("Location:suggest-item.php");
		echo '<script type="text/javascript">alert("Admin ekleme işlemi başarısız! Mail Adresi giriniz.");</script>';
		echo'</div>';
	}
	if( (empty($password)) ){
		echo'<div id = "kayitbasarilicart">';
		header("Location:suggest-item.php");
		echo '<script type="text/javascript">alert("Admin ekleme işlemi başarısız! Parola bilgisi giriniz.");</script>';
		echo'</div>';
	}
	


}		

if(((strlen($password) < 6) and (ctype_alnum($password) ) )  ){
		echo'<div id = "kayitbasarilicart">';
		header("Location:register.php");
		echo '<script type="text/javascript">alert("Admin ekleme işlemi başarısız! Parola bilgisi en az 6 karakter ve içerisinde en az 1 harf bulunması gerekir");</script>';
		echo'</div>';
	}
	
	else{
								
		$sorgu=mysql_query("INSERT INTO `Admin`(`idAdmin`, `firstname`, `lastname`, `mail`, `password`, `role`) 
VALUES ('$idAdmin','$firstname','$lastname','$mail','$password','admin')");

			if($sorgu){
				echo '<script type="text/javascript">alert("Admin ekleme işlemi başarıyla tamamlandı.");</script>';
				echo "<meta http-equiv='refresh' content='0'>";

			}else{
				echo '<script type="text/javascript">alert("Admin ekleme işlemi başarısız.");</script>';
			}
	}
}
?>