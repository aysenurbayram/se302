<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include("contents/statics/settings.php"); ?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_portfolio.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Profil Sayfası</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="index.php">Başlangıç</a> / <span>Profil  Sayfası</span>
		</nav>
		<div class="portfolio--wrap margin--bottom-50 js__isotope_wrap">
			<div id="profil_detay">
				<?php
				$mail = $_SESSION['mail'];
				?>
				<?php
				include "services/db_baglan.php";
				$sorgu = mysql_query("SELECT * FROM  `Member` WHERE mail='$mail'")
				?>
				<form method="post" name ="form" action="#">
					<?php
					if($sorgu){
						while($duyuru = mysql_fetch_array($sorgu)){
							echo'
							<h3>Kullanıcı Detayları</h3>
							<hr/>
							<img src="'.$duyuru['picture'].'" height="250" width="250"/>
							<div id= "inform">
							<input type="text" name="idMember" value="'.$duyuru['idMember'].'" placeholder="" id="cmt-name-inp" class="inp--text" style="border: none; background-color:white; color:transparent" readonly>
							</div>
							<div id= "inform">
							Ad
							<input type="text" name="firstname" value="'.$duyuru['firstname'].'" placeholder="Ad" id="firstname" class="form-control" style="background-color:white" readonly>
							</div>
							<div id= "inform">
							Soyad
							<input type="text" name="lastname" value="'.$duyuru['lastname'].'" placeholder="Soyad" id="lastname" class="form-control" style="background-color:white" readonly>
							</div>
							<div id= "inform">
							Telefon
							<input type="tel" name="phone" value="'.$duyuru['phone'].'" placeholder="Telefon" id="phone" class="form-control">
							</div>
							<hr/>
							<h3>Kullanıcı Bilgileri</h3>
							<hr/>
							<div id= "inform">
							E - Mail
							<input type="email" name="mail" value="'.$duyuru['mail'].'" placeholder="E-Mail" id="mail" class="form-control" style="background-color:white" readonly>
							</div>
							<div id= "adres_inform">
							Parola
							<input type="password" name="password" value="'.$duyuru['password'].'" placeholder="Parola" id="password" class="form-control">
							</div>	
							<div id= "adres_inform">
							Kullanıcı Tipi
							<input type="text" name="role" value="'.$duyuru['role'].'" placeholder="Kullanıcı Tipi" id="role" class="form-control" style="background-color:white" readonly>
							</div>
							<div id= "adres_inform">
							Profil Resim URL
							<input type="text" name="picture" value="'.$duyuru['picture'].'" placeholder="Profil Resimi" id="picture" class="form-control">
							</div>
							
					<div id= "inform">
						<iframe src="upload/upload.php" width="150%" height="690"></iframe>
					</div>									
							<hr/>
							<input type="submit" name="submit" value="Profil Bilgilerini Güncelle" class="" id="">';	
						}
					}	?>
				</form>
				
				<?php
				if(isset($_POST['submit']))
{ 
				
			include "db_baglan.php";
				
								$idMember=$_POST['idMember'];
								$firstname=$_POST['firstname'];
								$lastname=$_POST['lastname'];		
								$phone=$_POST['phone'];
								$mail=$_POST['mail'];
								$password=$_POST['password'];
								$picture=$_POST['picture'];	
								$role=$_POST['role'];									

$sorgu=mysql_query("update Member set idMember='$idMember', firstname='$firstname' , lastname='$lastname', phone='$phone', mail='$mail', password='$password' , picture='$picture', role='$role' where idMember='$idMember'");
	
			if($sorgu){
				echo'<div id = "kayitbasarilicart">';
					echo '<script type="text/javascript">alert("Profil bilgileriniz başarıyla güncellendi!");</script>';
				echo'</div>';
echo "<meta http-equiv='refresh' content='0'>";
			}else{
				echo'<div id = "kayitbasarilicart">';
					echo '<script type="text/javascript">alert("Profil bilgileriniz güncellem işlemi başarısız!");</script>';
				echo'</div>';
			}
}
?>	
				
			</div>
		</div>
	</div>
	<?php include ("contents/statics/footer.php"); ?>
</div>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>