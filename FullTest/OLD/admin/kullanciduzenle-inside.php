		<form action="#" method="POST" id="update_blog" class="comment-form frm-contact">
<input type="submit" name='update_blog' class="button--common button--border button--white button--hover-main" value="Kullanıcı Güncelle">

				<?php
					$mail = $_SESSION['mail'];
				?>
				<?php
					include "services/db_baglan.php";
					$sorgu_admin = mysql_query("SELECT * FROM  `Admin` WHERE mail='$mail'")
				?>
        <?php
		$duzenle=$_GET["deger"];
					include_once('services/manage.php'); 
					$allkullanici = getMemberID();

					if(count($allkullanici) != 0){
						foreach ($allkullanici as $kullanici_list) {
							echo '
							<h5>Admin ID</h5>
									<input type="text" name="idMember" value="'.$kullanici_list['idMember'].'"  placeholder="Kullanıcı ID" id="input-name1" class="form-control" readonly>

							<h5>Ad</h5>
									<input type="text" name="firstname" value="'.$kullanici_list['firstname'].'"  placeholder="Ad" id="input-name1" class="form-control" readonly>
							<h5>Soyad</h5>
									<input type="text" name="lastname" value="'.$kullanici_list['lastname'].'"  placeholder="Soyad" id="input-name1" class="form-control" readonly>
							<h5>Telefon</h5>
									<input type="text" name="phone" value="'.$kullanici_list['phone'].'"  placeholder="Telefon" id="input-name1" class="form-control" readonly>							
							<h5>Mail Adresi</h5>
									<input type="text" name="mail" value="'.$kullanici_list['mail'].'"  placeholder="Mail Adresi" id="input-name1" class="form-control" readonly>
							<h5>Parola</h5>
									<input type="password" name="password" value="'.$kullanici_list['password'].'"  placeholder="Parola" id="input-name1" class="form-control" readonly>

							<h5>Kullanıcı Resim URL</h5>
									<input type="text" name="picture" value="'.$kullanici_list['picture'].'"  placeholder="Kullanıcı Resim URL" id="input-name1" class="form-control"readonly>
										<div id= "inform">
			<!--
					Kullanıcı Resmi
						<iframe src="upload/upload.php" width="100%" height="450"></iframe>
					</div>
			-->

							<h5>Kullanıcı Rolü Değiştir</h5>
									<select id="role" name="role" >
									   <option value="Normal_Uye">Normal Kullanıcı</option>
									   <option value="Onayli_Uye">Yazar Kullanıcı</option>
									   <option value="Onay_Bekliyor">Yazar Olmak İsteyen Kullanıcı</option>
									</select>
							<h5>Kullanıcı Rolü Durumu</h5>
									<h5>'.$kullanici_list['role'].'</h5>
							';
							
							if($sorgu_admin){
								while($duyuru = mysql_fetch_array($sorgu_admin)){
									echo'<input type="text" name="Admin_idAdmin" value="'.$duyuru['idAdmin'].'"  placeholder="" id="input-name1" class="form-control"  style="border: none;background-color:transparent; color:transparent" readonly>';
								}
							}

						}
					}
					else {
					} 
			?>

						<br/><br/><br/>
					</form>
<?php
if(isset($_POST['update_blog'])){
	include ("services/db_baglan.php");
			$idMember = $_POST['idMember'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$mail = $_POST['mail'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$picture = $_POST['picture'];
			$role = $_POST['role'];			
			$Admin_idAdmin = $_POST['Admin_idAdmin'];

			
if((empty($firstname)) || (empty($lastname)) || (empty($phone))|| (empty($mail)) || (empty($password))|| (empty($picture)) ){			
	if((empty($firstname))  ){
		echo'<div id = "kayitbasarilicart">';
		header("Location:suggest-item.php");
		echo '<script type="text/javascript">alert("Kullanıcı güncelleme işlemi başarısız! Ad giriniz");</script>';
		echo'</div>';
	}
	if((empty($lastname)) ){
		echo'<div id = "kayitbasarilicart">';
		header("Location:suggest-item.php");
		echo '<script type="text/javascript">alert("Kullanıcı güncelleme işlemi başarısız! Soyad giriniz.");</script>';
		echo'</div>';
	}
	if((empty($phone))){
		echo'<div id = "kayitbasarilicart">';
		header("Location:suggest-item.php");
		echo '<script type="text/javascript">alert("Kullanıcı güncelleme işlemi başarısız! Telefon giriniz.");</script>';
		echo'</div>';
	}
	if((empty($mail))){
		echo'<div id = "kayitbasarilicart">';
		header("Location:suggest-item.php");
		echo '<script type="text/javascript">alert("Kullanıcı güncelleme işlemi başarısız! Mail Adresi giriniz.");</script>';
		echo'</div>';
	}
	if( (empty($password)) ){
		echo'<div id = "kayitbasarilicart">';
		header("Location:suggest-item.php");
		echo '<script type="text/javascript">alert("Kullanıcı güncelleme işlemi başarısız! Parola bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if( (empty($picture)) ){
		echo'<div id = "kayitbasarilicart">';
		header("Location:suggest-item.php");
		echo '<script type="text/javascript">alert("Kullanıcı güncelleme işlemi başarısız! Resim URL bilgisi giriniz.");</script>';
		echo'</div>';
	}
	


}		

if(((strlen($password) < 6) and (ctype_alnum($password) ) )  ){
		echo'<div id = "kayitbasarilicart">';
		header("Location:register.php");
		echo '<script type="text/javascript">alert("Kullanıcı güncelleme işlemi başarısız! Parola bilgisi en az 6 karakter ve içerisinde en az 1 harf bulunması gerekir");</script>';
		echo'</div>';
	}
	
	else{
								
		$sorgu=mysql_query("UPDATE Member SET idMember='$idMember' , firstname='$firstname' , lastname='$lastname' , phone='$phone', mail='$mail' , password='$password' , picture='$picture', role='$role', Admin_idAdmin='$Admin_idAdmin'
		WHERE idMember='$idMember'");
		
			if($sorgu){
				echo '<script type="text/javascript">alert("Kullanıcı güncelleme işlemi başarıyla tamamlandı.");</script>';
				echo "<meta http-equiv='refresh' content='0'>";

			}else{
				echo '<script type="text/javascript">alert("Kullanıcı güncelleme işlemi başarısız.");</script>';
			}
	}
}
?>